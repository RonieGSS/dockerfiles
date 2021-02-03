FROM ruby:2.5.1-alpine3.7
LABEL maintainer = "Ronie Vincent Horca <ronievincent.gss@gmail.com>"

ARG MAILCATCHER_VERSION='0.6.5'

RUN set -xe \
    && apk add --no-cache \
        libstdc++ \
        sqlite-libs \
    && apk add --no-cache --virtual .build-deps \
        build-base \
        sqlite-dev \
    && gem install mailcatcher -v $MAILCATCHER_VERSION --no-ri --no-rdoc \
    && apk del .build-deps

EXPOSE 1025 1080

CMD ["mailcatcher", "--no-quit", "--foreground", "--ip=0.0.0.0"]