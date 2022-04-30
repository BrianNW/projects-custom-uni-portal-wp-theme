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
define( 'DB_NAME', 'uni_portal_db' );

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
define( 'AUTH_KEY',         'M=g}nx&.3.K.;`(^RfRq-A%ciE&n]ik0:)uA0?rg Q9abznT%_Ln1@Zdum*xJ%3U' );
define( 'SECURE_AUTH_KEY',  '^;O!H6J]whC*SmdTm= QTj8JqBt .O*`vty;C~$_EoRsuw`Xn!xx}+<|J,[(4|9(' );
define( 'LOGGED_IN_KEY',    ']@X|!_f_:qijws&c7TE?PO3[U6X.cG_jqshP_O@F+ 3.gV5:8%=J[~g {Q?mT j ' );
define( 'NONCE_KEY',        'T{OHP7TFY= a@XDZQ:URLa}6n/fBrt&`&{ORss^b:+8A4+#ZL*t3=e[8<9e![S|J' );
define( 'AUTH_SALT',        'Rp:TP7RVSqxtC2[I_`>wWC6ToJ^l+mMAMFk<7IYFyt<bZ|]J k?yf%O7}#+/sA=b' );
define( 'SECURE_AUTH_SALT', 'i93+m#ExDb_i@8{QK>Y=cWwi_+SDeGbwxT[.m6hfvh6iZ1#RsipB:y~/h*<xx8|i' );
define( 'LOGGED_IN_SALT',   'l5TejMC2(=$*Ky[2DdmA$B5}u6(@~`C>;B:Id|dp;uWX%a3[|,2:u/PO2m(5w.]c' );
define( 'NONCE_SALT',       'K-CC|8226?CQKT6z@Yd,#zds>QV]JcKTo>>I:7a[p:<78&Q#4Ry,L3_5yxC~m+Mo' );

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
