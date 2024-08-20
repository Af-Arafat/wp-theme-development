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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Theme-development' );

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
define( 'AUTH_KEY',         'EwV+f$069{6:%OYV!G!|T1jC#J<u-rp, 6>dzP{$?/BTRblJ(r-=_~MV1%Er:yhO' );
define( 'SECURE_AUTH_KEY',  '!pRw4a2opoExxW;gF,Fv&Ogc^]N6ajNDRr-<?lQIq)-+HxTUR[3Kf>QIgNo luJ}' );
define( 'LOGGED_IN_KEY',    'z9rIS)6Y1bhJ|O`)}M`CP7,T|kKv9F*Pgqc/gf5 @>a[Yh*,3<4mcbey{i-<0`!y' );
define( 'NONCE_KEY',        '8BW[RQ,wC8HMrt}UIv=3#jZvsyFEr.+P5Q?^hdwhM)+-$$M%F%cpamP jFJ8L$L(' );
define( 'AUTH_SALT',        'sQ]A|n^sZD^7cBPvrb*jq!GW$!BvtCgh Pj]9F_c0$g)G+h~vr`${B3$/w%~PO.Y' );
define( 'SECURE_AUTH_SALT', '6F|zmla&;8Hfjr/@-joE!?bN<(c_?bQemsGp7~@.Z^$/1{]CfaFu9P);8+02DbBw' );
define( 'LOGGED_IN_SALT',   'l&^o|c/Jv_Y=~lT$%d^.s88zPUFT}QaME%<Gr{A*KMsQlio+YAX.)/`o0hjT3m9o' );
define( 'NONCE_SALT',       'RX4:HaWtl={?A%iD2nIrNV5gOi3<=YisCKVV#Xnxszy8[Y(il9?}}x@qtPsb-,^(' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
