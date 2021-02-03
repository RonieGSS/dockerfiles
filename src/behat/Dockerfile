FROM hxhroniegss/composer
LABEL maintainer="Ronie Vincent Horca<ronievincent.gss@gmail.com>"
WORKDIR /behat
COPY ./behat.phar /behat
WORKDIR /src
ENTRYPOINT ["php", "/behat/behat.phar"]