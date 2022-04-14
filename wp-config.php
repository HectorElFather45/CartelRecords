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
define( 'DB_NAME', 'colocolo' );

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
define( 'AUTH_KEY',         '[7FGqv^ w|b%AH)v17HOtyVJotFuE36l/),aLo9 n/W]6RDCJ;O]42($>t4K5w}Q' );
define( 'SECURE_AUTH_KEY',  'P.A+aeCBhNJ]Sa1zQrbyXvF{U8}L@`O->//O@>1Rrg/P5B-lei^Cvx-TJ+B|QWM,' );
define( 'LOGGED_IN_KEY',    '4oyw!|5J=ylI{pl@jx13RN|6&A<>i6C-^;hK9FPsIMNa?kdpBR>~I?,s4n#hJ.Ju' );
define( 'NONCE_KEY',        ';GulQh.eT7!iqTD<VQ2yMq.(+r*N0Bjp=n/G6#(%=.=lFSmnHKD!k~xS1-F^(HLy' );
define( 'AUTH_SALT',        '%$vmYH6i}!k7WlCE&Ox2Z=g/CBGGoWqj!*^,Ze7*!)A-N6SA+vmLb,N1p-(|4D<&' );
define( 'SECURE_AUTH_SALT', '6g2y1.h=V<,N--fNo*.Pjm4TSd$mG2<,rGkPH#+oFbc:.Q1/g%<g7qT.D0bLQC:@' );
define( 'LOGGED_IN_SALT',   'oue}ki.7C%[@9Sfm%]eYk3)U?0C@f(34R~=U<V?CiL*)GB#$7:VHDt).Em*.Z[<Z' );
define( 'NONCE_SALT',       'b2TtR[&:(AP x&lV0)?l={1;0{M]Nh.oO^Rb;qcdadk%%0G_pgz5|!r}fR{TFi%:' );

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
