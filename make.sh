#!/bin/sh
composer install
cp .env.example .env
touch database/database.sqlite
php artisan migrate --seed
composer install
npm run build
npm install
npm run build
php artisan serve