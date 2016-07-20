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
define('DB_NAME', 'veristin_shaadiek_official_blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ' OAp;m<$|;4_^r;-oODgCJj{i<o&+ne7:_-X%@bZW9%i%J|<^c29W!|E?XFSb8gY');
define('SECURE_AUTH_KEY',  'yp.fK90TF9|x^BAy7dJsP-(|Mexi3:-iJ0~|$=:0~,`uUh{&mI4<|z ;; lh747O');
define('LOGGED_IN_KEY',    'oh|TEnb-C?C9kDcjazSm}u$HD^IEp7}gj61g7$s|>1mv-s0vx0eaA?43>=Qt-a~D');
define('NONCE_KEY',        'f%=IxA=?w)7T`vH6!l8+KrJf1qv@xv:[JWX06;e1iqX74biGWilsVo1cVh]+GQ.T');
define('AUTH_SALT',        '^3f(uZ}M ;:mT~Bg85.]Q~}-h>5l9RZV$$kUg^9afHF<tMh YY#`/+}=AjVm..7o');
define('SECURE_AUTH_SALT', '!]gY{xZ-W:Ef.L$|qIqcLg??5UX8{>@v,s!:LUs~#(P@GDLg|!Y~|x9 !f]=!e)n');
define('LOGGED_IN_SALT',   'bYu-Ikb~_zYEqmj4vEXeZKThuPB+9~kv|]&Q+3a<1D=B50v%Xh[+m@Np2xX!I/1a');
define('NONCE_SALT',       '-uu2zQIGffPq%w*wuj*u|CQRFy~;fjhU2(W[Q57p8N;4%9cc-ZxJ/M--I~QG?}OM');

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
