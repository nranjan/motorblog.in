<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'rootroot');

/** MySQL hostname */
define('DB_HOST', 'mysqldb.czmwqkijkfkm.ap-southeast-1.rds.amazonaws.com');

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
define('AUTH_KEY',         '5_<`{%J#Pc!(5&V:+Y^H0_)zx,8SM@H&M|ZCc{|[@fiToswBu`i,OT+oBiB ~L|K');
define('SECURE_AUTH_KEY',  'sr0)<&*~ju+_-hC=Ogj[[] ET^I)w}G&TEhV@FWi,3+MP?:N]^l>}x>r-L0{M7lX');
define('LOGGED_IN_KEY',    'hZz&QmrIr.)mjG|36n!L6VC-,<-o85i;P({x?[3OXb8|d*-*0*9NHDP?{ideL1+E');
define('NONCE_KEY',        'll=4M>BNb`vbyUojs8UbEEWQbKo!<(.AdqAuf8xnk^75w$PD4> 7n)^lH]F/vX8:');
define('AUTH_SALT',        '->k]LH~cb+@%;{*yxqy#)NzkeS9tu(*Fcy7>hB}+j#Jaxfn.L4_:({PH*|t%%W2S');
define('SECURE_AUTH_SALT', 'uH{WUBMl^^X:1j#2vYK|GEjs~)b2@4:(!Y>tRda~mF?4M-_xyO Q:2z]3/A:~g|j');
define('LOGGED_IN_SALT',   '(.:]=.AwovO7gzpMA!,HBqmqXXB-$7691I<-rKLKX(^k*c%dKlG-$l%>,!R)@zNJ');
define('NONCE_SALT',       'dAuD1mCi]&~nMH/n|a3h[n BUQk]2__Mu/MU-}]-&_zj.zP(XD|%jW!Kw[mqQoJh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wptech_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

