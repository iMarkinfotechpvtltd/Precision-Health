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
define('DB_NAME', 'db632319947');

/** MySQL database username */
define('DB_USER', 'dbo632319947');

/** MySQL database password */
define('DB_PASSWORD', '@dmin123#@');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '^B*O_gP3zuOWs{R2D,~Dj]-2}{Zjg+k7T&!z.~0gAh@{g+g5(mqjr2.]]|@.;lpH');
define('SECURE_AUTH_KEY',  't/^^8n(irG-LF.9/[J~`Y:OjtZN *?Y*x&&sq0FR$D/TmxTlv;f&B%7}j%L_Z5NI');
define('LOGGED_IN_KEY',    ':9v4q82G)$2_dx,Iy%rX+S5C)&D;@5/cXr6vnVUEL>;!6;g!SR/eyF-#>=)|$Drc');
define('NONCE_KEY',        'k?1XWn%1y ka(;,~WNDys0- .cI|s;J:~LMrH`7Or)J*OYl%>$cC#3):MT^jU>W7');
define('AUTH_SALT',        '+6z-HxG/[B@<Q_0ix6{=S`~Bch|lK2HTEk/TwiT0O-44>*c4HZ6+-s~qU_ZvY@x?');
define('SECURE_AUTH_SALT', 'E5BThP_Eze@8By$imayk;FiI1QB;Sb.kBzeTeR+cS;YET5(8rMG:=*8c4t k >yr');
define('LOGGED_IN_SALT',   'sAJQg}FwXCmbL<7EPaRLjMD#kS&E/(fz{@m1N@W1+fVk]q|uxv8U_YFp!vn @c:1');
define('NONCE_SALT',       '&7[cY1nx0:Z(8?Z@*fyx!*8FW[(oCsMWQz|1EKHDMs&XQSw++1oHnZgm7([dZ?4O');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'phc_';

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
