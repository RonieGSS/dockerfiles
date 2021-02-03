FROM golang:1.9.2-alpine
LABEL maintainer="Ronie Vincent Horca<ronievincent.gss@gmail.com>"
ARG appname=app
# Install dependencies
RUN apk add --update tzdata \
    --no-cache ca-certificates git wget\
    && update-ca-certificates

# Install revel and glide
RUN go get github.com/revel/revel \
    && go get github.com/revel/cmd/revel \
    && wget -O glide.zip https://github.com/Masterminds/glide/releases/download/v0.13.1/glide-v0.13.1-linux-386.zip \
    && unzip glide.zip \
    && rm glide.zip \
    && mv linux-386/glide $GOPATH/bin \
    && rm -rf linux-386

ENV PATH $PATH:/go/bin

# Create alias
WORKDIR "/go/src/github.com/gss/${appname}"
WORKDIR "/go/src/github.com/gss/${appname}-src"

EXPOSE 50190
