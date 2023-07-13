FROM php:8.1.21-fpm-alpine3.18
MAINTAINER Máté Kocsis <kocsismate@woohoolabs.com>

RUN docker-php-ext-install opcache

ADD ./ /code

WORKDIR /code

EXPOSE 9000

CMD php-fpm
