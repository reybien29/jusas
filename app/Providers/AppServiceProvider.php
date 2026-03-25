<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use RuntimeException;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->assertDatabaseUrlIsParsable();
        $this->assertSupabaseDatabaseUrlSuitableForRender();
    }

    /**
     * Laravel's ConfigurationUrlParser uses parse_url(); a malformed DB_URL fails with a generic error.
     */
    private function assertDatabaseUrlIsParsable(): void
    {
        if (config('database.default') !== 'pgsql') {
            return;
        }

        $url = config('database.connections.pgsql.url');

        if (! is_string($url) || $url === '') {
            return;
        }

        if (parse_url($url) !== false) {
            return;
        }

        throw new RuntimeException(
            'DB_URL is malformed (parse_url failed). Remove wrapping quotes and line breaks. If your password contains @, #, :, or %, URL-encode it or run: php artisan supabase:render-db-url'
        );
    }

    /**
     * Fail fast with clear messages for common Supabase + Render misconfigurations.
     */
    private function assertSupabaseDatabaseUrlSuitableForRender(): void
    {
        if (! app()->isProduction()) {
            return;
        }

        if (config('database.default') !== 'pgsql') {
            return;
        }

        $url = config('database.connections.pgsql.url');

        if (! is_string($url) || $url === '') {
            return;
        }

        $host = parse_url($url, PHP_URL_HOST);
        $user = parse_url($url, PHP_URL_USER);

        if (! is_string($host)) {
            return;
        }

        if (preg_match('/^db\.[^.]+\.supabase\.co$/', $host) === 1) {
            throw new RuntimeException(
                'DB_URL uses Supabase direct host ('.$host.'). On Render use the Session pooler URI from Supabase Connect (*.pooler.supabase.com), not db.*.supabase.co.'
            );
        }

        if (str_contains($host, 'pooler.supabase.com') && $user === 'postgres') {
            throw new RuntimeException(
                'DB_URL uses user "postgres" with the Supabase pooler. The pooler requires username postgres.<project-ref> (e.g. postgres.orlxefxqijqmvplsmivf) from Supabase → Connect → Session pooler. Plain "postgres" triggers password authentication failures.'
            );
        }
    }
}
