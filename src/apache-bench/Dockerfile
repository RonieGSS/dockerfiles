FROM debian:latest
LABEL maintainer = "Ronie Vincent Horca <ronievincent.gss@gmail.com>"
RUN apt-get update && apt-get install -y \
	apache2-utils \
	&& useradd -m -d /home/test -g sudo test \
	&& echo test:test | chpasswd test \
	&& groupadd test
USER test:test
ENTRYPOINT ["ab"]