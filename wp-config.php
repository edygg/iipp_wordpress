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
define('DB_NAME', 'wordpress_iipp');

/** MySQL database username */
define('DB_USER', 'iipp_user');

/** MySQL database password */
define('DB_PASSWORD', 'iipp1234');

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
define('AUTH_KEY',         'kh`G1Uvf^m?I2`I~,%[.<Vp%m#[o6i~pw),.|+m%BRbdMljn!2b@5YfG~:6t)ofm');
define('SECURE_AUTH_KEY',  '%S+WtiAQIhd`_|>}q#{/O1kCMhd>fOIHYL ;az?5]pNz3zJgbz6?/+vrYkK?-+G`');
define('LOGGED_IN_KEY',    '-b)s2[uRF&:B0ZS+$kO3RFaV`~/|Td&y|y2*Y8RIw(l-ru(4,o{D6cetS-S-MDr]');
define('NONCE_KEY',        '}%2AJh~SU}jEK-/rfA3}b`Z=Qd$-;WnG%~$OYz-{6W.|{s=@M-N3-Ls{t>j xu|@');
define('AUTH_SALT',        '>0ek<<LSec87^_H/k6VeQ5{/aN$-E%#~<AOz9-tsUmF7i;-C#]p>CtTOgXTb$nZX');
define('SECURE_AUTH_SALT', 'X!}02+utiHzZQ[<N,Quu?|n;=/Y[av_m!O/el?U,#?9W+1oB{7+s1d1`W0 .6=_2');
define('LOGGED_IN_SALT',   'vQV?^B)iwpWOO|#h`E>.Pcx<-<+EqK;(Hvma;#Ht:4w5:3N}^M[e3sR@!-lD})R_');
define('NONCE_SALT',       'X%guq*oY_/-q=S7Ggr:sD/uy% ^2[vUfpI`9 Q-Xsvl}w%f?5q;Qw_n&*;yYhzO2');

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

