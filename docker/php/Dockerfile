FROM php:7.4-fpm

RUN apt-get update && apt-get install -yqq --no-install-recommends \
    curl \
    libmemcached-dev \
    libz-dev \
    libpq-dev \
    libjpeg-dev \
    libpng-dev \
    libfreetype6-dev \
    libssl-dev \
    libmcrypt-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    && apt-get autoremove -y \
    && rm -rf /var/lib/apt/lists/*

RUN pecl install memcached \
    && docker-php-ext-install bcmath pdo_mysql soap sockets zip \
    && docker-php-ext-enable memcached

USER 1000:1000

WORKDIR /var/www/projet_annuel
