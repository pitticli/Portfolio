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
define( 'DB_NAME', 'portfiolio_db' );

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
define( 'AUTH_KEY',         '< RCg8{p[]mj5cac8>X-Y:WB`ikzJ/NNQ;+I&CwzWJ~w#2V3=~Y~)5bk>g=mM50@' );
define( 'SECURE_AUTH_KEY',  'eVE#t96+S]64q#uBQ{wWqmGs#-R&Wgo5$^g0IIiW2:wSYMjENj)ERRt#26M?6S#B' );
define( 'LOGGED_IN_KEY',    'ZC!Co/!!<}`jj_!Lf^;2, zl7li<>Cz_eNbr3y0at;T{; _u{3y &^`3/5Swrls/' );
define( 'NONCE_KEY',        'SG?TwMrfjhbSdeC}x:/1Vev;x@`&};1_prn>8[QtbD;>[Q2)_ec-((?lF&CVB!?%' );
define( 'AUTH_SALT',        '4kQqr?001kM(9A%s=_h`H(TJZH+< oT2^++z.C{rci`Yc1)*-<g>eF+oHRf:/cf{' );
define( 'SECURE_AUTH_SALT', 'wMM`AU,W}YQ }]cW!0sK8};a}IbH]L,xM)Y!aBu]PGhQP]+dci)z6TTfM#iJ2CB)' );
define( 'LOGGED_IN_SALT',   '5c2W(@(4&:As9Fc9B2wH7-?:@]9th9);nZ}Hs/6UOu`1%(T#*04=K+|s];pb8Qv*' );
define( 'NONCE_SALT',       'AGx8wf_z@w|5w[q}/j(by5h%=St@yCbZB_Y$l@4{oQ?>_=vBc=-hLg0}ENFEY<0!' );

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
