FROM debian:bullseye
LABEL maintainer = "Ronie Vincent Horca <hxhronie@gmail.com>"
USER root:root
COPY ./kubernetes.txt .
RUN apt-get update && apt-get install -y \
	apt-transport-https \
	sudo \
	wget \
	vim \
	ssh \
	openssh-client \
	openssh-server \
	ssh-askpass-gnome \
	curl \
	gnupg \
	&& curl -s https://packages.cloud.google.com/apt/doc/apt-key.gpg | apt-key add - \
	&& cat kubernetes.txt > /etc/apt/sources.list.d/kubernetes.list \
	&& apt-get update && apt-get install -y \
		kubelet \
		kubeadm \
		kubectl \
	&& apt-mark hold \
		kubelet \
		kubeadm \
		kubectl \
	&& curl -o aws-iam-authenticator https://amazon-eks.s3-us-west-2.amazonaws.com/$IAM_AUTHENTICATOR_VERSION/$IAM_AUTHENTICATOR_DATE/bin/linux/amd64/aws-iam-authenticator \
	&& chmod +x ./aws-iam-authenticator \
	&& mv ./aws-iam-authenticator /usr/local/bin/aws-iam-authenticator \
	&& curl -LO https://github.com/kubernetes/kops/releases/download/$(curl -s https://api.github.com/repos/kubernetes/kops/releases/latest | grep tag_name | cut -d '"' -f 4)/kops-linux-amd64 \
	&& chmod +x kops-linux-amd64 \
	&& mv kops-linux-amd64 /usr/local/bin/kops
ENTRYPOINT ["/bin/bash", "-c"]