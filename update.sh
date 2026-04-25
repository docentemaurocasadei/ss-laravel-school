#!/bin/bash
set -e

cd /opt/apps/ss-laravel-school

git pull origin main

docker compose -f docker-compose.yml -f docker-compose.prod.yml up -d --build

docker exec ss-laravel-school-app chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
docker exec ss-laravel-school-app chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

docker exec ss-laravel-school-app php artisan migrate --force
docker exec ss-laravel-school-app php artisan optimize:clear
docker exec ss-laravel-school-app php artisan scribe:generate

docker exec ss-laravel-school-app php artisan config:cache

echo "Deploy ss-laravel-school completato"
