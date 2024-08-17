FROM php:8.1-fpm-apache

# Instalar extensiones PHP según sea necesario
COPY php.ini /usr/local/etc/php/php.ini
#RUN docker-php-ext-install mysqli pdo_mysql
RUN a2enmod rewrite
RUN service apache2 restart

RUN docker-php-ext-install pdo pdo_mysql

RUN pecl install xdebug && docker-php-ext-enable xdebug

# Copiar tu código PHP
COPY . /var/www/html


#FROM php:8.0-apache

#RUN a2enmod rewrite
#RUN service apache2 restart

#RUN docker-php-ext-install pdo pdo_mysql

#RUN pecl install xdebug && docker-php-ext-enable xdebug