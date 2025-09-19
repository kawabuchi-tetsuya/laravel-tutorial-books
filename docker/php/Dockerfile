FROM php:8.4-fpm
COPY php.ini /usr/local/etc/php/

# Package & Library install
RUN apt-get update && apt-get install -y \
  zlib1g-dev \
  libzip-dev \
  mariadb-client \
  vim \
  && docker-php-ext-configure zip \
  && docker-php-ext-install zip pdo_mysql \
  && rm -rf /var/lib/apt/lists/*

# Composer install
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER=1
ENV COMPOSER_HOME=/composer
ENV PATH=$PATH:/composer/vendor/bin

WORKDIR /var/www

RUN composer global require "laravel/installer"
