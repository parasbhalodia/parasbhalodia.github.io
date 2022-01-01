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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '4 =,?5KA~qeigZa;F]?W)|(^D<h2}45826tfH<1$e[W?XJ|/+ nFB$qgI^| Lh#f' );
define( 'SECURE_AUTH_KEY',  '! I1j[d{,FthChFa1/s759)iXxfc{ZC<HeUd=`RSrE FXS-_K;#Sp_A!T]nj[kIG' );
define( 'LOGGED_IN_KEY',    'k?u .99A`x6~m[g8jEjQWSxuHL#oMdoI-vjNq}Q{c<gp[;Z<Zu!rnTz#+{ySnEf,' );
define( 'NONCE_KEY',        'u S2,((?oD4*_g(R#g_wWOX99puR{)$NpU( 4*szMh]r)d2-N#O.AEr+ITH=r4`Z' );
define( 'AUTH_SALT',        'A>3-Y2IeYyWkCQ.wF?=Jaox[Sn8+oU1Mx<feve]/yBnNN/c65O9mC+m^v`F~5n>f' );
define( 'SECURE_AUTH_SALT', 'rV$8lN .($dcg2yjFMfKmVNDr68j{<=~| ZKxRMxh]G2Fg8*a8G5-v2M/h.)@RU%' );
define( 'LOGGED_IN_SALT',   'j1A{b#.pSoy<{>QtC:sce9|] _rV)mEkoSB!7H1IW~_FXm`Bm>M7GPEt_<elJrf|' );
define( 'NONCE_SALT',       '[4j<;cwcrqyUdy(nKkhDlUOoBC3um0(~;6@W!E<VRlXi(Am8t_GY&%V|2 2Y}TB=' );

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
