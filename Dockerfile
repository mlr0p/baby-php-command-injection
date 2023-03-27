FROM php:8-apache

COPY index.php /var/www/html
COPY flag.txt /flag.txt

EXPOSE 80/tcp
