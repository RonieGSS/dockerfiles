FROM alpine:3.10.1
LABEL maintainer = "Ronie Vincent Horca <hxhronie@gmail.com>"
USER root:root
ARG IAM_AUTHENTICATOR_VERSION=1.17.9
ARG IAM_AUTHENTICATOR_DATE="2020-08-04"
ENV IAM_AUTHENTICATOR_VERSION=$IAM_AUTHENTICATOR_VERSION
ENV IAM_AUTHENTICATOR_DATE=$IAM_AUTHENTICATOR_DATE
ARG HELM_VERSION="v3.0.0"
ENV HELM_VERSION=$HELM_VERSION
RUN apk update \
	&& apk add \
		curl \
	&& curl -o aws-iam-authenticator https://amazon-eks.s3-us-west-2.amazonaws.com/$IAM_AUTHENTICATOR_VERSION/$IAM_AUTHENTICATOR_DATE/bin/linux/amd64/aws-iam-authenticator \
	&& chmod +x ./aws-iam-authenticator \
	&& mv ./aws-iam-authenticator /usr/local/bin/aws-iam-authenticator \
 	&& curl -O https://get.helm.sh/helm-$HELM_VERSION-linux-amd64.tar.gz \
	&& tar -zxvf helm-$HELM_VERSION-linux-amd64.tar.gz \
	&& mv linux-amd64/helm /usr/local/bin/helm \
	&& rm -r linux-amd64
ENTRYPOINT ["helm"]