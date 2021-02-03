FROM alpine:3.10.1
LABEL maintainer = "Ronie Vincent Horca <hxhronie@gmail.com>"
USER root:root
RUN apk update \
    && apk add \
     --update gettext \
    && apk add --virtual build_deps libintl \
    && apk del build_deps \
    && rm -rf /var/cache/apk/* \
    && rm -rf /var/tmp/*
WORKDIR /home/src
ENTRYPOINT ["/usr/bin/envsubst"]