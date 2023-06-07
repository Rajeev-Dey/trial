<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'sanskriti' );

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
define( 'AUTH_KEY',         'n:@}6muU#,m5<*GhbT=w-B$HCv}?I~cFCtVEXG3m~A596<<o4gOd$Cl;yuG_EJ15' );
define( 'SECURE_AUTH_KEY',  'Xz1BDarAyQd6QmnFbIG2C^~VYlD g9w$>|=xgOhQ*Yr![Vy1^%6 ?U$IVkBsr^yd' );
define( 'LOGGED_IN_KEY',    'V@Ws5bZAigl}k*S%b#@C-NfAs|!62W=fF+]+KS-D5kJbi)lL!-W|%&]c9?@ b-a ' );
define( 'NONCE_KEY',        '/*UM3)fg@y7~<x3^6IYaP>|{5~pRo;sA#N<#^e=3i9!zcy0L=FY_ZA511_?~jpT2' );
define( 'AUTH_SALT',        'Bkw`+6C0*=TNt-|tP65gO&cYAl03EEZ*#< TDiFV<pUt8^kdSAH=FM:im7/@T+;r' );
define( 'SECURE_AUTH_SALT', '3fh7;I7LP=;@~l0@mVE=T -$)-6Wtbfa~M7mFY[>kX]x(?uT}M|`Cir4k%$~O6?L' );
define( 'LOGGED_IN_SALT',   '~PYpSgT|ur_vNnNEXz<G<7$aJu:ZysCN1nBk3?J8k=,R2fM:8{jH,kLa]ySNsmbA' );
define( 'NONCE_SALT',       'E46J6Q0}iX@v%t{b eSc[T-wZOaNfEKyokMT<)Nc!N*t)oZM;^Pm!RNd(pUO6xL_' );

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
