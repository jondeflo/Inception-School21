all: volumes build run

clean: stop

fclean: clean erase

re: fclean all

volumes:
	mkdir -p /home/jondeflo/data/db
	mkdir -p /home/jondeflo/data/files

build:
	docker-compose -f srcs/docker-compose.yml build

run:
	docker-compose -f srcs/docker-compose.yml up

stop:
	docker-compose -f srcs/docker-compose.yml down

erase: db files purge

db:
	sudo rm -rf /home/jondeflo/data/db/*

files:
	sudo rm -rf /home/jondeflo/data/files/*

purge:
	@-docker stop $(docker ps -qa)
	@-docker rm $(docker ps -qa)
	@-docker rmi -f $(docker images -qa)
	@-docker volume rm $(docker volume ls -q)
	@-docker network rm $(docker network ls -q) 2> /dev/null
	@-docker system prune -a -f
