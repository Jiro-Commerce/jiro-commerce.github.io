#!/bin/bash

cd /app/build/sami

rm -rf /app/build/sami/build
rm -rf /app/build/sami/cache

# Run API Docs
git clone https://github.com/laravel/framework.git /app/build/sami/laravel

php /app/vendor/bin/sami.php update /app/build/sami/sami.php

cp -r /app/build/sami/build/* /app/public/api

rm -rf /app/build/sami/build
rm -rf /app/build/sami/cache

# Cleanup
rm -rf /app/build/sami/laravel
