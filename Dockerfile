FROM debian:buster
RUN apt-get update -y && apt-get upgrade -y
RUN apt-get install -y nginx mariadb-server mariadb-client php-fpm php-mysql \
    php-mbstring php-gettext wget openssl vim tar
COPY srcs srcs
ENTRYPOINT bash srcs/install_and_run.sh