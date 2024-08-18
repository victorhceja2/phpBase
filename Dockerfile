FROM php:7.4-apache

# Instalar extensiones PHP según sea necesario
COPY php.ini /usr/local/etc/php/php.ini
#RUN docker-php-ext-install mysqli pdo_mysql
# Instalar extensiones de PHP necesarias
RUN docker-php-ext-install pdo pdo_mysql

# Copiar el código de la aplicación al contenedor
COPY . /var/www/html/

# Exponer el puerto 80
EXPOSE 8000


#FROM php:8.0-apache

#RUN a2enmod rewrite
#RUN service apache2 restart

#RUN docker-php-ext-install pdo pdo_mysql

#RUN pecl install xdebug && docker-php-ext-enable xdebug