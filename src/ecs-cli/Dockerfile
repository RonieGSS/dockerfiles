FROM debian:latest
LABEL maintainer = "Ronie Vincent Horca <ronievincent.gss@gmail.com>"
USER root:root
RUN apt-get update && apt-get install -y \
	curl \
	wget \
	git \
	unzip \
	zip \
	ca-certificates \
   && curl -o /usr/local/bin/ecs-cli https://s3.amazonaws.com/amazon-ecs-cli/ecs-cli-linux-amd64-latest \
   && chmod +x /usr/local/bin/ecs-cli
WORKDIR /src
ENTRYPOINT ["ecs-cli"]