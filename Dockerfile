FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libzip-dev \
    libonig-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql mysqli zip gd mbstring \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN a2enmod rewrite

# Копируем конфигурацию Apache
COPY docker/000-default.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html

COPY backend/ /var/www/html/backend/
COPY frontend/ /var/www/html/frontend/

WORKDIR /var/www/html/backend
RUN composer install --no-dev --optimize-autoloader

# Устанавливаем права доступа
RUN chown -R www-data:www-data /var/www/html

# Возвращаемся в корневую директорию
WORKDIR /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]