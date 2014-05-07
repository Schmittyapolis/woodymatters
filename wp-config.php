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
define('DB_NAME', 'woodymatters');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '0_Qat2+Fj83|cWTumH||(<vM`KNCYANA9=G+Iw#VH{iU>-epWRzz*T+GOsZ$2:Rt');
define('SECURE_AUTH_KEY',  'o9fUIpLgHkS]+%5t.z[yw|EiO`#vY524$|~y$6i7YVdZ|x-F-ZY=h8oB@5Lc<Au=');
define('LOGGED_IN_KEY',    's^C4tLD,(!wGjxB] IK:kry]mD:bQ:xmshBnx:^.tGz:7#Hx|YiQDf>5Ml[eUFEx');
define('NONCE_KEY',        'b1d {p/f>27`0Y-:|UeT?(sw1Chzyt+P+i/vcq fvC6.n]M27tC`z&D9K,[<kK}f');
define('AUTH_SALT',        'CUy-P]m8~+Xiu=K0p:r||1>g.D$t91CyI3<mO^fR.oNuL]]jKc6j|)C|rTwx{`!}');
define('SECURE_AUTH_SALT', 'ZPBQ{N;OuS3)s ;~Rd(gO{9M>-~c]-;-=@e|X2:9&AqIql}$VBN|ezhP/bQ~X-yr');
define('LOGGED_IN_SALT',   '^)JOD<x<|@{L s;5g?@Q@G`Ry/<pL/|EL0A+^SC,CQLTpG/Zq$8=kWaZ:wsivRg4');
define('NONCE_SALT',       '%tnts@XRy`%+,>k0L$#`@i:_&|>_8]>{Qi<qp!0V^j_8Umo2(Dc~mObJGH!uD;+y');

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
