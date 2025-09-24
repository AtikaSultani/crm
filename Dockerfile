FROM php:8.1-fpm

RUN apt-get update && apt-get install -y libzip-dev unzip git curl \
    && docker-php-ext-install zip pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader

CMD ["php-fpm"]
