FROM php:7.2-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql

RUN curl -sS getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
