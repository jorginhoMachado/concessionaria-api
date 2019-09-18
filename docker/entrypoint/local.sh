#!/bin/sh
. ./docker/sh/porcentage.sh

set -e
echo "[ ${PORCENTAGE_0} ] Back - Starting Endpoint of Application"
if ! [ -d "./vendor" ]; then
    echo "[ ${PORCENTAGE_10} ] Install depedences whit composer..."
    composer install --ignore-platform-reqs --verbose
fi
if ! [ -f "./public/.htaccess" ]; then
    echo "[ ${PORCENTAGE_60} ] .htaccess not found - Copy file .htaccess.sample.domain to .htaccess..."
    cp ./public/.htaccess.sample.domain ./public/.htaccess
fi
apk add php7-bcmath || true
echo "[ ${PORCENTAGE_100} ] Back - Ending Endpoint of Application"
exec "$@"
