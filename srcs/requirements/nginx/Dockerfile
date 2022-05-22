FROM debian:buster

RUN apt-get -y update
RUN apt-get -y upgrade
RUN apt-get -y install vim
RUN apt-get -y install nginx
RUN apt-get -y install openssl

RUN openssl req -x509 -sha256 -nodes -days 365 -newkey rsa:2048 -subj '/C=RU/ST=Moscow/L=Moscow/O=Sheriotanda/CN=jondeflo' -keyout /etc/ssl/my.key -out /etc/ssl/my.crt

EXPOSE 443

COPY ./conf/nginx.conf etc/nginx/nginx.conf
CMD ["nginx", "-g", "daemon off;"]