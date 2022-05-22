FROM debian:buster

RUN apt-get -y update
RUN apt-get -y upgrade
RUN apt-get -y install vim
RUN apt-get -y install mariadb-server

ARG MYSQL_ROOT_PASSWORD
ARG MYSQL_DB
ARG MYSQL_USER
ARG MYSQL_PASSWORD

COPY ./conf/my.cnf /etc/mysql/my.cnf
COPY ./tools/start.sh ./

EXPOSE 3306

RUN chmod +x ./start.sh
RUN ./start.sh

CMD ["mysqld"]