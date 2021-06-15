#!/bin/bash

composer install
npm install

docker run --entrypoint="" -p8000:8000 -v `pwd`:/app -w /app -it bitnami/laravel:8.5.18 php artisan serve --host=0.0.0.0

