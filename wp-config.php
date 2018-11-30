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
define('DB_PASSWORD', 'Pa$$w0rd');

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
define('AUTH_KEY',         'nu_Rzuvwe8g&oBn.#YPSW)qC-!F`gnd+Wwy{_BEIw+xxfDeg&p@WF62B[`#cCPca');
define('SECURE_AUTH_KEY',  'Frt8?ayu&/tVrc2&ygjj;W(`@wd6Wo/y}<wZlbTtopi3xRHZ#yLHRt[-AB.^Y/;U');
define('LOGGED_IN_KEY',    'BY?41.wIku#QlO~-hBT2wMz5Lt, cVglgB/t&N(5&]Sfv%kKm?-a[pcD?LAm~2d:');
define('NONCE_KEY',        'o<}f^1K/9n0[:kc@FcCQ;<^8e`O2%,foi2.6Ibe`Jf3:o R#&R/S)RQ&,GPn,Eq]');
define('AUTH_SALT',        'vL5{vw=5m])=%{925{P/?Cb9J5BR[9_;][Mf}Z5A9GUh}VWh2/xp50]3tdJoustq');
define('SECURE_AUTH_SALT', 'UqBUMFp?#YXm@ckuq:IG2gU+Q*De@cW`z6z]`#T:/>Ne!!,(W-TCK/{PpH0@`G~[');
define('LOGGED_IN_SALT',   '?eE/(80OWb/W76Oq@&VP>@7cKzqtsygO|i70Yg*{BZ$oGF[d*d!)niWa~9pg#Jc/');
define('NONCE_SALT',       ' i!52!ewJze/Ob7D0|*#lxFvrN]s&ebWrew@P0mASzQFKh||[p9p?G]?Sk_7^xmC');

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
