FROM php:8.2-fpm

RUN docker-php-ext-install pdo pdo_mysql

# Dependências adicionais do Laravel
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip

WORKDIR /var/www