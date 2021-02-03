FROM node:8.12.0-alpine
LABEL maintainer = "Ronie Vincent Horca <ronievincent.gss@gmail.com>"
ENV WEBPACK_VERSION='4.19.0' \
	WEBPACK_CLI_VERSION='3.1.0'
WORKDIR /webpack/src
RUN npm install --global \
	webpack@$WEBPACK_VERSION \
	webpack-cli@$WEBPACK_CLI_VERSION