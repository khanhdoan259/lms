FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    curl \
    build-essential \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libxml2-dev \
    g++ \
    make \
    autoconf \
    openssl \
    git \
    bash \
    zip \
    unzip \
    wget \
    imagemagick libmagickwand-dev --no-install-recommends

# Install Imagick
RUN pecl install imagick \
&& docker-php-ext-enable imagick

# Install and enable PHP Redis extension
RUN pecl install redis && \
    docker-php-ext-enable redis

RUN docker-php-ext-install \
    pdo_mysql \
    opcache \
    gd \
  && docker-php-ext-configure gd \
    --with-freetype \
    --with-jpeg \
  && docker-php-ext-install -j$(nproc) gd

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
  && chmod +x /usr/local/bin/composer

RUN curl -sL https://deb.nodesource.com/setup_16.x | bash -- &&\
    apt-get install -y nodejs

RUN rm -rf /var/cache/apk/*

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

WORKDIR /usr/share/nginx/html
