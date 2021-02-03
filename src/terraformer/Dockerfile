FROM alpine:3.10.1
USER root:root
RUN apk update \
    && \
      apk add \
        curl \
    && \
      curl -LO https://github.com/GoogleCloudPlatform/terraformer/releases/download/$(curl -s https://api.github.com/repos/GoogleCloudPlatform/terraformer/releases/latest | grep tag_name | cut -d '"' -f 4)/terraformer-linux-amd64 \
    && \
      chmod +x terraformer-linux-amd64 \
    && \
      mv terraformer-linux-amd64 /usr/local/bin/terraformer
ENTRYPOINT ["terraformer"]