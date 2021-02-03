FROM php:7.1.5-apache
LABEL maintainer="Ronie Vincent Horca <ronievincent.gss@gmail.com>"
RUN apt-get update && apt-get install -y \
	curl \
	wget \
    graphviz
WORKDIR /home/php/src
COPY ./phpDocumentor.phar /home
ENTRYPOINT ["php", "/home/phpDocumentor.phar"]