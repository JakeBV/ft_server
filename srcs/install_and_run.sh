#!/bin/bash

# скачивание wordpress
wget https://wordpress.org/latest.tar.gz

# скачивание phpmyadmin
wget https://www.phpmyadmin.net/downloads/phpMyAdmin-latest-all-languages.tar.gz

# распаковка phpmyadmin в директорию /var/www/html/phpmyadmin
tar -zxvf phpMyAdmin-latest-all-languages.tar.gz -C /var/www/html/
mv /var/www/html/phpMyAdmin* /var/www/html/phpmyadmin

# распаковка wordpress в директорию /var/www/html/wordpress
tar -zxvf latest.tar.gz -C /var/www/html
chown -R www-data:www-data /var/www/html/wordpress/

# удаление архива wordpress
rm -rf latest.tar.gz

# удаление архива phpmyadmin
rm -rf phpMyAdmin-latest-all-languages.tar.gz

# запуск mysql
service mysql start

# создание базу, пользователя в ней и даем ему все привилегии
mysql -uroot -prootpassword -e "CREATE DATABASE wordpress CHARACTER SET utf8 COLLATE utf8_general_ci";
mysql -uroot -prootpassword -e "CREATE USER 'mstoneho'@'localhost' IDENTIFIED BY 'password'";
mysql -uroot -prootpassword -e "GRANT ALL PRIVILEGES ON wordpress.* TO 'mstoneho'@'localhost'";
mysql -uroot -prootpassword -e "FLUSH PRIVILEGES";

# перенос конфиг wordpress в папку /var/www/html/wordpress
mv srcs/wp-config.php /var/www/html/wordpress/wp-config.php

# перенос конфига phpmyadmin
mv srcs/config.inc.php /var/www/html/phpmyadmin

# перенос конфига phpmyadmin в папку /etc/nginx/sites-available/ и активация его созданием символической ссылки
# Удаление ссылки на файл конфигурации по умолчанию из каталога
mv srcs/nginx.conf /etc/nginx/sites-available/nginx.conf
ln -s /etc/nginx/sites-available/nginx.conf /etc/nginx/sites-enabled/
unlink /etc/nginx/sites-enabled/default

# генерация SSL-сертификата
openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
    -subj "/C=RU/ST=Tatarstan/L=Kazan/O=no, Inc./OU=IT/CN=root" \
    -keyout /etc/ssl/private/localhost.com_nginx.key \
    -out  /etc/ssl/certs/localhost.com_nginx.crt

# запуск nginx
service nginx start
service php7.3-fpm start


echo https://localhost/

# запуск облочки bash
bash