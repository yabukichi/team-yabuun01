install:
	docker-compose build
	docker-compose up -d
	docker-compose exec php composer install
	docker-compose exec php php artisan migrate
	docker-compose exec php php artisan key:generate

build:
	docker-compose build

up:
	docker-compose up

upd:
	docker-compose up -d

down:
	docker-compose down

start:
	docker-compose start

stop:
	docker-compose stop

restart:
	docker-compose down
	docker-compose up -d

migrate:
	docker-compose exec php php artisan migrate

refresh:
	docker-compose exec php php artisan migrate:refresh

reset:
	docker-compose exec php php artisan migrate:reset

rollback:
	docker-compose exec php php artisan migrate:rollback

db:
	docker-compose exec db psql -d laravel_development -U docker

ps:
	docker-compose ps

psa:
	docker-compose ps -a

image:
	docker-compose images

tinker:
	docker-compose exec php php artisan tinker

cache:
	docker-compose exec php php artisan cache:clear
	docker-compose exec php php artisan config:clear
	docker-compose exec php php artisan route:clear

list:
	docker-compose exec php php artisan route:list
