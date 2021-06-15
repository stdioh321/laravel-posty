#!/bin/bash

docker run --entrypoint="" -p8000:8000 -v `pwd`:/app -w /app -it bitnami/laravel:8.5.18 bash ./startup.sh

