FROM php:8.1-fpm

# Instalar extensiones PHP según sea necesario
RUN docker-php-ext-install mysqli pdo_mysql

# Copiar tu código PHP
COPY . /var/www/html