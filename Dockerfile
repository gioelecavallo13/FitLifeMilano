FROM php:8.2-apache

# Install mysqli
RUN docker-php-ext-install mysqli

WORKDIR /var/www/html
COPY . /var/www/html
EXPOSE 80
