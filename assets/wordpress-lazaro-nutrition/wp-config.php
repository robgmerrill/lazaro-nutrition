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
define('DB_NAME', 'lazaronutrition');

/** MySQL database username */
define('DB_USER', 'robgmerrill');

/** MySQL database password */
define('DB_PASSWORD', 't7ndK4JrTMXtqWs3');

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
define('AUTH_KEY',         'FDB|=wq#j*D$!je!R73J^h-HkZHN$R:s1`:V!O/Ro57/4%mJ.C*wfK@Nx!btf+Ns');
define('SECURE_AUTH_KEY',  '*LImELp}_cu-]|:aUm@R!o&6I3nr~huUd3LS*>Y3njSo)A#V)fNu`)|c,_cHK6LY');
define('LOGGED_IN_KEY',    '^JBM[:N}YN-HONXaoQdS9/k-|/G0eF-RNckw~^mi[(:9,18|#Kq_;A.E[}oRN vd');
define('NONCE_KEY',        '[O*mT_MlM$%V_vrF=X1I6|w6`kHL2,Hs=N8}5?h-3-gm(PXaZCe(j.>pmyj?K<|X');
define('AUTH_SALT',        ',7ve=_Wi}BO~#-ykHhn|rs=di1q@-iEl-B6})sVLZ--eV|fh^ctd-hS5]#qq<++|');
define('SECURE_AUTH_SALT', '+sB~;j:^JLX(D5_4Mv-`Cu_xs[%A6BB<HjzbF:X.zrgVTwCr8D|BAj}N%LQ_U;B2');
define('LOGGED_IN_SALT',   'azj3keFH/8{n|JRtjjQD*0][uF,V)x7!P[BHe_13X[9,*4I/.zw F.5;DmbI|| .');
define('NONCE_SALT',       'P,|<K-Y2@r)p.4K}pX@KvrDt<2J~hO&|O?|6<P^qIc.*3`a%W?@TFq/2J{U`+Gg[');

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
