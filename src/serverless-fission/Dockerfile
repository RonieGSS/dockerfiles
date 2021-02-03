FROM node:12.11.1-alpine
LABEL maintainer = "Ronie Vincent Horca <hxhronie@gmail.com>"
USER root:root
ARG FISSION_VERSION='1.4.1'
ENV FISSION_VERSION=$FISSION_VERSION
RUN apk --update add \
	curl \
	sudo \
	git \
	openssl \
    sshpass \
    openssh-client \
    && curl -Lo fission https://github.com/fission/fission/releases/download/$FISSION_VERSION/fission-cli-linux \
    && chmod +x fission \
    && sudo mv fission /usr/local/bin/ \
    && mkdir /lib64 && ln -s /lib/libc.musl-x86_64.so.1 /lib64/ld-linux-x86-64.so.2 \
    && npm install serverless -g \
    && git clone https://github.com/infracloudio/serverless-fission/ \
    && cd serverless-fission \
    && npm install
WORKDIR /home/src