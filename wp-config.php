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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'D2Axt>kJ-n#4FC.vz_z9Z5R2:hC|J5rZ}UHq]+WO%I${zW-n8(+bUa0@g)il^R,^' );
define( 'SECURE_AUTH_KEY',   'm=vIHdvSq;#bnS0awN@<4;2E6>gK)*[akQ.Wr4{xSy.r%2R8M[lE5N7bz8/<GzT,' );
define( 'LOGGED_IN_KEY',     'SM(oSLJcu$#C80uKTc)n>SgzOa#LE4b0+rZRF!TI)Wxtl13zPrizkUj?^o3GFX&G' );
define( 'NONCE_KEY',         'Xw;<HP&_F=S/TOyc]Gp`!M%r[UZyBN22W_PO+:93.?;?yEhzK)mv{wd-_Ohr+3os' );
define( 'AUTH_SALT',         'LWkbxcH0+]/xVz;BL[a=`t2xJ>x5-}k7.Fd>2$}(a&Rj*.{1wt,*sdxfPH3a{a?3' );
define( 'SECURE_AUTH_SALT',  'H/Y[_#Q:`nnbYv%c,G4/=gU1ViRy$p}]}xsUw-aI:xob 8<{C97RIYv:TSmAd>;E' );
define( 'LOGGED_IN_SALT',    '@O}yrPJTXfgw2J.{F=wQ_GP.o^44q 5|&7V;Vj/INU^sq(X6Y/04L.O _52|gqho' );
define( 'NONCE_SALT',        '!0K8fVd+i? DTb&sg+K,W`Yb?Zhvoi2c2LVU1Gi|Z,2)+zA?y$t}Pt5ok>EyE5@0' );
define( 'WP_CACHE_KEY_SALT', '>c|@y_{n_|l7]>9[%rqc9nZ~xF]w7_Uvr<saC^t+K/X?+y:AG=OZ$r<b/da uVEZ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
