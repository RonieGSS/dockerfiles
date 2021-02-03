FROM php:7.1.5-apache
LABEL maintainer="Ronie Vincent Horca <ronievincent.gss@gmail.com>"
RUN apt-get update && apt-get install -y \
	curl \
	wget \
   && wget http://pear.php.net/go-pear.phar \
   && php go-pear.phar \
   && pear channel-discover pear.phpdoc.org \
   && pear install phpdoc/phpDocumentor
WORKDIR /home/php/src
ENTRYPOINT ["phpdoc"]