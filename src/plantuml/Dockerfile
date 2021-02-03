FROM openjdk:8u171-jre-alpine3.8
LABEL maintainer = "Ronie Vincent Horca <ronievincent.gss@gmail.com>"
ENV GRAPHVIZ_DOT='/usr/bin/dot' \
	LANG='ja_JP.UTF-8'
WORKDIR /java
WORKDIR /usr/share/fonts
WORKDIR /home/plantuml/src
COPY fonts/ipagp.ttf /usr/share/fonts/
COPY plantuml_jar/plantuml.jar /java
RUN apk add --no-cache graphviz \
	fontconfig \
   && fc-cache -fv
ENTRYPOINT ["java", "-Djava.awt.headless=true","-jar", "/java/plantuml.jar", "-charset", "UTF-8"]