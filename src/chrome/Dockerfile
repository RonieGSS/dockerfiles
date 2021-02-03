FROM hxhroniegss/php
LABEL maintainer="Ronie Vincent Horca<ronievincent.gss@gmail.com>"
USER root:root
RUN apt-get update && apt-get install -y \
	    fonts-liberation \
	    fonts-thai-tlwg \
	    fontconfig \
	    libappindicator3-1 \
	    libasound2 \
	    libatk-bridge2.0-0 \
	    libatk1.0-0 \
	    libcairo2 \
	    libcups2 \
	    libnspr4 \
	    libnss3 \
	    libx11-xcb1 \
	    libxss1 \
	    lsb-release \
	    libdbus-1-3 \
	    libgdk-pixbuf2.0-0 \
		wget \
		xdg-utils && \
	wget https://dl.google.com/linux/direct/google-chrome-stable_current_amd64.deb && \
	dpkg -i google-chrome-stable_current_amd64.deb
ENTRYPOINT ["sh", "-c","google-chrome -no-sandbox; composer install; apache2 -DFOREGROUND"]