#!/bin/bash

composer install
npm install

php artisan serve --host=0.0.0.0
