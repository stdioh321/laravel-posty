#!/bin/bash

composer install
npm install
port=8000
if [[ -n $1 ]];then port=$1;fi
php artisan serve --host=0.0.0.0 --port=$port --env=example

