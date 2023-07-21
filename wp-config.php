<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u397373450_E5w5w' );

/** Database username */
define( 'DB_USER', 'u397373450_8hzm5' );

/** Database password */
define( 'DB_PASSWORD', '4V1LCJ3JiE' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '5$4D7jo=V>`ZYlSAqMnxA#[kANyeG[UQXtB-Rx*VJ,) W8[O:2fc;W010^@U!x0o' );
define( 'SECURE_AUTH_KEY',   'trJR-0Cd^SbL2qOxui}qP^niBZcFG%K Amb)zcl)d[]_+OD+jBB=D{BfNB==JZmu' );
define( 'LOGGED_IN_KEY',     '/2p5Dn=I&=xOh<~{gMmFjPidj5+D:$W{4P$%ET3 <!bB~b0v  z7a]+#g~M&~vRS' );
define( 'NONCE_KEY',         'E1WU^?{G^qR{pC55~aEv]:JW|J8VcrM,NXm-2_57{LErUA2R-Hz@wj%)ZwDk! E$' );
define( 'AUTH_SALT',         'i^}O-%7m$1~syMksAJW;xE&o.|qVi0O+zi eZ&fN+?3I_[}d08~s*u2u]DH!C+%U' );
define( 'SECURE_AUTH_SALT',  '909e_{QknRi(f;(~q{8?3@_D*UM@EZrjr9QyNNVz8XibV}MXUdm,Om05hj))4$>m' );
define( 'LOGGED_IN_SALT',    's24N~G}05/k,kr$PWu(U~J$k>@cLt!6L^t1<T$YE62+c|;B~i! MTssg.x~q3Xk;' );
define( 'NONCE_SALT',        '!Skg%YIRkVme7S4EN;,G$OWq!,t%HdcJY`]O(6E{(]}R68F[7!(?jY#b+NJagM8_' );
define( 'WP_CACHE_KEY_SALT', 'f0(BJ68>=;C[jz/fqVy=TK4RXnt+W~(:}*EG>lWvoKhAg2W6o4)s`0|9>X=Qx9zJ' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
