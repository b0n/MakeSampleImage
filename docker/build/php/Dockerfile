FROM php:8-apache

RUN apt-get update &&\
  # JPEG 対応
  apt-get install -y libpng-dev libjpeg62-turbo-dev libfreetype6-dev &&\
  docker-php-ext-configure gd --with-jpeg --with-freetype &&\
  docker-php-ext-install -j$(nproc) gd