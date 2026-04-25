
docker compose up -d --build
docker exec -it ss-laravel-school-app php artisan key:generate
docker exec -it ss-laravel-school-app php artisan migrate --force
docker exec -it ss-laravel-school-app php artisan config:cache

se si vuole fare seed:
docker exec -it ss-laravel-school-app php artisan db:seed