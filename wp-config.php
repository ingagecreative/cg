<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'coz-new');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '=r-duMjyR~=%!/!jllb!:*`X<X5k,8ml}A_cV/52?dyaw@z}&51~k(2,p^Ct~O^I');
define('SECURE_AUTH_KEY',  'l95c&fxNh(z B+;*{v-|JjOf4Vn]-s4([Nttm$=N<)LBo6k$d?M?5t~!y0Lq]!:,');
define('LOGGED_IN_KEY',    'cMp)kH$e+_@QXO[3s%Fdb2+#OVhb@]vhZecW-aK_>r{?v *L+=#8CF/E=<gh3KN]');
define('NONCE_KEY',        'euh]z}q?nN]^K;s>rM$(>yX+;]=jKP}$1&kQ.;+b&MUJ!6wLxT}BsJpGW8kg%c<i');
define('AUTH_SALT',        '>]Vkfu#tIlSss{Uq:sPb!nu#^=+<Iu-= ]kVnS^Nhz5pg|TYL}SyPu=rb]=.-9K4');
define('SECURE_AUTH_SALT', 'ZY#JxS,t oXjM5557XBgrq#O-%75e/:hN*):7yeg]hm?n-6%K+q?S*+PR%4{jD#`');
define('LOGGED_IN_SALT',   'pxxpKddd(L @5iRbGO$9L=v?+QAS]*@]@7IG],/hCi-U_xX9+|W+CR.myR:xBh1n');
define('NONCE_SALT',       '(]^HZ%|TF_^NQ.jc%g=6Y*Z}fofEU#Z]|5)|jp=|8UqXquq:37c[-~ {WWNt`qQ9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
