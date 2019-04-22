FROM ubuntu:18.04

ENV DEBIAN_FRTONTEND = noninteractive

RUN apt update && \
    apt install -qq -y --no-install-recommends \ 
    nginx-full

COPY configs/nginx/vhost.conf /etc/nginx/sites-enabled/

EXPOSE 80/tcp

WORKDIR /app

ENTRYPOINT ["nginx", "-g", "daemon off;"]
