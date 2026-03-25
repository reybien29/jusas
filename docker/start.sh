#!/bin/sh
set -e

echo "Running database migrations..."
php /app/artisan migrate --force --no-interaction

echo "Caching configuration..."
php /app/artisan config:cache
php /app/artisan route:cache
php /app/artisan view:cache

echo "Starting services..."
exec supervisord -c /etc/supervisord.conf
