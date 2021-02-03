FROM hxhroniegss/python3
LABEL maintainer = "Ronie Vincent Horca <ronievincent.gss@gmail.com>"
USER root:root
ARG TERRAFORM_VERSION=0.12.3
ENV TERRAFORM_VERSION=$TERRAFORM_VERSION
WORKDIR /tmp
RUN apk --update add --no-cache \
	sudo \
	openssh \
    wget \
  && wget https://releases.hashicorp.com/terraform/${TERRAFORM_VERSION}/terraform_${TERRAFORM_VERSION}_linux_amd64.zip \
  && unzip terraform_${TERRAFORM_VERSION}_linux_amd64.zip -d /usr/bin \
  && rm -rf /tmp/* \
  && rm -rf /var/cache/apk/* \
  && rm -rf /var/tmp/* \
  && pip3 install ansible \
  && mkdir -p /etc/ansible \
  && echo '[local]\nlocalhost\n' > /etc/ansible/hosts
WORKDIR /home/.ssh
WORKDIR /home/src
ENTRYPOINT ["/bin/bash", "-c"]