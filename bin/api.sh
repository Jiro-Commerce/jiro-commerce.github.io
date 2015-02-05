#!/bin/bash

cd build/sami

rm -rf build/sami/build
rm -rf build/sami/cache

# Run API Docs
git clone https://github.com/laravel/framework.git build/sami/laravel

php vendor/bin/sami.php update build/sami/sami.php

cp -r build/sami/build/* /app/public/api

rm -rf build/sami/build
rm -rf build/sami/cache

# Cleanup
rm -rf build/sami/laravel
