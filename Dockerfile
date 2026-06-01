FROM php:8.2-apache

# ESTA ES LA LÍNEA CLAVE: Activa el módulo de reescritura
RUN a2enmod rewrite

# Instalar extensiones (opcional, mantén lo que ya tenías)
RUN docker-php-ext-install mysqli

# Copiar configuración y archivos
COPY docker/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY . /var/www/html/
RUN printenv | grep DB_ >> /etc/apache2/envvars
# Permisos
RUN chown -R www-data:www-data /var/www/html
