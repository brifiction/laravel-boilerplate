#
# PHP Dependencies
#
#FROM composer:1.7.2 as vendor
#
#COPY database/ database/
#COPY tests/ tests/
#COPY composer.json composer.json
#COPY composer.lock composer.lock
#
#RUN composer install \
#    --ignore-platform-reqs \
#    --no-interaction \
#    --no-plugins \
#    --no-scripts \
#    --prefer-dist

#
# Laravel App
#
FROM php:7.4-fpm

# Copy composer.lock and composer.json
COPY composer.lock composer.json /var/www/

# Set working directory
WORKDIR /var/www

# Install dependencies (including MSSQL pre-requisites)

# Part 1
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
    gnupg2 \
    && curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add - \
    && curl https://packages.microsoft.com/config/ubuntu/18.04/prod.list \
       > /etc/apt/sources.list.d/mssql-release.list

# Part 2
RUN apt-get update \
    && apt-get install -y \
    build-essential \
    mariadb-client \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libxml2-dev \
    libzip-dev \
    locales \
    apt-transport-https \
    apt-utils \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    nano \
    && apt-get update \
    && ACCEPT_EULA=Y apt-get install -y --no-install-recommends \
    unixodbc-dev \
    msodbcsql17

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install pdo_mysql zip exif pcntl soap
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Copy existing application directory contents
COPY . /var/www

# COPY --from=vendor /app/vendor/ /var/www/vendor/

# Copy existing application directory permissions
COPY --chown=www:www . /var/www

# Change current user to www
USER www

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]

# Prepare local .env file
COPY .env.example /var/www/.env
