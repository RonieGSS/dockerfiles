FROM alpine:3.8
LABEL maintainer = "Ronie Vincent Horca <ronievincent.gss@gmail.com>"
ARG TERRAFORM_VERSION=0.12.3
ARG PUID=1001
ARG PGID=1001
ENV TERRAFORM_VERSION=$TERRAFORM_VERSION
WORKDIR /tmp
RUN apk update && \
    apk add bash \
    ca-certificates \
    git \
    openssh \
    openssh-client \
    openssl \
    unzip \
    wget \
    && \
    wget https://releases.hashicorp.com/terraform/${TERRAFORM_VERSION}/terraform_${TERRAFORM_VERSION}_linux_amd64.zip && \
    unzip terraform_${TERRAFORM_VERSION}_linux_amd64.zip -d /usr/bin && \
    rm -rf /tmp/* && \
    rm -rf /var/cache/apk/* && \
    rm -rf /var/tmp/* && \
    addgroup -g ${PGID} root && \
    adduser -D -u ${PUID} -G root root
WORKDIR /home/.ssh
WORKDIR /home/src
ENTRYPOINT ["/usr/bin/terraform"]