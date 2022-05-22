<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_ALLOW_REPAIR', true );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wFAa*@B;|,+_P|]2jzNDB:GU>3&lskVeREj&Yfq-e=c}s#0v<V4+>?Jq}@^kDT+{');
define('SECURE_AUTH_KEY',  'Jye7LSTRmRjP)8b4opjiJR`TRHi6vV=]I0GFti$O,swXQ~~A(~R!&c?U%1B(6i ^');
define('LOGGED_IN_KEY',    ')7RbD!0;!).CP5<2>lib+1E<|Z2W=F!Rgn,H6|:)GFe6|Jeiw/y);JP]*HHsLZqE');
define('NONCE_KEY',        'c%7Lk3t<:;R8,+g+xyeh%_wOTuA^=%,fH8r(D^u2R7u-s9q5,xD/EKo8,{rJ}+gD');
define('AUTH_SALT',        'e2)2uJb|H;7Y@y@lteTc:6L_ShjCTU%-Al5R&|Vj9&3H#1>2Xre7e5ig3|`GW}u9');
define('SECURE_AUTH_SALT', '|(k[%85&uN=F!s:H@q*LR>QS DF1]mR&DNTz^S[;jG(Y3#8D%.as(cWvP8F>3Qey');
define('LOGGED_IN_SALT',   '|-)+r`x4!B6USg2eFzp-jo@+$Jum|#,2E|6}]7Trb:4(*={ba],[wlhng+gYk<G]');
define('NONCE_SALT',       'Jtl=>21D7W6aRbAv.F,nflsvm*hBoR+7 R:n$r0D`_|{lca@cP}en*S1XBT=&GkF');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';