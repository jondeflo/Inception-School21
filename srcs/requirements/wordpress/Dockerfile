FROM debian:buster

RUN apt-get -y update
RUN apt-get -y upgrade
RUN apt-get -y install vim
RUN apt-get -y install php7.3 php-mysqli php7.3-fpm mariadb-client

ADD https://ru.wordpress.org/latest-ru_RU.tar.gz /var/www/
RUN cd /var/www && tar -xf latest-ru_RU.tar.gz
RUN rm -f /var/www/latest-ru_RU.tar.gz

ADD https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar /var/www
RUN cd /var/www && chmod +x wp-cli.phar
RUN mv /var/www/wp-cli.phar /usr/local/bin/wp

RUN mkdir ./run/php/

COPY ./conf/wp-config.php ./
COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d/www.conf
COPY ./tools/start.sh ./

CMD bash ./start.sh