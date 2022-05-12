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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cleanair' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '_%KXb!%HA4ZL-XAI(R@b6!SV$5t;PslhhZ<[sJtYLmWNgIp5,oI{z}4Akg8Jc0i<' );
define( 'SECURE_AUTH_KEY',  'wV^kA> vfN]L:H xE]-71:@q3FoS=-(JF-pbNuMuwZ#(GsH9Xty=4,w|WJ5iiz*v' );
define( 'LOGGED_IN_KEY',    ':%B%04bs`Ll&pJz8BK3+_*Hl.g4 O(cphu}M$ve2EnX8SIit6C@u11KyuG2>9q/Y' );
define( 'NONCE_KEY',        'b/cSNc7xp^RAN<A[NBov[?cFFai#OMy6yh[O@v]Y<;!i@uk>~s(VwFUUZBoG_G$a' );
define( 'AUTH_SALT',        'E1t1X:L=QKqR+^)X/zq^N$jHjpKIIH5<~OY!/gT$+cOnt/=i};LyNRZTcyC:Yrap' );
define( 'SECURE_AUTH_SALT', 'VLN{>=B%~jFXmXhzkt2H^D`p# $Xd*B?1g*R`whnu:t.(Ee(l m]UYXyV: M&1xM' );
define( 'LOGGED_IN_SALT',   '3dZgYkOE,GSs@78;eD8RiJrt>lufJ-Emkq+G9_*P&CU8%]$<Q5~CVct&#{<=9dX<' );
define( 'NONCE_SALT',       '<uaMHqFvz)$l,LqMZS/{Dc3LQ}mNlfTGwXai(]:t4,aDJ^9gUin[$$A][) fl4A8' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

define( 'WP_DEBUG_DISPLAY', false );

define( 'WP_DEBUG_LOG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
