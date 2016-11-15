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
define('DB_USER', 'Preet');

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
define('AUTH_KEY',         '8y[>R|Ap$ ;c3t~6%J~30ULy,- Z7uRHX2297Q0e~`-3DGJJ[!VwnNv_(7(8k!$A');
define('SECURE_AUTH_KEY',  'HO.}I60^el Y8!(sObIi)Uf2UCY|s=vaTh2#fpj*{zTsNt%I1[mk{!T y8uv<j{y');
define('LOGGED_IN_KEY',    'm#+D L!*h?8P]xO|}a|g&AQZkEe#NBMMW_HB,xSUP|6U:F<g:-+@5-;;-=B:&}(|');
define('NONCE_KEY',        'JE&I(Z|,uHKOkdx/+7wul%R{HU$;x7h/Q5_n&,Krx/7[iEn$VZwMu{d_9@TdIk8t');
define('AUTH_SALT',        '+x>,6J&+l.6~j3+?+yl<yNz>iI_N55=2KT43xsS{-kB#Cs:}39,Fq!FO,2[d_Gq>');
define('SECURE_AUTH_SALT', '85<U3D:Wzl1[U@r7GaN,&6Vh:v!dzDoAE]yz j;jr|*J1GU_4]2H)0c/N.%lSh3y');
define('LOGGED_IN_SALT',   'Wg^Rekh[yCfV?gn#FJAflBC.UxCNhx~>.?bl}65C:J.jpbNs$>me&9;@$$Rfzl(+');
define('NONCE_SALT',       '=u R$.J>TXPXZT1S(c`7d&O6<#hE[/_>-{YdMH(I(nRo8W`^#6|-vk@{u&L!yuCO');

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
