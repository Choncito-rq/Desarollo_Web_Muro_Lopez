FROM php:8.2-apache

# Instalar extensiones necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Establecer directorio de trabajo
WORKDIR /var/www/html

# Copiar archivos asegurando permisos
COPY . .

# Asegurar que Apache pueda leer los archivos
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Asegurar que Apache busque index.php por defecto
RUN a2enmod rewrite
