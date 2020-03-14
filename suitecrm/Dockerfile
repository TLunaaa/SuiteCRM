FROM php:7.2-apache

#install libraries
RUN apt-get update \ 
 && apt-get install -y \
        libc-client-dev \
 	libkrb5-dev \
	libzip-dev \
	zlib1g-dev \
	libpng-dev \
 && rm -r /var/lib/apt/lists/* #removes package manager cache
RUN docker-php-ext-configure imap --with-kerberos --with-imap-ssl && \
    docker-php-ext-install \
	imap \
	pdo_mysql \
	mysqli \
	zip \
	gd
#COPY --chown=www-data:www-data . /var/www/html/

EXPOSE 80
