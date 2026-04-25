*** docker compose per local e prod
docker compose -f docker-compose.yml -f docker-compose.local.yml up -d --build
docker compose -f docker-compose.yml -f docker-compose.prod.yml up -d --build
*****
--docker compose up -d --build
docker exec -it ss-laravel-school-app php artisan key:generate
docker exec -it ss-laravel-school-app php artisan migrate --force
docker exec -it ss-laravel-school-app php artisan config:cache

se si vuole fare seed:
docker exec -it ss-laravel-school-app php artisan db:seed

*****
per aggiornare su vps in produzione
chmod +x /opt/apps/ss-laravel-school/update.sh