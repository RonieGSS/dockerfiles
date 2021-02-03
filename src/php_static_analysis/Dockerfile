FROM php:7.1.5-apache
LABEL maintainer="Ronie Vincent Horca <ronievincent.gss@gmail.com>"
RUN apt-get update && apt-get install -y \
	curl \
	wget \
   && curl -OL https://squizlabs.github.io/PHP_CodeSniffer/phpcs.phar \
   && curl -OL https://squizlabs.github.io/PHP_CodeSniffer/phpcbf.phar \
   && wget https://phar.phpunit.de/phpcpd.phar \
   && wget -c http://static.phpmd.org/php/latest/phpmd.phar \
   && wget https://cs.sensiolabs.org/download/php-cs-fixer-v2.phar -O php-cs-fixer \
   && chmod +x phpcs.phar \
   && chmod +x phpcbf.phar \
   && chmod +x phpcpd.phar \
   && chmod +x phpmd.phar \
   && chmod a+x php-cs-fixer \
   && mv phpcs.phar /usr/local/bin/phpcs \
   && mv phpcbf.phar /usr/local/bin/phpcbf \
   && mv phpcpd.phar /usr/local/bin/phpcpd \
   && mv phpmd.phar /usr/local/bin/phpmd \
   && mv php-cs-fixer /usr/local/bin/php-cs-fixer \
   && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer
WORKDIR /home/php/src