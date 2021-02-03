FROM php:7.1.5-apache
LABEL maintainer="Ronie Vincent Horca<ronievincent.gss@gmail.com>"
USER root:root
RUN apt-get update && apt-get install -y \
       libicu-dev \
       libpq-dev \
       libmcrypt-dev \
       git \
       zip \
       unzip \
      && rm -r /var/lib/apt/lists/* \
      && docker-php-ext-install \
       intl \
       mbstring \
       mcrypt \
       pcntl \
      && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer
ENV APP_HOME=/var/www/html
WORKDIR $APP_HOME
ENTRYPOINT ["composer"]