<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wp_man' );

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
define( 'AUTH_KEY',         '0!uA/])]]51G-U:5O8DzNgGX2yD{{{O$u(O,Y&2(=-ky|7yMJZ9f9^Y=J&U/|F8e' );
define( 'SECURE_AUTH_KEY',  's<vkm@7X$5`rP0llIOSu[7b[queHiM[rS%b%%d&KpMV<@2U$g7/g:!HSL0`}iE#*' );
define( 'LOGGED_IN_KEY',    'c2p>rD5Amd>%Lxn7SjBz-+ffY)A6y~s;.=),?tnAygX|&rh1?Vc6&7_/BOPtq=gP' );
define( 'NONCE_KEY',        '|cJfJ:B8@vZ+Vl14$3%6H/^|ult<xL c!C6*l{^R[8f;8O|NyXH1Xm9kLdO,BCU1' );
define( 'AUTH_SALT',        '<ek9c#af=]tT=k#?-Z(6-nl2QAV:exS Yr!R*y76qI;ju:W~T{oUyg!#s^u12*vJ' );
define( 'SECURE_AUTH_SALT', '.X4SO95@I1r~qc9DJV^zb6t7(rquTLZXDF)Tc?CT.gvC_&N0Wh~LC%>N -/>|Tb{' );
define( 'LOGGED_IN_SALT',   'R))l`M5|.Pkdc)5`w@PvHa1A6txb<PV8flwqZ/@V9rTz7:c5p!5,Xl/m{a*G51R9' );
define( 'NONCE_SALT',       '>#yRGW@0*:Vo%p|xSM8. O#Ks{#SGGg92;p$4.ra]c+HMu;w.sHuXzv)mI0.jmC7' );

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
