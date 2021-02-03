FROM golang:1.14-rc-alpine3.11
LABEL maintainer = "Ronie Vincent Horca <hxhronie@gmail.com>"
USER root:root
RUN apk --update add --no-cache \
	sudo \
	git \
	make \
	musl \
    build-base \
    openssl \
    sshpass \
    openssh-client \
    ca-certificates \
    libffi-dev \
    python3 \
    python3-dev \
    postgresql-dev \
    && pip3 install --no-cache-dir --upgrade pip cffi \
  	&& pip install --upgrade pip \
  	&& rm -rf /var/cache/* \
  	&& rm -rf /root/.cache/* \
  	&& cd /usr/bin \
  	&& ln -sf python3 python \
  	&& ln -sf pip3 pip \
  	&& cd ../../ \
  	&& pip3 install ansible \
  	&& mkdir -p /etc/ansible \
  	&& echo '[local]\nlocalhost\n' > /etc/ansible/hosts \
	&& mkdir -p $(go env GOPATH)/src/github.com/hashicorp \
	&& cd $_ \
	&& git clone https://github.com/hashicorp/packer.git \
	&& cd packer \
	&& make dev \
	&& rm -r packer

WORKDIR /home/.ssh
WORKDIR /home/src
ENTRYPOINT ["packer"]