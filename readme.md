## Laravel Forum Demo

See [Team-Tea-Time/laravel-forum](https://github.com/Team-Tea-Time/laravel-forum) for the package source and docs, or [laravel/laravel](https://github.com/laravel/laravel) for the Laravel framework.

### Local setup

Follow these steps to run the demo locally:

1. Clone this repo and cd to it
2. `docker-compose up -d`
3. `docker-compose exec php-fpm bash`
4. `cp .env.example .env`
5. `php artisan key:generate && php artisan migrate && php artisan demo:reset`
6. Exit the bash session
7. `cd src && npm i`
8. `npm run dev`
9. Open http://localhost:8000/
