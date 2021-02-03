FROM alpine:3.10.1
LABEL maintainer = "Ronie Vincent Horca <hxhronie@gmail.com>"
USER root:root
ARG IAM_AUTHENTICATOR_VERSION=1.13.7
ARG IAM_AUTHENTICATOR_DATE="2019-06-11"
ENV IAM_AUTHENTICATOR_VERSION=$IAM_AUTHENTICATOR_VERSION
ENV IAM_AUTHENTICATOR_DATE=$IAM_AUTHENTICATOR_DATE
ARG HELM_VERSION="v2.14.3"
ENV HELM_VERSION=$HELM_VERSION
RUN apk update \
	&& apk add \
		curl \
	&& curl -o aws-iam-authenticator https://amazon-eks.s3-us-west-2.amazonaws.com/$IAM_AUTHENTICATOR_VERSION/$IAM_AUTHENTICATOR_DATE/bin/linux/amd64/aws-iam-authenticator \
	&& chmod +x ./aws-iam-authenticator \
	&& mv ./aws-iam-authenticator /usr/local/bin/aws-iam-authenticator \
	&& curl --silent --location "https://github.com/weaveworks/eksctl/releases/download/latest_release/eksctl_$(uname -s)_amd64.tar.gz" | tar xz -C /tmp \
	&& mv /tmp/eksctl /usr/local/bin
WORKDIR /home/src
ENTRYPOINT ["eksctl"]
