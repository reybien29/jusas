<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

/**
 * Builds a Session pooler DB_URL with a URL-encoded password for Render.
 */
class PrintSupabaseRenderDbUrlCommand extends Command
{
    /**
     * @var string
     */
    protected $signature = 'supabase:render-db-url
                            {--ref=orlxefxqijqmvplsmivf : Supabase project ref}
                            {--pooler-host=aws-1-us-east-1.pooler.supabase.com : Must match Supabase Connect → Session pooler (aws-0 vs aws-1 differs by project)}
                            {--password= : Optional; prefer the interactive prompt}';

    /**
     * @var string
     */
    protected $description = 'Print a postgresql:// DB_URL for Supabase Session pooler (paste into Render → DB_URL)';

    public function handle(): int
    {
        $ref = (string) $this->option('ref');
        $poolerHost = (string) $this->option('pooler-host');
        $password = $this->option('password');

        if ($password === null || $password === '') {
            $password = $this->secret('Database password (Supabase → Project Settings → Database)');
        }

        if ($password === null || $password === '') {
            $this->components->error('Password is required.');

            return self::INVALID;
        }

        $user = 'postgres.'.$ref;
        $encodedPassword = rawurlencode((string) $password);
        $url = sprintf(
            'postgresql://%s:%s@%s:5432/postgres?sslmode=require',
            $user,
            $encodedPassword,
            $poolerHost
        );

        $this->line($url);
        $this->newLine();
        $this->components->info('Paste into Render → jusas → Environment as DB_URL (one line, no quotes). Then save and redeploy.');

        return self::SUCCESS;
    }
}
