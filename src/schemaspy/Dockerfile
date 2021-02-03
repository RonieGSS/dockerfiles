FROM openjdk:8u181-jdk-stretch
LABEL maintainer = "Ronie Vincent Horca <ronievincent.gss@gmail.com>"
USER root:root
ENV MYSQL_CONNECTOR_VERSION='8.0.12'\
	LANG='ja_JP.UTF-8'
WORKDIR /java
WORKDIR /usr/share/fonts
WORKDIR /src
COPY fonts/ipagp.ttf /usr/share/fonts
RUN apt-get update && apt-get install -y graphviz \
	fontconfig \
	curl \
	unzip \
	&& set +x \
	&& fc-cache -fv \
    && curl --silent --location https://dev.mysql.com/get/Downloads/Connector-J/mysql-connector-java-$MYSQL_CONNECTOR_VERSION.tar.gz | tar -C /java -zxvf  - && \
    ln -s mysql-connector-java-$MYSQL_CONNECTOR_VERSION/mysql-connector-java-$MYSQL_CONNECTOR_VERSION.jar /java/mysql-con.jar
COPY schemaspy_jar/schemaspy.jar /java
ENTRYPOINT ["java", "-jar", "/java/schemaspy.jar"]