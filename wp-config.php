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
define('DB_NAME', 'rouhi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '?`)Km<+E#O]frJqmp6T)_4Q3*@}Yw9niT`GYu<?yD*j+vl2SV!|wo@Sm7qi,]`>x');
define('SECURE_AUTH_KEY',  ':>OS`yjgAn(I}Dzb{`SU1EDgz`{$/=uiPfrWH$66EmkOs|cpwsAtdc+&OFWrlnQF');
define('LOGGED_IN_KEY',    'Z8_kg)cHt)A#3y?w}>.nd3WbEM53$Na/nP8H#^u!x`DORuU>0]H*3RT<ECPco]4#');
define('NONCE_KEY',        'lNBxC}!NfIC#h;/|84C`sQ*Z8sRz!<OA2{:nPB#M{`Br*e C|ZB?Sa[`+yyAQJNg');
define('AUTH_SALT',        'PM%I;-eOL*w*!;kK<3wu+RxqUYGx,b>Z4U-g6Ux!9;78F/,+}M%Fv{5kl@X6#T`}');
define('SECURE_AUTH_SALT', 'U<?<M={n+XpmmSqyfB:ysZWvTi]S[!6Frw@3U:-&-8lUEI`LKshy/7:..F|&x2QG');
define('LOGGED_IN_SALT',   '%i+Ig/e22L-a2xk 3W9P]lf6d#<M>q?(Xmy,wRCsPm*?W0No=UaB?Zd/,tN1F7MU');
define('NONCE_SALT',       'B?]{[p|nbumNh4|Rz`UA,*Tbs^l7gFEMNipR&;W>%5`w}p<H&OeF6,B>K}n<}/PD');

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
