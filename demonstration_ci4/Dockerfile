FROM composer:2 AS composer

FROM php:8.2-apache

ENV COMPOSER_ALLOW_SUPERUSER=1 \
    CI_ENVIRONMENT=production \
    PORT=10000

RUN apt-get update \
    && apt-get install -y --no-install-recommends libicu-dev libonig-dev unzip \
    && docker-php-ext-install -j"$(nproc)" intl mbstring opcache \
    && a2enmod rewrite \
    && sed -ri 's/^Listen 80$/Listen 10000/' /etc/apache2/ports.conf \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer /usr/bin/composer /usr/local/bin/composer

WORKDIR /var/www/html

COPY . .
COPY docker/apache-site.conf /etc/apache2/sites-available/000-default.conf
COPY docker/render-start.sh /usr/local/bin/render-start

RUN composer install --no-dev --no-interaction --no-progress --prefer-dist --optimize-autoloader \
    && mkdir -p writable/cache writable/debugbar writable/logs writable/session writable/uploads \
    && chown -R www-data:www-data writable \
    && chmod +x /usr/local/bin/render-start

EXPOSE 10000

CMD ["render-start"]
