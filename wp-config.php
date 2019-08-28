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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'herobuild' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '?j .ua&b!DvR}]WeLNHEQ%].xnR5qq>No^^Q:+g)[hGM>XrnK*ffzd*@XtTGoXdU' );
define( 'SECURE_AUTH_KEY',  'ZTq3GUge|3UF q5PZn43c(o3JkCr^ydwlyrT@ndO<lV]1M6,RR#+%9Q1Tt%0UpPK' );
define( 'LOGGED_IN_KEY',    'O@|.GJ3csE35nkDIez^nF(h1:/7ZQdzLnQIrH<}l!&stkn(Fk}|z1? g6[XUTN^*' );
define( 'NONCE_KEY',        'jd.U!g>[tE**&O+*@w0&uZWv!<Nh ? wHxvDOT^@?a./81]AI~3 w16)xy#^z`ck' );
define( 'AUTH_SALT',        '^&lu;slq]@>GRt wYA?g>UIIi_0gMK3dWsRe78<oloG&jG(@*W+&W:i!~Dhl$?-0' );
define( 'SECURE_AUTH_SALT', '@W%=O)/G>P]6DmvAY}FQBkMVY|nb|&c*^HA35gYF1v#<4Ru_~YWo?9Kr1.nrK~F:' );
define( 'LOGGED_IN_SALT',   'k-jE*p~fh^GevAl+fl5:=w0&tj>PYuCVK?WQ!Z.DUoG:PxSo~u7PYr&0F|$@UK_K' );
define( 'NONCE_SALT',       '!$RH7>3 M}+Nj4kv]_!R/!jW3F9r.;*Ofv`3]b`RxJIE1%4P!l)M%F[HzEjS?Z<@' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
