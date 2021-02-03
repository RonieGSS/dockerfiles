FROM alpine:3.7
LABEL maintainer="Ronie Vincent Horca <ronievincent.gss@gmail.com>"
RUN apk add --update \
	multitail
WORKDIR /var/www/html
ENTRYPOINT ["multitail"]