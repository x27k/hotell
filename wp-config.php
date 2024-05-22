<?php
define( 'WP_CACHE', true );


/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'oxygctdj_wp292' );

/** Database username */
define( 'DB_USER', 'oxygctdj_wp292' );

/** Database password */
define( 'DB_PASSWORD', 'RS)pS(8WIi.-0@60' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'lj9rpi5j9xbbkmo2yky5bfadbucgyyhkifcrhzypektmyz4tofsqktfbaknt7kvh' );
define( 'SECURE_AUTH_KEY',  'ta9kureschqkftpsmvcrrixdqv2igos96fsnc0ydjkyke2gvllowwsqhi9s3mkij' );
define( 'LOGGED_IN_KEY',    'anjfpduimozigx815awlzs3onmqzkybrpshg9gxoinm8v2ybnhrzikvgxjta0ksm' );
define( 'NONCE_KEY',        'jfzvtp1nkdmuc5brewmqpokhmh2e7p5zq1eex2vrvuhsot8rydzvy3ntozoijcrn' );
define( 'AUTH_SALT',        'jiodt9pb0qnp4lzy8xmrrjqijd8yspmxpuppfwqfaxq8chnwokkfcihkkmupbvpg' );
define( 'SECURE_AUTH_SALT', 'pi3oqttxgaq1zdvwe5ur1xumvy8q8eb7e8oweviowvlin0jnbldglgt3atzckqp7' );
define( 'LOGGED_IN_SALT',   '4os7knio5peqv5dcdvmhd6fdwpckxzvgzalxdivwffpxeaykjvcauui5yxa99tz4' );
define( 'NONCE_SALT',       'dzctvpupoop4qlx27tzrkqszmkksfk2zgwavx36txbktoawqq7nlyi2365vszt4k' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpcn_';

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
