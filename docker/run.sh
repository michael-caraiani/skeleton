#!/bin/sh
crond -b
nginx
php-fpm7 -F -R
