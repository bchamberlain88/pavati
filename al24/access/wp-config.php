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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'pavati_wp');

/** MySQL database username */
define('DB_USER', 'pavatiwake');

/** MySQL database password */
define('DB_PASSWORD', 'Pandorum1984!');

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
define('AUTH_KEY',         'al$+Sway6uR.a1t>,hH0MJwz)N},5+g?~_zM%,]m;Qb!,}aaz+$_A;}o_xs*#:-b');
define('SECURE_AUTH_KEY',  'k^A1)kE<Ho++eFE}d}7^@Hk;g<~+$K-pTUxMN&+M5jZqb58!k<0HV`9-_^Ch8y3@');
define('LOGGED_IN_KEY',    'QeKS+MZh)T{u!LUw}[?f&e& a|[Yb8Wkh@xL|E4hlY:Doi8|Zi8Da6#Xv[=QtR!z');
define('NONCE_KEY',        'bPZ?AoV7RSCVJxJxwx=jYM|+;K%CHP/~+qk|8c)4|H9zC-k5b-)t6s8-V>M:DX8*');
define('AUTH_SALT',        '~0L>g5=8t{H1 x}so.#pCq@V<BXHK)-(YC`CwpspkO.lK[|) fe` j+Q{YJYIa&D');
define('SECURE_AUTH_SALT', 'Cibz=|2SftFeJKUR*Ct*Bw+o}ij#LUq+Uzy~&[W$I|dw%8gzTz4}|+9]{nf,H~;1');
define('LOGGED_IN_SALT',   'j7Q%=dx2DA;`TNz:O[8%<UbC9D)Ol;AikAJe{HZu.TOj};Lb4fH(1%hP~]4~?rOs');
define('NONCE_SALT',       'oK&E |.w3sA)[L3=<Nzo~vP?[Bag[[0{B?no1;w[y T`e3aIz>UupR}z#<}F`L<Q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
