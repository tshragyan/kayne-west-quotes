FROM php:8.2-fpm-alpine

RUN apk add --no-cache linux-headers \
    && docker-php-ext-install pdo pdo_mysql sockets

RUN curl -sS https://getcomposer.org/installer | php -- \
    --install-dir=/usr/local/bin --filename=composer

WORKDIR /app
COPY . .

EXPOSE 8000
