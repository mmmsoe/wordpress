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
define('AUTH_KEY',         'cBxRAb3G;%$@NX;G2w.UX T)2#EH)@.af{0~Jmtt Z-And~Me^d(TdEGToi2/]wE');
define('SECURE_AUTH_KEY',  'S@J T+0b2t1o^#NkT;CO<0-#`*jH/.w:sf[]&pIz;@78&Dyf@4P0jR6^f-dc9^wO');
define('LOGGED_IN_KEY',    '.7#u>5pRW)ue)j`J<Bv$Rj+%9X@ND/,iDd)G*}o$Tb>*aQyy@FQ1C`K&5gLc`+R,');
define('NONCE_KEY',        'z_+SN57*$][&=C3gkDrd!#bT+qFT[AZD<  Gdyc~uwgv3RiNy,*T(9TudZ&OX]jx');
define('AUTH_SALT',        '(~I6P5k!o-j4G$^a;ni_shW&{Y.W]7Tpc#tdM]n1ISfKP%*NP/J>4Ji6,%&&s.sQ');
define('SECURE_AUTH_SALT', 'K3*1~MI(~w 01lxhU(4?djlzMIBUJc)Vk9eH[JaS4oT`2NiJ* aMx8:PE98qcT*R');
define('LOGGED_IN_SALT',   'yF+ylqznlV%`v7lQ]sTs52SxrjSAJhH285dD(aWn|q<ny@L6@A{QF-0d_#0.QTSQ');
define('NONCE_SALT',       'd5ge@ZxgkT{p}ALE=NCQ5.g]n/,0H|q-$ObjG$vxGh%T*>bf$nwTOjE[/yYk;D=a');

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
