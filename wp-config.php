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
define('DB_NAME', 'wpthemeroller');

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
define('AUTH_KEY',         'xjUhD<t$>N.PgW>8=O(DUx<Sh(!2=l=5J#: ?SGK:@Z=}E|U^TDQD6wAiTZ;Y+/v');
define('SECURE_AUTH_KEY',  '}hRudZ.4Y?}gD,aId*xfnK9St)?RRv+U?4(.om$l6f/Be%*PWQz*2WvC]p2crm8T');
define('LOGGED_IN_KEY',    'b(Em2N@8ckXYlIWt ,d11>*Byx.&eX2:wk9D]SAtBTesDXs?TnVo_#py!Le Gs!i');
define('NONCE_KEY',        '0&.t38@p?8SKdz!!t5>&|8^3E3Ab&M<{I+XS[cq}<.NWis+T<{ge?VBS~-y9fL{[');
define('AUTH_SALT',        '?b YtH?/b%QWyk(2j7.WA;oQd[X,R@YrAk>LzYm kPO,qC=mb:4`d-;-*vP$?`sT');
define('SECURE_AUTH_SALT', ']ZT]Pm;/L+rJkTgyPmO0J1&VThi(`.0}L~6w6jcx]Y C,)a_.#<5+Hrn7){x{L/S');
define('LOGGED_IN_SALT',   'qd(TC`aC_V@AM54tl>)FCKiPZ8U+U5&]7T 7M%MK7Txf`]ixwV>?Nn:!Hku+:yE?');
define('NONCE_SALT',       '&%;l]A6Lc; vpz08JQE%z<Z:(I0[IQzhf?oH+[Tsuan[KZIhGQ^zDF?9kfi]l=e{');

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
