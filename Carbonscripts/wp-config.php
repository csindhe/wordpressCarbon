<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'carbonscripts' );

/** MySQL database username */
define( 'DB_USER', 'csuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cspassword' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Gw!M`d^.Tt-`B)ut_|r6mNw&kFFYglTaRI+MYrz+1T-1mlmBJ*YHlXAMj0=kBdU^' );
define( 'SECURE_AUTH_KEY',  'u~&mbu1WC3j.%PU#U;QM&_G_!tzXzs`H[%kz=tBoCgKE+u[o>GG1j5{ NVBGu4IU' );
define( 'LOGGED_IN_KEY',    ',B9K3[avvm^MTAUk<YS{F/-4FE*%o:ZrPQ=>c#f!QAn]eX9~)d^A+>j?YZlqUen8' );
define( 'NONCE_KEY',        '%t3-UlxnH{r8}N=NT9r/@9P0lgSf*Y!.oMZtKmKX)GT2vPeO@GipayMQQ]/;F$!y' );
define( 'AUTH_SALT',        'CCZK3OPgEI.I!J*C)w-?^LgInPuh{y!S5o1&@c=4 Zp&[w0=VF6:o[ rsGM,vlwc' );
define( 'SECURE_AUTH_SALT', 'D0nwJb3<~3PHPp><xg+h~c=SMj9aT)p*T}_U.}mcyd0=x]0,-O300Gx| @cvt3b3' );
define( 'LOGGED_IN_SALT',   'F`c}h:SUz~,dN.4:[%gwr8y--`wFut1`C;pG|8{-EnkZ@FW(]OS5HT#?p9Zuf,tj' );
define( 'NONCE_SALT',       '0nz;x^%YqY5dpN^},?=`Js7hPE5xg3xS7d w(oj(}>o}6`6Sn;T~7-U9r0z]A%Oz' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
