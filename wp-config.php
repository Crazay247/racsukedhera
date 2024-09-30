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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'racsukedhara' );

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
define( 'AUTH_KEY',         'n>|q>A<?HK5i.hLBsu+r8H=_GKmHP>D[$fwXS*oecWC8b`</G^)axkF_c|2=9>X=' );
define( 'SECURE_AUTH_KEY',  'a&<111jo:N)&BlXQt33-_rFL|@Z.j4|{svb{T)e ceV`>wWI>]YQburPQCF=tD<y' );
define( 'LOGGED_IN_KEY',    '.Ea8NCzr=MhM}+(Uqu>`#7aG_/%C)g}e30lYV.Q1z6R8^7JVL/`I 3X/Bp$uskH*' );
define( 'NONCE_KEY',        '%a=]J_$y+RQ@E}xvG8]1rLHBAaz-Br5cfZJnv0Q9U)4OZeL%{fEv<FX[a,O=0Tts' );
define( 'AUTH_SALT',        '`TQ{)0~Az4F_SzltXQ5 WMG%}2/H>uAy,x$SC#_XU!BS@X@uC<xSNq|sOXJS{d#Z' );
define( 'SECURE_AUTH_SALT', 'PEvt;.iC 7v]9U5u*)TCi9!bzh}b y$Zrit3vc}*JuSU1Ebv]?)XpPyW=C~olZ[p' );
define( 'LOGGED_IN_SALT',   '+~xnPTjgu2tR{@i.PbqX./TBXWg=LTF^3z(Nw_ab&A=?n3k|H;/!}l{,=634d2]w' );
define( 'NONCE_SALT',       '{&z0gLBXM+$*%L(.h|_D,cugk5w&m@ZwlA{f0XC:FG_dk}q7bFIk=O=6S6t8Ws;X' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
