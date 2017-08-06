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
define('DB_NAME', 'serviagro_2_local');

/** MySQL database username */
define('DB_USER', 'invitado');

/** MySQL database password */
define('DB_PASSWORD', 'conehost@');

/** MySQL hostname */
define('DB_HOST', '138.197.29.60');

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
define('AUTH_KEY',         'a*WC-Hvae!G^4>fXgsmH:6}QMaQ&_=`.Us!hXMF[YF:Q#b4LaDJb!,319++4WI0d');
define('SECURE_AUTH_KEY',  '.fMD2a:!|Y=s/?Ig,6lkI?`F2d|O[Nvo,&0rxS*mG~E!>2{=<T<{}72~13r9CP{5');
define('LOGGED_IN_KEY',    'pw6WZ4sq/4`xP2kM@1/%!Z6_1I[I<rT^kMmr2E??4O+)6n<T76QOaO@@3c+|c!&F');
define('NONCE_KEY',        'i:^Dsuc2RkZB;l)S-;.O!2:yE!^2h75{{HB:_miz#<K>6_]p]P:X3RfItcI0h{t)');
define('AUTH_SALT',        'YZ=mDhK-n7g+D{,?:[%.Hv`!o>4fTdaAsJ u&rO7ZUpHH[v}/kzBf-V&5nMEyenL');
define('SECURE_AUTH_SALT', 'Zmb0{WBdB|q]:I#+(6>53z^n/*Y7L~M]LSn0{;Y7gut*5r_/W`)enLHWzJ72YY:H');
define('LOGGED_IN_SALT',   '_mSTjG-ZN:j dJ$~$2|YAuy<eL[iqJ{m4ap_c}A@#<e>hF b[ozMGFlS*>RcteQu');
define('NONCE_SALT',       'l?j%?[r3/4FQJ&Tj_v?X.(?&+(v-dx$LhK!HyH[:XGRO.-q=ako2UJ-)Td{#Csv7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sa_';

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
