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
define( 'DB_NAME', 'adhyayasolution_db' );

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
define( 'AUTH_KEY',         '5|3E$Q5y0TYL@_$FLtyrc0@jYscRGa0tC7mBgX+S3^2S`3.oBFl)v`OcF-9wpl^@' );
define( 'SECURE_AUTH_KEY',  'CulYYJt*e{3Hp-QB7sh3#q<|$faWG>HckS)&C<nOk>.eQ#A73EGOWEb)P#1oKa9P' );
define( 'LOGGED_IN_KEY',    '!&%: nI-;3K;=.Tp__.$agf>W9FT@o3IvWD!~KTa*=e%2(1$v?$jH_DLBy!&{u5L' );
define( 'NONCE_KEY',        '/7D>nwEmruty3^}C_Hev;V-H~b3-j7`M*|fBu)_IRDSUH0JD4$}N7qyxXh7{EG{@' );
define( 'AUTH_SALT',        '<:I;`*lPi#=zL:}+4PFK-Hz[e@_/~o7 c[w+l1xLELI`,C.+)P9V*E;tXZt](m4t' );
define( 'SECURE_AUTH_SALT', 'v|g`(-p<U=Z)zHcl7Id ab=;Ek74^T3(VV:Dts}kUYG:-!RXo=k)[#2(yr6b^[OY' );
define( 'LOGGED_IN_SALT',   'ed ^y7z3yqH}r%Q}Fj3{06+Y1Ei<SfPXU#_,Y9W4<o8RvbC;I6@Q-%E;MF3lRH u' );
define( 'NONCE_SALT',       'zI:oqcpI@<}qSmGy;c~DnK|&7yFJ715~kv)s_GcxNx_qN4:#59/2eP<P:rZUJj=t' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
