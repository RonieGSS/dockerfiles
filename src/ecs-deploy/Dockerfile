FROM debian:latest
LABEL maintainer = "Ronie Vincent Horca <ronievincent.gss@gmail.com>"
USER root:root
RUN apt-get update && apt-get install -y \
	python-pip \
	curl \
	wget \
	git \
	unzip \
	zip \
	jq \
	ca-certificates \
   && pip install awscli --upgrade \
   && curl https://raw.githubusercontent.com/silinternational/ecs-deploy/master/ecs-deploy | tee /usr/bin/ecs-deploy \
   && chmod +x /usr/bin/ecs-deploy
WORKDIR /src
ENTRYPOINT ["ecs-deploy"]