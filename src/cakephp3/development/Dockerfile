FROM hxhroniegss/cakephp3
LABEL maintainer="Ronie Vincent Horca <ronievincent.gss@gmail.com>"
ENV APACHE_LOG_DIR=/var/log/apache2 \
    APACHE_PID_FILE=/var/run/apache2.pid \
    APACHE_RUN_DIR=/var/run/apache2

RUN mkdir -p $APACHE_RUN_DIR $APACHE_LOCK_DIR $APACHE_LOG_DIR 
# Changed directory to cakephp
WORKDIR /var/www/html/src/cakephp
ENTRYPOINT ["bash", "-c", "composer install ; apache2 -DFOREGROUND"]