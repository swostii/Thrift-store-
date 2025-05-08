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
define( 'DB_NAME', 'thrift' );

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
define( 'AUTH_KEY',         '|?Hbh`brPr~Cuk)$-WZ]I<8CT#y-x9iti8~2zi-qJ<[N1UB_rT%JSHi:vonGITc?' );
define( 'SECURE_AUTH_KEY',  'GE7%},ONe;7=1T&lw>k=Y)@H^_3b1,9i)Dh BS Nh[zmqGHmW*03tcE_y35+Y6Pd' );
define( 'LOGGED_IN_KEY',    '^0Y]<>Oz#Ku12A3H%m< x7MoMDh}4T=X*Y}})nR3yW2+4vzX(<^h[`YPcn#Y0|d;' );
define( 'NONCE_KEY',        'q3U;|{+G0$Nt|oQmY%[[^2OT#CxMA /G_8LYQ+<gTz@xWuiC?GYBq:sOWM|9WQd.' );
define( 'AUTH_SALT',        '2]U_:l7_^O]/XHY<Y~E`Tmwd/XS?6WT~,?nWuALub5*u|#@$}@AYGR<uWw.v=o2v' );
define( 'SECURE_AUTH_SALT', ':SK,%+7qZgY/lO&2bmoKN]&RppAVr0^j4i$~fXqwF>n^y,}=wl$(d+~t5XE-/kI{' );
define( 'LOGGED_IN_SALT',   '!XN+D#C)>j]]&w,:~3v2[)}(s9xA5QRTFs(j@>=8G>=e`EsU-ow#&}I?|C2 k>U2' );
define( 'NONCE_SALT',       ']lFelf BH!ZIKe#uO80uSSL*]w.Ny|P$Br db%6xS+&N`0JC|OM_y&Y-I28.AE:s' );

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
