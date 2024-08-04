# Utiliza una imagen base de PHP con Apache
FROM php:7.4-apache

# Instala las extensiones necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copia el código fuente al contenedor
COPY src/ /var/www/html/

# Expone el puerto 80 para el servicio web
EXPOSE 80