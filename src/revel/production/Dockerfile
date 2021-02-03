FROM hxhroniegss/revel
LABEL maintainer="Ronie Vincent Horca<ronievincent.gss@gmail.com>"

RUN apk add --update mysql mysql-client && rm -f /var/cache/apk/* \
	&& go get -u github.com/naoina/migu/cmd/migu

ARG appname=app
USER root:root
# Copy revel source code to /go/src/github.com/gss/${appname}/
COPY ./ /go/src/github.com/gss/${appname}/
# Changed to /go/src/github.com/gss directory
WORKDIR "/go/src/github.com/gss"
# Symlink the directory
RUN ln -s ${appname}/src/revel /go/src/github.com/gss/${appname}-alias 

WORKDIR "/go/src/github.com/gss/${appname}-alias"
# Install dependencies
RUN glide install

WORKDIR "/go/src/github.com/gss/${appname}/"

# Run the revel app
ENTRYPOINT revel run github.com/gss/${appname}/src/revel prod 50190
