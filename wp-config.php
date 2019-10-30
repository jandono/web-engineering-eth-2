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
define('DB_NAME', 'laplace_db');

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
define('AUTH_KEY',         'zbE{E>}&QJn,,.<JO@}~oYq-+<R^E<I0bQoI[-@aFx87SJ4GX(r}_p0V=`#P[%is');
define('SECURE_AUTH_KEY',  ':oIWH`JMuo+H$ u{kXQ8W.fQv]a+#8qc5>9/>(O&j@EgT+%K_J%yt-,egEi/-^kc');
define('LOGGED_IN_KEY',    'e-Z=guy4`q2BZpoe7>yyn{e{+&!y?@GMu~TFnZuk1yv7/,pV@l7A~:S+),R7^,[>');
define('NONCE_KEY',        'i9|F}Het0l9$(u/t|g gQ+|[x{Y#+xjX~D[-C2fJNwqy{!,E7ga)Uex|HP{X#l+*');
define('AUTH_SALT',        'Xuof^2i`5ay+[6}.=(:VU)3Wl8i=`KQBQl-7OQnH6)qk_nhD{;XPS.?BDt[+3$J-');
define('SECURE_AUTH_SALT', 'X-8_!/ o<Ni<ZM2du-{c*3v@j#.98[0hds N)u%bv4o#||DNlY,~]MeQIm,T!:-m');
define('LOGGED_IN_SALT',   'AQ@CQ<-VNMZu]Nuf0(JrPO- ]5NQ4~ :kPx=O@cA->*i,:|bWj?yXI?dNlo23zZ.');
define('NONCE_SALT',       'u6o~ l?!Cc{J]F+q0=ugQHv4X#jQ<[-K^:kcowt>8_zN}Pdeq9g:Z/%!>6ON!--y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'laplace_';

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
