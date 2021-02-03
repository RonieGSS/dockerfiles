FROM hxhroniegss/php
LABEL maintainer="Ronie Vincent Horca <ronievincent.gss@gmail.com>"
USER root:root
RUN apt-get update && apt-get install -y \
	wget \
   && wget https://phar.phpunit.de/phpunit-6.5.phar \
   && chmod +x phpunit-6.5.phar \
   && mv phpunit-6.5.phar /usr/local/bin/phpunit
WORKDIR /src
ENTRYPOINT ["phpunit"]