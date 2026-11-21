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
define( 'DB_NAME', 'credence' );

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
define( 'AUTH_KEY',         'u4MGs=0`RMr3%6`)$;gejS&u14wGmMCN23w-]%S=}S2M*qC {].80pJ?AR#kZPm?' );
define( 'SECURE_AUTH_KEY',  'BXBoffm?e0I$AG$2C;y5#Emqu5+^>+iIGvaLN@p[8!Xz^c)nMd8u=jFE_*S,AN 6' );
define( 'LOGGED_IN_KEY',    'vmW8c)x6!1y`uX<gZmjn@.#=ky!~0CI&}PXO3HGEuD=4/.:3;l};VSeq!h/& O:h' );
define( 'NONCE_KEY',        '<c&C+xr.*uni&axJLKA*79x1i06vQt0}yjsUY8.{pic;1*~TE@S]K{bLTe6kM`hG' );
define( 'AUTH_SALT',        'u(AW1M,0x<xi(jkqGH.M*rq,o>+Tw/.o[wY-M.m_9EbS0YzSd{UsJE@]vTRq;5an' );
define( 'SECURE_AUTH_SALT', '3^dET_>y6nVS^^*oT7Bn]uM*thq%!#&V6h;n-qU=zwsll`/2c)K>G9T3&~sO}GRq' );
define( 'LOGGED_IN_SALT',   'JbkL<01:a}MF%0{ 361fQ|:P=9yL-1JZ<bN Tn+Kh,#H`ayqrcIw/I]p~!l#S7Vl' );
define( 'NONCE_SALT',       '(L!u,qsH0(y7hg53E.~VU]S5ao<A+T=7~t%16BeK|5<yOam!yMg(~C 3syHR*F9z' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
