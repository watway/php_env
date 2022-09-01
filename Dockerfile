FROM composer:1.10.6 AS composer-build
WORKDIR /app
COPY composer.json .
RUN composer install \
    --optimize-autoloader \
    --no-interaction \
    --no-progress \
    --ignore-platform-reqs

FROM php:7.3.14-fpm-alpine
WORKDIR /app

COPY . .
COPY --chown=nginx --from=composer-build /app /app

# CMD ["php", "test1.php"]