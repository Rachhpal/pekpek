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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         ',x61M-cN{#YvxLm]kO]@_@{`T7|HIz;@5)zF/q,G:sO4*hcqH`C:N7~sPeGMN(Ra');
define('SECURE_AUTH_KEY',  'Naa=Kxw%/zE/h9)su5hdh#!qPRN;MKUJBQ|#djey3W]d;UKkJCN:! x8,y7;6#sE');
define('LOGGED_IN_KEY',    'hH^3npz(0z_FIA5(&/-n`iwW_TCAQVL7lRv+s8$#|_B>!?68XN9CW+k<_EsjFK*>');
define('NONCE_KEY',        '6u@VXP/N Ia$WP=~x{lEx|kW(A8HW|#2P0S(`RR[2jex;^aq8-~5yVge[4%-6]:c');
define('AUTH_SALT',        '}h? Sp+Rt)g-t*6HzPjpe(02Q;X0D)(U`8mDdqZK5A~z^@0-sk{twUYKOK$y-/{S');
define('SECURE_AUTH_SALT', 'F5D(:%jo1lAl[.ME9L+2 q%gk|[E4bmN`s5!+Z|z/R[jb2dPM2Md_frOzJLL=;T!');
define('LOGGED_IN_SALT',   'ZG<hoPVw5wBcS>EesAY:INA.5-VJ<s5AwXqE~?n5b{We1zT8d^Yu>s&fF&IcG[^4');
define('NONCE_SALT',       'E~K5&m~-=@3<J+we;]:CD1o`l` -=x|9m L*9iafGmM&<rUPR9&7=8gUWC},{oVP');

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
