env >> /var/www/wordpress/env.txt

if [ -f "/var/www/wordpress/wp-config.php" ]; then
    echo "Wordpress is installed already"
else
    echo "Installing Wordpress"

	mv wp-config.php var/www/wordpress

	wp core install --url="$DOMAIN_NAME" --title="$WP_TITLE" --admin_user="$WP_ADMIN" \
	--admin_password="$WP_ADMIN_PASSWORD" --admin_email="$WP_ADMIN_MAIL" \
	--path=/var/www/wordpress --allow-root

	wp user create "$WP_USER" "$WP_USER_MAIL" --user_pass="$WP_USER_PASSWORD" --role=author \
	--path=/var/www/wordpress --allow-root

fi

echo "Ready to serve! Now you may proceed to $DOMAIN_NAME"
/usr/sbin/php-fpm7.3 -F
