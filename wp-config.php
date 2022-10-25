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
define( 'DB_NAME', 'wp1' );

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

/**And should change the options table in sql table is a must**/


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
define( 'AUTH_KEY',         'O .DB+T5/b/7UK>=Wv7#nDU(zu%]d%7F%Z55DT~P402-/X CH$*<qJc4)R@]Kp/U' );
define( 'SECURE_AUTH_KEY',  ':Li>:xqy`D?N}4($TvX^p f~msD7|g !P68LUx Ohe5:%B}4R-I!_w!$Q%(6Ip~5' );
define( 'LOGGED_IN_KEY',    '=;0$A?@1J~9z/HU}d0[fPe^B%{+^YmuB#US1! {c*N%Q2|L[:ToKLuM7|I74hj0h' );
define( 'NONCE_KEY',        '<kqH:0.0K(ixaa;Yg4_Y~#W3EU<~v=C$!x]R%(!CY*vL;kG47X{nX$Foy,i~O!%e' );
define( 'AUTH_SALT',        'hdW$^MP*r_^m/F26!SrL+v|lA5KJ[vuzQx,Ku@y>Cmq[A%#n5LA,Tc$.uE9*Cd~Y' );
define( 'SECURE_AUTH_SALT', '>/q4q%xPJ%y|:)9-1./Vh:yaf.v_MmRxU,i`>}L9L}HE]nZXExWvg*8h(4 ,r]v{' );
define( 'LOGGED_IN_SALT',   'w7Xe7&IQM?ndV]85hSRR-vV_uMGQ0llN|J*q&p3}|JHsl|<|_5q>$S$M{ByxKq+0' );
define( 'NONCE_SALT',       '8G =aJ;Atn`z9}b7nSNj4GDiQt8n6z,7y-t: &oMyb@Xt#ND-ojY/M{AZBPo} Qs' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp1_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
