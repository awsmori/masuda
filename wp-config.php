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
define('DB_NAME', 'exceedph_masuda');

/** MySQL database username */
define('DB_USER', 'exceedph_masuda');

/** MySQL database password */
define('DB_PASSWORD', 'masuda001!');

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
define('AUTH_KEY',         '$-laZATY2$S$m]&K]hTVG*2+$<lL(Vow@VDG55HYJc33m2/7|{|~~yBh8<0#?AM$');
define('SECURE_AUTH_KEY',  '~448rql@+?`Z]G{*#RNQY|.L*;O+$Exe`!GM]s4FEBD?4V3egM5+0`[{(5)xz@*R');
define('LOGGED_IN_KEY',    '*q7c+(.?7R+,Ip-#t3fs$^[0<7v[YPEW2?m#L<DS0+Db)/G2Ay2Z9z}8QzsqZgXq');
define('NONCE_KEY',        '=aF61^9fVs1w;?*s4`k|e|#aPEO1:! #^uEN9x?ZWP0ex#DQ(C*=!c}z/N_b[T8%');
define('AUTH_SALT',        'xkwTI;wja*Wfhbzf$p.5Fdb[Rj}U>uE1VtFN?L4N}PNO<b_c-|k|=y)+CqyyTaSO');
define('SECURE_AUTH_SALT', 'vspM|}p`Lr-q_-LQj0.LAJApzbp+8`$ apVlna}M<JGD|.f|zb;#ULTS8kprIzM:');
define('LOGGED_IN_SALT',   'cO{-< (xu=_M$p-XbdF=eT69|)wmp[.eCp6@5:eE{rHciW-_88Q_7hiP,# ^HtBO');
define('NONCE_SALT',       'R:@|b@R-09Kw=1a|5t|t9U<t/<e4@2d8+1V=cSHXU. T-|s6|E[T2E_?JKJxRqt}');

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
