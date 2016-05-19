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
define('DB_NAME', 'Wordpress1');

/** MySQL database username */
define('DB_USER', 'wordpress1');

/** MySQL database password */
define('DB_PASSWORD', 'iis6!dfu');

/** MySQL hostname */
define('DB_HOST', 'Jlaw-mysqltest.cloudapp.net');

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
define('AUTH_KEY',         'Zk%=?-L?c,*sO(3$j?a-]j8C?P@|a@P9.KY[#XwD8j,AU4MHGY!8+P @|/b} TE>');
define('SECURE_AUTH_KEY',  'UN3!2bG0Q%8f5,VV9, *z9MSI`5IsBHGL/^03mD>))AL$Gj{^q0Sf+wy//<,0fb6');
define('LOGGED_IN_KEY',    'S5R0l_v!3Es=a_Xq$l^9#D4-y/pSNuPoqXA>V(4ueEYIJAQ|ueQqRnR4Yb~si.^D');
define('NONCE_KEY',        '^eY*U29h[_[~G*W4K?U? {|][fI>coVsFbzhW@l9Ot:MEj(9x1[9X0c~l7DlGw`U');
define('AUTH_SALT',        '5YCR dyu7yx+P)30|~lX`yi+55B}]`Ezs`(%7i}g9$!3=RQWwdP0GesWCtH6h`r`');
define('SECURE_AUTH_SALT', '()Om50h*gyzTSsm.AEvI6i5qBtKdkNC_k]=b`w;0d/7@hv xR5=._+f`LrzKD=rp');
define('LOGGED_IN_SALT',   'Ue+`F~b:X{a-y.rPR$Lf;;-ycVQn)?eb[yG.8wjXmi]5N0-3A,e^)g~D;vu,ic<U');
define('NONCE_SALT',       'nPORR1!I}:u*|WM*EG4Lf{#_1=i/ti7K*g=$Y[C[JbKAxe@djK@t2ori6$O$kh/A');

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
