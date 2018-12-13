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
define('DB_NAME', 'spd');

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
define('AUTH_KEY',         'Yvh/(9dSv#!v6,Rp `kq*1NakccHc PB<:g^/%zh+%r-=M<j0lZ}~%t8d<OENzrO');
define('SECURE_AUTH_KEY',  'V3~UCbu3/mgXG;zw`938(M;*6x?8RJ+8<voe[!!C>uqfJ cE4UQiBto{?koNDuqi');
define('LOGGED_IN_KEY',    '&Mtn1WosxSprB[q,%8`(QsPR:UOb_Jhn+>L+,1d92|36uM]rr=9ey+;%kCzZR e[');
define('NONCE_KEY',        '`hwNX1%gy#q^j[m@Fq2|$u?1kv+gBT q)<kN!XC5$hEdr4]:Z?Y .we`l,{!Hf&A');
define('AUTH_SALT',        'Jw)~euG3&j%,o%Q&p}:eKlAY(N[8]>Hx8G#RB?fL{c*hdpdK<+R@V/1GVlefc84S');
define('SECURE_AUTH_SALT', 'A<@ez;3(O4(|SJU?ZP$E58=v/,:KBSIK-{T_8B6+BD]kCv,w^x>2xOBMTzc6z;kh');
define('LOGGED_IN_SALT',   'SEe.N*]AS_7%p3>`1]|#`<u,EfzIalq>p/T0eGmt`TA*wuT{do{#Q1Mk-rX,}|]~');
define('NONCE_SALT',       'MZJRq#oK7CQHgWBtD;Fy,~<,[RN |zFCP:V:PHG,sc%3uFkn(%ict`nig*IF7{wB');

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
