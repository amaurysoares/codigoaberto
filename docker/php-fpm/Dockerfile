FROM php:7.4-fpm-alpine
WORKDIR "/application"

# Install selected extensions and other stuff
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql