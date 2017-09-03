FROM alpine:latest
MAINTAINER Nikita Chernyi <developer.nikus@gmail.com>

RUN apk --no-cache add nginx php7 php7-fpm php7-json php7-ctype php7-mbstring php7-curl && \
    rm -rf /var/cache/apk/* /tmp/*

COPY ./docker/etc /etc
COPY ./docker/entrypoint.sh /usr/local/bin/entrypoint.sh

RUN chmod +x /usr/local/bin/*

COPY . /var/www
VOLUME /var/www

EXPOSE 8080

CMD ["entrypoint.sh"]
