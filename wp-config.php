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
define( 'DB_NAME', 'shop' );

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
define( 'AUTH_KEY',         '5 Ae+Z[2C, `.|fACU|fMBlM5[Q;xRl<Z~p[MwbJIPB:Wi_3sX>%(JMl,@6~yjgz' );
define( 'SECURE_AUTH_KEY',  'wC:0k`M:yx7eHHaS9J.< !V7g$4T9q9Fyh|?+~g;2l&R8NSKJ+8f)10G7 32g#+J' );
define( 'LOGGED_IN_KEY',    's*MI.OKD_X<L|dNgeT4m}{IJeLJ3-)%-M1]St4H(Kz?J6ar+]RjD8w$zA=}g#V:i' );
define( 'NONCE_KEY',        'fm5]z!%;N2#D><~SXl,$Lx(pC5mOV}Y:y&N6B.r(NeckD9Z]bzhi 9x2p=SVQp:E' );
define( 'AUTH_SALT',        'D=:bVl@7Ztt1,G7G~*}Ps:`OWR^;&ZsDmTKV-b4j]_3=!bzt.G3!3zRVxo?nS(bc' );
define( 'SECURE_AUTH_SALT', 'g<hx8(j>`by1t1!cbOw>x%CE?E5}>kqmb=vJH>_6}M)|0$=a(4MtV#Y1E7(:(lO-' );
define( 'LOGGED_IN_SALT',   ':zx1aFSmeIFCDc0R[d.B,Q*lg7k&Gzb!@*qzp0pzq[J=|0ELThb?]G9r}.$>a}0Q' );
define( 'NONCE_SALT',       'YqT9t>]!x*O//EMQMA[UVE0Xm7RG):i.!}/g*|rv~mQ8wI =s@?gSX:4VrnbtM~A' );

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
