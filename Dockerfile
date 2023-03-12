FROM php:8.1-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    libonig-dev \
    libzip-dev \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install mbstring \
    && docker-php-ext-install zip \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug

# Install Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN php -r "unlink('composer-setup.php');"

WORKDIR /app

# Copy the Laravel app code into the container
COPY ./my-project /app

# Install dependencies for the Laravel app
RUN composer install

# Generate the key for the Laravel app
RUN php artisan key:generate

# Expose port 8000
EXPOSE 8000

# Start the PHP development server
CMD php artisan serve --host=0.0.0.0 --port=8000