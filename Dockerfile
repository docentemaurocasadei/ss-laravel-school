FROM php:8.2-fpm

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    git unzip libzip-dev vim \
    && docker-php-ext-install pdo pdo_mysql zip \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

#COPY composer.json composer.lock ./
COPY . .
RUN rm -f bootstrap/cache/*.php

RUN composer install --optimize-autoloader --no-interaction


RUN chown -R www-data:www-data storage bootstrap/cache