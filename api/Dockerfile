FROM php:7.4-apache

WORKDIR /var/www/html/api

RUN apt-get update && apt-get install -y \
        libpng-dev \
        zlib1g-dev \
        libxml2-dev \
        libzip-dev \
        libonig-dev \
        zip \
        curl \
        unzip \
    && docker-php-ext-configure gd \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install zip \
    && docker-php-source delete

COPY ./vhost.conf /etc/apache2/sites-available/000-default.conf

#Run alone with compose
COPY . /var/www/html/api

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN chown -R www-data:www-data /var/www/html/api \
    && a2enmod rewrite

# Copy the entrypoint script into the image and make it executable
COPY entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/entrypoint.sh

# If the script was edited on a Windows machine, convert the line endings
RUN apt-get update && apt-get install -y dos2unix
RUN dos2unix /usr/local/bin/entrypoint.sh

# Set the entrypoint script as the entrypoint
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]

#Run alone with compose
EXPOSE 80