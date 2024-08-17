FROM php:7.4-fpm

# Instalar extensiones PHP según sea necesario
RUN docker-php-ext-install mysqli pdo_mysql

# Copiar tu código PHP
COPY . /var/www/html