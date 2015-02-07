<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'site1db');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'site1db');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'apcdduck');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'v <-uH/9,I|6+GU{4sEDN}Y3]:R$zF+b d@IQjtzYCy+s-8^O}G|T`K>ar&|8EQ8');
define('SECURE_AUTH_KEY',  'R;C9+  %XZxEGDV&>k)(2f$$V1P}n5=@fa@ E(Xs{1X>dj,H!=)X]2&e*|QO+l);');
define('LOGGED_IN_KEY',    'a-RZ-2g@pfZ$zS@~1jw<v-y6ZQ+/bRKw?!e-EN[w7?x+H/+?&A#6[Wgv]+H^$r++');
define('NONCE_KEY',        'h34Fj4LM}PA;8r$ub nW0d+GlnwJ`aKoW[0gbobAP&-ac*j[3}rW=ljmH&o[XvA-');
define('AUTH_SALT',        'ua?_ jmIw%g0ev0a?S`Zm ^y[iL,mg2N#|7T{jrz6kd3+|ZM3=wE7SxIqq-?A^vF');
define('SECURE_AUTH_SALT', '`+W}50kdw}-hq&ojPmGLc[vWT&9>m<~z(|(cTj,zPQJVDDpgSHvm 5f^uU(:dvff');
define('LOGGED_IN_SALT',   '@ 3Qx~|P&%b=za-zGJJ~-vw3)_KJ V]|^wD+|nUgL!S^b-5mHrVP`F&yRk<m1=4G');
define('NONCE_SALT',       't1N]hIQ-cHrUPhcO?JSe=-pD0qK4W=@G`-H:8#J<@po_g25Fa.G~Cdk=1Ua6[Wa#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 's1_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');


/**
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/site1dir');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/content');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/content');
}


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
