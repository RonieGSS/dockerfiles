FROM hxhroniegss/python3
LABEL maintainer = "Ronie Vincent Horca <ronievincent.gss@gmail.com>"
USER root:root
RUN apk --update add --no-cache \
	sudo \
	openssh \
  && pip3 install ansible \
  && mkdir -p /etc/ansible \
  && echo '[local]\nlocalhost\n' > /etc/ansible/hosts
WORKDIR /home/.ssh
WORKDIR /home/src