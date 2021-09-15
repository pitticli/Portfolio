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
define( 'DB_NAME', 'portfolio_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '_29>3}g>*j1zz(]VCHg%>i`0`bgO}b,[d(D))GeaMxA1qqr2tTJ6{>[*zFk-8#h^' );
define( 'SECURE_AUTH_KEY',  'r/)b*&]IC#Nl26`}Y+.XVdH(RFL7G$:hXYG25A+mDX=zR?y^n6?;<-!E Hz<`YiI' );
define( 'LOGGED_IN_KEY',    '&1T-ot1abC0TES-|9Vyj)f#ZDlOo5_cz.)3tM^W}u;?Z$W,}|v~Bjrlr~){(Jp}0' );
define( 'NONCE_KEY',        'UaukW+(nq$ilziW.91Y^%K`%9BS{2v^WP#Hf}Q:. )>C^]wHYhMEx)=p,-28?qjL' );
define( 'AUTH_SALT',        '9vohzUs--4d`[ PTtwqn@m=?@9REy.{EGDyU`1nn@NPL~9^2/c5%4a1z6C6w]ggt' );
define( 'SECURE_AUTH_SALT', 'k^W^IW4.iZ7G;Gw&2(,,L-R9/hH.mGH<@zI{f)Z -,}s8&X-]@UGSD:OQS{5EBjj' );
define( 'LOGGED_IN_SALT',   '/Ev[:U:Mc6J8*]yFLSS*YSk|>B(Y`RhE)s^oB63wwemw35$n,bao%#-Vf;q@9>aL' );
define( 'NONCE_SALT',       'xj6!:#VI%GvxDkK#[1n0k{.;x{uVut.SQgABC7C}5]YiFp`4I>VJSl##:ggepw<!' );

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
