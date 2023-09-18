# Use the official PHP 8.0 image as the base image
FROM php:8.0-apache

# setup mysqli
RUN docker-php-ext-install mysqli

# setup xdebug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && echo "xdebug.mode=debug" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_host = host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# Start the Apache web server
CMD ["apache2-foreground"]
