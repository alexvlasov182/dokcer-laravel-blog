
up: #Containers start
	docker-compose up -d

down: #Stop
	docker-compose stop

ps:
	docker ps

connect_php:
	docker-compose exec php /bin/sh

connect_nginx:
	docker-compose exec nginx /bin/sh

connect_mysql:
	docker-compose exec mysql /bin/sh