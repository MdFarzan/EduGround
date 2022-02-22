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
define( 'DB_NAME', 'wp_eduground' );

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
define( 'AUTH_KEY',         '6[bPBg=Nq:(t$@I-U7y2GhW_lhKR~fBd;-^f9l%alZRMT+G 0 ~I*|(zBBrUsl~%' );
define( 'SECURE_AUTH_KEY',  'x+p|?`:crrHau{7;@~kj|OCYFa 9wKma3s}v/~!2sYC0URgzW$DsS9ssA{)IN>A6' );
define( 'LOGGED_IN_KEY',    '`,08 m5qWxaBG.nJ_bz46WmD_?bM%c0VL!x^72PykqbwjX:j,W`0^XLanGK3%7b(' );
define( 'NONCE_KEY',        'a+y;fZ=u6}+8(5z(u*}a+?^nC9Gvo:yG[k[`Ksw%b)nsi8s 0NJ~Crx8!=rF.U1E' );
define( 'AUTH_SALT',        'JZtYRCh-#I6|6QCsPTAJ~{ 1j#gex&8Y<,T6XRVRY;)tD7u@#q6qH6Uv+]vJ]ESv' );
define( 'SECURE_AUTH_SALT', '3g)If|K6gL-AA8YBD&P:3&Sl;sTkqhLyK]JB,z`~5cQm~xo(*+j2j5*ShV8X@`9N' );
define( 'LOGGED_IN_SALT',   'Yn6lK5RR+o30Xv>-Ha8f<ITh+l0:sWB)a]E6-4T4Z<f|_(tf7n[]8sc08;Xf4?F@' );
define( 'NONCE_SALT',       'D{=h;LJ{woqc$W27OD)=O?4}{nJG-bI>[hVj:sbjw8eP<1?*SO~g[V6yb8?s^^KX' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
