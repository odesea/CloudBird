FROM php:8.4-apache

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

RUN apt-get update
RUN apt-get install -y --no-install-recommends locales git libicu-dev libpng-dev libxml2-dev libzip-dev libonig-dev libxslt-dev g++

RUN echo "en_US.UTF-8 UTF-8" > /etc/locale.gen
RUN locale-gen

RUN docker-php-ext-configure intl

RUN docker-php-ext-install pdo pdo_mysql mysqli intl gd zip xsl mbstring opcache calendar dom

RUN a2enmod rewrite

RUN pecl install apcu
RUN docker-php-ext-enable apcu

RUN curl -sS https://getcomposer.org/installer | php -- --disable-tls
RUN mv composer.phar /usr/local/bin/composer

WORKDIR /var/www
