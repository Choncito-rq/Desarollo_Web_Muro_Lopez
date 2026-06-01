# Usamos una imagen de PHP con Apache
FROM php:8.2-apache

# Instalamos extensiones necesarias (ejemplo: mysqli para conectar a base de datos)
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copiamos nuestro código al directorio de Apache
COPY . /var/www/html/

# Configuramos permisos
RUN chown -R www-data:www-data /var/www/html
