<?php
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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'programmer' );

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
define( 'AUTH_KEY',         'tv;~cE|FG=]T ~jVRi^9^u@-bH_buOMt%qt/p~S d&*}6fhDB4;BVZ4>elc]a3#$' );
define( 'SECURE_AUTH_KEY',  'gwX}]Y0;B7Nw8q<e*T7{Ty<X~@SAVtf]k!/Br !(*_i&zhbr:!W[V9bN^bqF>T1;' );
define( 'LOGGED_IN_KEY',    'Lr>|o(;6(KPyB_7=Jy<pI%[aaPK:2EZIf)Z;02`u|5BZ!DFU$PM}8r0h}GJ7zEV1' );
define( 'NONCE_KEY',        '=m>Jg1-3=09H:mq*KSQftq:h.k?F0w,Z9J]%@fxfw#Y92@GCzcf fm9|80lp~XzQ' );
define( 'AUTH_SALT',        '^Km=5_pBkxqDgb<@+si(H!2{PiD[j#OyHA&F:|.lI~Z{Z:A`4vLupouU=YCHh@y%' );
define( 'SECURE_AUTH_SALT', '_CdZ1sVY[O((R;o[;YEg(Tw5[2Y-3m$90hhH(zu`zrONE.q|PjgY;M/5Cth}2U/k' );
define( 'LOGGED_IN_SALT',   'fa*ZODKBmC]Ys62VgZWF^BHi~$[6mUd0r*_w?JIQ }iV;_OWt9&$E[=G2;0emudk' );
define( 'NONCE_SALT',       '7<zL}]lSh,2G?JhWyz{;K5~d|[K84W8d^XcK7S[_V4(4p9d#0|#eh|+76{bGmX*q' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mysecureprefix_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
