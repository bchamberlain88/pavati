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

define('DB_NAME', 'highwayp_pavatiwake');



/** MySQL database username */

define('DB_USER', 'highwayp_webdev');



/** MySQL database password */

define('DB_PASSWORD', 'V5p93xIZezYm');



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

define('AUTH_KEY',         '@px]T5^wIcIo[xi01Oa(n>>s~~A%UsZk_8q1x%#|NR&eaXgw<xUQV2=%:7%FxztH');

define('SECURE_AUTH_KEY',  'I^p:g^t6)d1P3YP>i,Z3R|llxmR#KALJxuX%^fjLtiFbq6{oc4s>swITx G|!)T[');

define('LOGGED_IN_KEY',    '>AlFLJV[[C.h==2jEFPQRjT,~,2;)<P!Rzq]*8upZP+RLHs-vl3c`G?.}oU[fKDS');

define('NONCE_KEY',        '.h[uR[qarwMw$[tw~}hCk*AnaK^A_pR8Y%7dk!tgo(M{|NRnvF6TQgq`bC<?G@f@');

define('AUTH_SALT',        'B{SC|+2.QC* ,~BNQ]tx@v$7EirP>5&!G|trtw{`4`-; 86fFT7{NQ*Yn7tIB8:P');

define('SECURE_AUTH_SALT', 'T]Je6D(7Qn>IXubeM2EF3~TmSOFa4PuO`y&g7-t2DSK2sOvn@14@r^j8PI@e6B/A');

define('LOGGED_IN_SALT',   'i|wll>a  TvZqB%=B4<&g[2j;<(RV(B/_2c]-n53zY&QXl[^IM*gb}zZu8wiLt@b');

define('NONCE_SALT',       ';/$Am|c`,gU^aL]Fo@%k7qGPiGSXb8$AhA*oRRSTWBw~1x5,heD #P5;aj!XY4_&');



/**#@-*/



/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each a unique

 * prefix. Only numbers, letters, and underscores please!

 */

$table_prefix  = 'np';



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

