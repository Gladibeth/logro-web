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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_logro' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

define('WP_HOME', 'http://localhost:8080/logro-web/');
define('WP_SITEURL', 'http://localhost:8080/logro-web/');

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
define( 'AUTH_KEY',         'lJ&jq7_l3wkz4hga%.h/U%_[#)L$]x;hV}G@Q:Gqyo<TB$5v c B5LP-SCf%p60i' );
define( 'SECURE_AUTH_KEY',  '`=dz]Qt`)u|y;Sz|jtB*HnY,S5EF}X`S6K,kM[KY* })4nt[rVy7oN0DjzF? #d~' );
define( 'LOGGED_IN_KEY',    'QI0,WZk]&@[3HCkCigpU/!IrB/%wZ(!~Q9*lcmH-$k,=@K:`lZj5bPcNzk+Dv9_)' );
define( 'NONCE_KEY',        'l-?[)`:YZd5US!q^JdAe`BJemq$2Cz[!cY2;`:$%?2*8INgFl{> >rZyU+?p,i%z' );
define( 'AUTH_SALT',        '$~D[n`ampw 6/e#9yy{9wl!8r`(=mu-ct wsE+A )?[?JD#{;zxMCYrslfh)`;;4' );
define( 'SECURE_AUTH_SALT', 'I|G6X~S/N/C(JD*N2^R8;zgSZ~;),;o[[~&g`:50_hfNB7zPd]PqdA7Amy7#^ti>' );
define( 'LOGGED_IN_SALT',   'N ?R6I|O$<<c/d=-]=w*FQTl~c{=m)-*mUK+%)9._=3*]<7<A}~$RZg;,L%0b?v%' );
define( 'NONCE_SALT',       ')axh_?1>S[-PF!6`94H74?u5FJ}dqD;S7c8.e!Uoktg/MUo+)r03c*78:_tv};Wf' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rxfeezxc_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
