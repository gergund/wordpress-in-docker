FROM ubuntu:18.04

ENV DEBIAN_FRTONTEND = noninteractive

RUN apt update && \
    apt install -qq -y --no-install-recommends \ 
    php-fpm \
    php-curl \
    php-gd \ 
    php-intl \
    php-mbstring \
    php-mysql \
    php-soap \
    php-xml \
    php-xmlrpc \
    php-zip && \
    mkdir -p /run/php/ && chown -R www-data:www-data /run/php/

COPY configs/php-fpm/www.conf /etc/php/7.2/fpm/pool.d/www.conf

EXPOSE 9000/tcp

WORKDIR /app

ENTRYPOINT [ "/usr/sbin/php-fpm7.2", "--allow-to-run-as-root", "-c", "/etc/php/7.2/fpm", "--nodaemonize" ]
