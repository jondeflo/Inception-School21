rm var/lib/mysql/trigger.my

if [ -f "/var/lib/mysql/wordpress/wp_users.ibd" ]; then
    echo "Database is exist already"
else
    echo "Preparing database"

    service mysql start
    echo "CREATE DATABASE IF NOT EXISTS ${MYSQL_DB};" | mysql
    echo "CREATE USER IF NOT EXISTS '${MYSQL_USER}'@'%' IDENTIFIED BY '${MYSQL_PASSWORD}';" | mysql
    echo "GRANT ALL PRIVILEGES ON *.* TO '${MYSQL_USER}'@'%' IDENTIFIED BY '${MYSQL_PASSWORD}'; FLUSH PRIVILEGES;" | mysql
    echo "CREATE USER IF NOT EXISTS '${MYSQL_USER}'@'localhost' IDENTIFIED BY '${MYSQL_PASSWORD}';" | mysql
    echo "GRANT ALL PRIVILEGES ON *.* TO '${MYSQL_USER}'@'localhost' IDENTIFIED BY '${MYSQL_PASSWORD}'; FLUSH PRIVILEGES;" | mysql
    echo "ALTER USER 'root'@'localhost' IDENTIFIED BY '${MYSQL_ROOT_PASSWORD}';" | mysql
    echo "FLUSH PRIVILEGES;" | mysql
    echo "Database is ready"
fi

touch var/lib/mysql/trigger.my