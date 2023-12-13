#!/bin/bash
mv .env.sample .env
php artisan key:generate
php artisan migrate
php artisan db:seed