FROM php:8.2-fpm

COPY src/composer.* /var/www/laravel-forum-demo/

WORKDIR /var/www/laravel-forum-demo

# Configure timezone to avoid time sync issues
RUN rm /etc/localtime
RUN ln -s /usr/share/zoneinfo/Europe/London /etc/localtime
RUN "date"

# System dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    mariadb-client \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libzip-dev \
    libicu-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    wkhtmltopdf \
    xvfb

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# PHP extensions
RUN docker-php-ext-install pdo_mysql zip exif pcntl
RUN docker-php-ext-configure intl
RUN docker-php-ext-install intl
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd
RUN pecl install xdebug && docker-php-ext-enable xdebug
RUN pecl install redis && docker-php-ext-enable redis

# PHP config
RUN mv $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini
COPY docker/php-fpm/conf.d/99-overrides.ini $PHP_INI_DIR/conf.d/