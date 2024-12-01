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
    && docker-php-ext-install zip pdo pdo_mysql mbstring

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

# Instalar Yarn
RUN npm install -g yarn

# Configurar directorio de trabajo
WORKDIR /app
COPY . .

# Instalar dependencias de Laravel y optimizar
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
CMD ["php", "artisan", "serve", "--proyectofnlaraveldefinitivo-production.up.railway.app", "--port=3306"]
