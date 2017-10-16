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
define('DB_NAME', 'briecoyle_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#g+^ Me6Ws_we+LHp}]^iS9q8yrow&E}*tLB9qj%+D;Eygln$iR[yAqmTST)edo}');
define('SECURE_AUTH_KEY',  'O]nx3CbOQ*Pd$?R=!I9RFV9l:IUN<e:*0WUFSeC1S#gP{m|OZ;tc{D]_gYx1$Rm@');
define('LOGGED_IN_KEY',    '1lgvA/R4{5*^{H3F.5<B6I$/@Bq)3{LE%PtN8:T)xmI<0Xl,p?Yol^Kn3I)a*9ah');
define('NONCE_KEY',        'pB3#P9#D9#7(?ZlvnY~8a1(e64Pd1^C;?7EPLFV>+Ef/k_UlXp;SXPBR$LYz>Q^#');
define('AUTH_SALT',        '+*|*|R@n}Ec6}RM%_N~}Y,y-;(U3!gY`:@~1F[0`zf-km$(7CO1y$~+?-r-[2;9;');
define('SECURE_AUTH_SALT', '9!-fv2m^y.Sl,$5xw&@D,{PBRYG.ZXORH9T.jPHoXbD>ZDsOktTxb*FE^i,48Rav');
define('LOGGED_IN_SALT',   '~%#2cMA@MyebQUgK.WE!FL(/$NAll,D=W}5n7 G4l]7_>2vNP>}Z/&SUUj0QfQkt');
define('NONCE_SALT',       'A+xZ)9H-~531qs&&UzSWo_t?#<8BRtI{];>BdaMdP]e$;{FjxADGlrZJ&b3[VN2}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
