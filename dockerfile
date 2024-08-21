# Utiliza una imagen de PHP con Composer como base
FROM composer:2 as composer

# Etapa de construcción
FROM php:7.4-cli

# Copia el directorio de la aplicación al contenedor
COPY . /app

# Cambia al directorio de la aplicación
WORKDIR /app

# Copia los archivos de Composer desde la imagen de Composer
COPY --from=composer /usr/bin/composer /usr/bin/composer

# Instala las dependencias de Composer
RUN composer install --no-dev --optimize-autoloader

# Expone el puerto 8000 para el servidor web
EXPOSE 8000

# Ejecuta las migraciones al construir la imagen (puedes comentar esta línea si prefieres ejecutarlas manualmente)
RUN php artisan migrate

# Establece la clave de la aplicación (puedes comentar esta línea si ya tienes una clave en tu archivo .env)
RUN php artisan key:generate

# Comando para ejecutar el servidor Laravel
CMD php artisan serve --host=0.0.0.0 --port=8000
