<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Tocotoco' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hn9uVqd;EHL}.8Fr$wv}!az%Y2EQ:4q@,/53rwJ@`fQ7vM%D[.D>l8fQv>/=C?]#' );
define( 'SECURE_AUTH_KEY',  'a)dAvlqSLbCe^~7^(8gjpux3/43?lHu{R+]^Gpz<2~3Lt%cw-2_[a+V;p+F^]%<l' );
define( 'LOGGED_IN_KEY',    '{`8c!G=` QrhI;FcJ-`svW9=C@&uXmKIq~9;F)#-Zu2+TCa:fkg(`TQf;@[hT}9!' );
define( 'NONCE_KEY',        '6i UEo$a/ -5]&VPR@xD`urm]obH|EGaF{4@Dx,Cp.0<CM%d+ [k8],W>0v&~dhd' );
define( 'AUTH_SALT',        'u<)}*QT9FDCWFXM<Q4DQ{y^fqU]`yvQC@Jzu~*Kal$:} +L!pvw78n$xV^j+3j1M' );
define( 'SECURE_AUTH_SALT', 'KY45`[)aiVKFXZ@kdlDM+:[o1u{!k{?/G{l7>.{IZ00]@lp5J4bk~P/+@l2h#,Gt' );
define( 'LOGGED_IN_SALT',   '<gwg}UrnU9o@aK6PuH.,b{vNuw,5EZp8 D4YKxs;+{EI&g5*A/8pY_|5K_sR/Fk;' );
define( 'NONCE_SALT',       'H}^1,CQ[DnTp2Be*7KkRyC]bDa$Wc>IGMDb:U{3W+qxfx*^h=P-[V0:b0-UfNmN}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
