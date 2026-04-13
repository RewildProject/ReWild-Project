FROM php:8.3-apache

COPY app/public/ /var/www/html/

EXPOSE 80
