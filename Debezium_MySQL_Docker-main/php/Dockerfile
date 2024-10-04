# Используем официальный образ PHP с FPM
FROM php:8.3-fpm

# Обновляем пакеты и устанавливаем необходимые расширения PHP и зависимости
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libonig-dev \
    libzip-dev \
    unzip \
    git \
    curl \
    libcurl4-openssl-dev \
    pkg-config \
    libssl-dev \
    && docker-php-ext-install intl opcache pdo pdo_mysql zip

# Установка MongoDB драйвера
RUN pecl install mongodb && docker-php-ext-enable mongodb

# Установка Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Устанавливаем рабочую директорию для проекта Symfony
WORKDIR /var/www/contact_data

# Копируем локальные файлы проекта
COPY ./../../ /var/www/contact_data

# Установка прав для Symfony
RUN chown -R www-data:www-data /var/www/contact_data

# Установка зависимостей проекта Symfony
RUN echo "Current directory is: $(pwd)"

# Запуск PHP-FPM
CMD ["php-fpm"]
