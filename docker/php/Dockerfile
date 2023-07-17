FROM php:8.1-fpm
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
    libicu-dev \
    zlib1g-dev \
    libpq-dev \
    libzip-dev \
    libpcre3-dev \
    ssmtp vim git cron zip \
    && docker-php-ext-install \
    pdo \
    pdo_pgsql \
    zip
RUN pecl install xdebug && docker-php-ext-enable xdebug