# Laravel 12 runtime: PHP 8.2 + Apache (mod_php) + Composer
FROM php:8.2-apache

# Match the container's www-data user to the host user so files written by
# Apache/Composer inside the bind-mounted project keep the host's ownership.
ARG UID=1000
ARG GID=1000

# System packages: git + unzip for Composer, the *-dev libs for the PHP extensions below.
RUN apt-get update && apt-get install -y --no-install-recommends \
        git \
        unzip \
        libzip-dev \
        libicu-dev \
        libpng-dev \
        libjpeg62-turbo-dev \
        libfreetype-dev \
    && rm -rf /var/lib/apt/lists/*

# PHP extensions. Laravel's hard requirements (ctype, curl, dom, fileinfo, filter,
# hash, mbstring, openssl, pcre, pdo, session, tokenizer, xml) ship with the base image.
#   pdo_mysql - DB_CONNECTION=mysql
#   intl      - Carbon / Number localisation
#   bcmath    - arbitrary-precision math used by framework helpers
#   zip       - Composer dist installs
#   pcntl     - queue:work signal handling, laravel/pail
#   gd        - image handling
#   opcache   - bytecode cache
#   redis     - phpredis client (REDIS_CLIENT=phpredis), installed via PECL below
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j"$(nproc)" \
        pdo_mysql \
        intl \
        bcmath \
        zip \
        pcntl \
        gd \
        opcache

# phpredis (REDIS_CLIENT=phpredis) — a PECL extension, so it is built separately.
RUN pecl install redis \
    && docker-php-ext-enable redis

# PHP configuration: start from the development ini, then layer Laravel-specific overrides.
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
COPY docker/php/laravel.ini "$PHP_INI_DIR/conf.d/zz-laravel.ini"

# Apache: mod_rewrite for public/.htaccess routing, mod_headers for header manipulation,
# a vhost that serves from /public, and a ServerName to silence the FQDN warning.
RUN a2enmod rewrite headers \
    && echo "ServerName localhost" > /etc/apache2/conf-available/servername.conf \
    && a2enconf servername
COPY docker/apache/vhost.conf /etc/apache2/sites-available/000-default.conf

# Composer (copied from the official image, so no curl|sh installer).
COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER=1

# Re-map www-data to the host UID/GID. Composer keeps its cache in $HOME/.composer, so
# www-data (home: /var/www) and root (home: /root) never step on each other's cache.
RUN usermod -u "${UID}" www-data \
    && groupmod -g "${GID}" www-data \
    && mkdir -p /var/www/.composer \
    && chown -R www-data:www-data /var/www

WORKDIR /var/www/html

EXPOSE 80
