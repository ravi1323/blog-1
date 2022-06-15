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
define( 'DB_NAME', 'blogging' );

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
define( 'AUTH_KEY',         'A^bEf`CY~26bOM+m;jbCP^wOrBGpWG:UXvC,WL1 uKn3w!jzG46UOh@wI/o6qQ-8' );
define( 'SECURE_AUTH_KEY',  '4q}^(cb7yCSIVa^~;NU?LtH{,oT<rSY!-w_%gL!f|-%SYI0NW}Ed:@poQ&/>FUFQ' );
define( 'LOGGED_IN_KEY',    '^Ol^1L1[A;AD^A{O.!25Tb4efq6}SZ Fu6ycJ8b`&Ximm!utIn(jT~s.nX}aa:ZT' );
define( 'NONCE_KEY',        ' ^l<o]SdPg:hmaWSA0e}5y={Ef,L`F`BYw~An|bd@aJhg,+gHl*HRDk5*b[o`7z~' );
define( 'AUTH_SALT',        'Cv>T8mrDv11(I~7Dl&s?^>($;|l_dH*meKp>yP003#e|b7q#Gl=*u4MK`J&$MPH)' );
define( 'SECURE_AUTH_SALT', 'T=R3W3__R}yP8-ghpS%]be9];E/MY]CeE!F$<O;Lk`Pc+HlWyd?d?tv@%5wh`Wbq' );
define( 'LOGGED_IN_SALT',   '~A?_+7rfso?!;vG+pUPFT!Z0=>,650I|DN?@C&(HM2V-hnR/tyN%`vGA^U0/k/R^' );
define( 'NONCE_SALT',       '!Kd3U|Es^w6FQ[8sGZwAQld^iy`orATBrMv*-MGq.XmQ;Wb51cRW}G_:^q@g7/JX' );

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
