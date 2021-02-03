FROM alpine:3.10.2
LABEL maintainer = "Ronie Vincent Horca <hxhronie@gmail.com>"
USER root:root
RUN apk update \
	&& apk add \
		curl \
		zip \
		unzip \
		sudo \
	&& export OS=$(uname -s| tr '[:upper:]' '[:lower:]') \
	&& export RELEASE=$(curl -s https://api.github.com/repos/kubeless/kubeless/releases/latest | grep tag_name | cut -d '"' -f 4) \
	&& curl -OL https://github.com/kubeless/kubeless/releases/download/$RELEASE/kubeless_$OS-amd64.zip \
	&& unzip kubeless_$OS-amd64.zip \
	&& sudo mv bundles/kubeless_$OS-amd64/kubeless /usr/local/bin/
WORKDIR /home/src
ENTRYPOINT ["kubeless"]