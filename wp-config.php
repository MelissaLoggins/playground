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
define('DB_NAME', 'playground');

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
define('AUTH_KEY',         '?0!R[Y}VzO O^?roN^4rFp5qI!pu{{*cMF))t)UB;8+IZf2kZC$x9h9q1^ce:x76');
define('SECURE_AUTH_KEY',  'H!yY!~C>uxEr6v&)/7_qTjW$n0F,z2]Saop.UWw&$uB4XPP0s,ll_9Cj%+>:fAvN');
define('LOGGED_IN_KEY',    'crjm>6^=mBqyhSwZ~,?=PuT?)q9It79aR,x=3&p1[4/gJsJ7;h:{L7`xM/{34u0M');
define('NONCE_KEY',        'c`9XbMb4n]O>VvT*%14&,b2pSMjZUYL%C,Xx99S>jNG*}n.6vP1A3DAz#B37z:-=');
define('AUTH_SALT',        'K_5nd(feG#9j%]PdzZA/IZf(.=^5++v:QiIbG$bGOP)d~Qzxhj4$w&x.HC]Qm>D`');
define('SECURE_AUTH_SALT', 'vFMUdI*kF>*{;84m5 4#d|IN:1_A[KF_^3!fTlezvcfV6Fi9hs#l`f[-9pQ[k4Ju');
define('LOGGED_IN_SALT',   '<I:f@qpXcO?N,.nvh$~ EZ*PRCwQ.[t,UNop!M1{eADR^zC/:.8<8cfT(|E^ndl-');
define('NONCE_SALT',       'DTG:/nR7cl>PYrdy!P(PSskR;W<gdq3R}Q ^].A!Yha_}d>7yN>-:drS84(}Vl:J');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
