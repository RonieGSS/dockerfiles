FROM hxhroniegss/cakephp3
LABEL maintainer="Ronie Vincent Horca <ronievincent.gss@gmail.com>"
# Changed directory to cakephp
WORKDIR /var/www/html/src/cakephp

RUN composer install -o \
    && bin/cake plugin assets symlink

