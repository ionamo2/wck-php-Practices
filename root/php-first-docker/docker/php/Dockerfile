FROM php:7.2.33-apache
RUN apt-get update \
  && docker-php-ext-install pdo_mysql mysqli mbstring \
  && pecl install xdebug \
  && docker-php-ext-enable xdebug

