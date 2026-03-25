FROM php:8.4-fpm-alpine AS builder

RUN apk add --no-cache \
    libpq-dev \
    libzip-dev \
    zip \
    unzip \
    nodejs \
    npm \
    git

RUN docker-php-ext-install pdo pdo_pgsql zip bcmath opcache

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY composer.json composer.lock ./
RUN composer install --no-dev --no-scripts --no-interaction --optimize-autoloader

COPY package.json package-lock.json ./
RUN npm ci

COPY . .

RUN npm run build \
    && composer dump-autoload --optimize

FROM php:8.4-fpm-alpine

RUN apk add --no-cache \
    nginx \
    supervisor \
    libpq-dev \
    libzip-dev \
    zip \
    unzip

RUN docker-php-ext-install pdo pdo_pgsql zip bcmath opcache

WORKDIR /app

COPY --from=builder /app /app

# .dockerignore omits storage/framework/*; realpath() in config/view.php must resolve or view:cache fails.
RUN mkdir -p \
    storage/framework/views \
    storage/framework/cache/data \
    storage/framework/sessions \
    storage/framework/testing \
    storage/logs \
    && chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

COPY docker/nginx.conf /etc/nginx/http.d/default.conf
COPY docker/supervisord.conf /etc/supervisord.conf
COPY docker/start.sh /start.sh
RUN chmod +x /start.sh

EXPOSE 10000

CMD ["/start.sh"]
