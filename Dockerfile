# Use official PHP image with PHP-FPM
FROM php:8.2-fpm

# Install necessary packages
RUN apt-get update \
    && apt-get install -y \
        git \
        curl \
        libpng-dev \
        libonig-dev \
        libxml2-dev \
        zip \
        unzip \
        zlib1g-dev \
        libpq-dev \
        libzip-dev

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /petscare/petscare

# Copy the application files
COPY . .

# Install PHP dependencies
RUN docker-php-ext-install gettext intl pdo_mysql gd

RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Set the entry point for the container
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=5000"]

# Expose the application port
EXPOSE 5000
