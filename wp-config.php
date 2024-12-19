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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '3HR^U-QI-Xf3NsXk`iDwz)5;A4Y@?[5O>Y $OD,lnQU$FBa.~,t*Uf<X!;;@l3z+' );
define( 'SECURE_AUTH_KEY',   'P)TBylE.<>iA(pZmd~Wyh(`F9R)-#jFa2y]<ef<VTa^7[02BtqZsuv$7N<*zj0VB' );
define( 'LOGGED_IN_KEY',     '`mO^qJNtj [cmz#/{fwXO2DM5jH`AW==kXUF^ff| q;Of!7K0D(F-f:&G-4=3@l,' );
define( 'NONCE_KEY',         ',/6e~ x+vnQ&xz9R4LBk/z[*-N:1i_= RFKAC(8lBQ;%~YuZgiQRsC|L_Hd(9 O2' );
define( 'AUTH_SALT',         'e?Sc<@f^Z>a@o6sD*[UvQSs~,t2H^_D8@BHBH MnVeFnMfB2-y:vF%9-0Q7|tyg9' );
define( 'SECURE_AUTH_SALT',  'D^UM6?6/:=)W@$c5lV~T=N L(MaB$?(=?m!bq#Z`pBwc1Le;}?Oo*ez<O]]uCo@f' );
define( 'LOGGED_IN_SALT',    'Ku9EoeL|?1#thk:xd=Hrqv~VD&eGbc6(}AQQorV|ZV(sk_Z4om::hL6.{4$yS: Y' );
define( 'NONCE_SALT',        'G:i:Z>.=|XHYPWLUHILo?QE{!atY!rw^ExM8^M~ cIB%B?vpVMI3oax4Q%5!x|)^' );
define( 'WP_CACHE_KEY_SALT', 'VXxXi(2M0%%oathWQ5$Xer?JvB4EW#coy2V:7$^L#TJp9]j9d5aAu*T|j,<Q]Ovv' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
