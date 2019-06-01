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
define('DB_NAME', 'brikUA');

/** MySQL database username */
define('DB_USER', 'u_brikua');

/** MySQL database password */
define('DB_PASSWORD', 'LBoF0Ooq');

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
define('AUTH_KEY',         '95dd7Xk3}?a29[%r3mUSKIO2VG@^--7`~Qo7a9TKQ`^NlNP4WscP$q~] H8/0$N|');
define('SECURE_AUTH_KEY',  '[2?M%O1>?woV[+}&u( V._{sq{/!TD*4a[=+(0+J D+h~,wGFi!>o,~VBuB4NbFR');
define('LOGGED_IN_KEY',    ')m`bM{kpm;82USdm~1_9SupTJa$<z0p?hm%|ODP<8;2D%K(|TUhKFDS#j(2QF.ya');
define('NONCE_KEY',        'x,CgvnDulu>H7zK(epcAF?M;`e#eK&[TG]uQq5]oZN`g`qGIW?bQp:iL4{/=De;D');
define('AUTH_SALT',        'FHF*@tul $?znk/p k0fv5)V$y,yPY{8aMq I@Hayd9+g!u1?Fsx#$)Wy&?4hoAU');
define('SECURE_AUTH_SALT', 'aHOg.s]NR]S;N`SwIDL~oo<MS$,B>I7fy*xf#:%>,C&&@E?GRW) _z@L#jygVkfV');
define('LOGGED_IN_SALT',   'd2v(F$P/OCe]UgqJt!ifS;$YoYY5)hN)rRLlyk88{PNr] 40Z$Prg-8Jm]E*lr#I');
define('NONCE_SALT',       '2C@B$ky&)i+B6I&z_>TW;TRIX6Dll}v 9]P|&7/8tk}lX+/#JNDp8~:ya|/`nj#C');

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
