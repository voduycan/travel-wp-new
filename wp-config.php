<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define('DB_NAME', 'travel');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '`QDCx+F|<hR&A}&uZ]6ZkdOjT)MG$1l~;:acrCb#eNxt1<eol7?rnY0A0SBDw%e9');
define('SECURE_AUTH_KEY',  'wJ+G7)#aO()1EgK6|zU[LBZSi}E7?DT.Xn. _w{Kw~0i/A_fQe7vMbPxBT7>;hkO');
define('LOGGED_IN_KEY',    'RKTN^ug|O`<Y5W0@q#GPcVJloe{YvNagfTeiB(cuRrH+Z47-2WI&StkWcmo1T/$4');
define('NONCE_KEY',        'Cz@^sT_yM^ri[lD}?mWXuZ@NO/Ug)m?6FR77,Y<f;U~,HXJX|$nN>olX5h@)9W?C');
define('AUTH_SALT',        '0Jo]W<[1zyS JE`ERFoO_kE617>XJM=ygV.4ymi^hxT!OH4PU`.ZmQ?#t4:%=xn7');
define('SECURE_AUTH_SALT', 'HDA+|^}/99L9S0.EwgW|:4h!VXm^G }r8mc&NJ,Q_+T[/C|< b{9meHMC :vBYT2');
define('LOGGED_IN_SALT',   '|1Hcs_frnK]!>~kuk2+eVJr+Smz;TM^-_!A9t2=J$*/oIC73cD&f#X!kI1ZIr]Y]');
define('NONCE_SALT',       '`T%RjwE;NoC+uh|u`vemUFlmCUezNaNdmHb3}B8;9xm*.2#Hj[y]dr^ZH^|+`d~)');

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
