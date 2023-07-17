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
define( 'DB_NAME', 'Talha' );

/** Database username */
define( 'DB_USER', 'Talha' );

/** Database password */
define( 'DB_PASSWORD', 'X-x_-[Th-W9qx[oT' );

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
define( 'AUTH_KEY',         '}a,:8B8hpI{Bu(w5$ gTCi!y,f)G9&n5m&T8gj0!6aySshRM TJ|15q(~wW18-er' );
define( 'SECURE_AUTH_KEY',  'Q77+8FwG/xzHsDYNnv2,f<|1*gx1cirKdd}+W.z2!=wA|HZ,6,/ EH-nG)E9MCRL' );
define( 'LOGGED_IN_KEY',    '(c8bT]N9.+bP5n=;NY_:!b41HO(QWgxB^j,UE)o,u(c1,.Z!^7/;xT(IQbWi=Nsd' );
define( 'NONCE_KEY',        'mV4L[1Mtb=^PcWOnzTmYw;o5;75RJtARA|*[t4s0| )O9Wb#aG?`~2!Ik3y_w_)j' );
define( 'AUTH_SALT',        'UYI2`7p|yN=7||?VcO /x6l:b/$L@:m]ExP()(N*hO [#_HZg8aLA7Yzv$?Hc YE' );
define( 'SECURE_AUTH_SALT', ']a?rDea57|F-,s+-,N2gA,Y~h$+h(~9sIh=[u/*a|DK!p*g*s{+#Y3W+oSAla+>+' );
define( 'LOGGED_IN_SALT',   'VzI!8[8g$3~[uK?}*R2gT,zhT4</qcfI| 1?=3x8N`=sdFl#ZCM&|fbMSyJ;cKu ' );
define( 'NONCE_SALT',       'lc{o7de@V/:=qMS=qjp92_8I`-g0NK~sQ~jTKivhAXOf6Rbj_qSof)[y4Ce9~vbB' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
