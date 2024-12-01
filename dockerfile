FROM php:8.2-cli

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    zip \
    curl \
    nodejs \
    npm \
    && docker-php-ext-install zip

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

# Instalar Yarn
RUN npm install -g yarn

# Copiar los archivos de la aplicación
WORKDIR /app
COPY . .

# Instalar dependencias y optimizar la aplicación
RUN composer install --no-dev --optimize-autoloader && \
    yarn install && \
    yarn prod && \
    php artisan optimize && \
    php artisan route:cache && \
    php artisan view:cache && \
    php artisan migrate --force

# Exponer el puerto
EXPOSE 3306

# Comando por defecto
CMD ["php", "artisan", "serve", "--host=proyectofnlaravel-production.up.railway.app", "--port=3306"]
