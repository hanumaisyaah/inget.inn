FROM php:7.4-apache

WORKDIR /var/www/quiz2

RUN apt update \
    && apt install -y \    
    g++ \    
    libicu-dev \
    libpq-dev \
    libbz2-dev \
    libfreetype6-dev libicu-dev libjpeg62-turbo-dev libpng-dev libpq-dev \
    libsasl2-dev libssl-dev libwebp-dev libxpm-dev libzip-dev \
    unzip \
    zip \
    zlib1g-dev \
    libonig-dev \
    apt-utils \
    curl \
    && docker-php-ext-install \
    bz2 \
    intl \
    iconv \
    bcmath \
    opcache \
    calendar \
    mbstring \
    pdo_mysql \
    zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
# RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
# RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
# RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"



# RUN a2enmod rewrite headers \
#     && a2ensite laravel \
#     && a2dissite 000-default 

COPY docker/ /

COPY . /var/www/quiz2
RUN composer install --optimize-autoloader --no-dev

USER root
RUN a2enmod rewrite headers \
    && a2ensite laravel \
    && a2dissite 000-default \
    && chown -R www-data.www-data /var/www/quiz2 \
    && chmod -R 755 /var/www/quiz2 \    
    && chmod -R 777 /var/www/quiz2/storage \
    && service apache2 restart \
    && service apache2 reload 

CMD php artisan serve --host=${ env.INSTANCE_IP };