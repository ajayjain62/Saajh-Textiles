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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'saajh' );

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
define( 'AUTH_KEY',         '`MMG4k`C#E+7q5xZne2j%pjlsEGc`9j9+y1BTn[F~-lhd=U]8b<p+,!<_g_cFzIO' );
define( 'SECURE_AUTH_KEY',  '0:|!7cg!S@Ep<ZQ#J!0dE@iA1J/_~!3<C3@(bv{N?4_^CgP*qj8Xd>(>ajySs/wF' );
define( 'LOGGED_IN_KEY',    '6?fLPU/PX13T:l9!:I8NBsYd{#ZV%|*?kSH&J6!%-nl;oPh6)d85&^896niJ) 6|' );
define( 'NONCE_KEY',        '~1=HTGS<(`ShB${(FaPr2o3-H 6Jtj*D:)=`Kp6jnpl~j[|Y_Rcr3|>E5!S28w!D' );
define( 'AUTH_SALT',        '.do5H`iAfW/a:vRlQ]:~9 pI<El sPMPHl!s/|&d0pUO8d #I!acBWrB6~c9XFFd' );
define( 'SECURE_AUTH_SALT', 'o!2qiDj^`Ue:.zr} lI!!up67Ays[o*`>/S*zpKNZg+|YrAN]`eD1:|oQKkue[Bc' );
define( 'LOGGED_IN_SALT',   'KKO1K%Tm~>hLLVypv]>~Hw!F-T1%^<v0JxdDr V8Bn&`D7j4]fH]~31q:2D*Ub?6' );
define( 'NONCE_SALT',       '/qFNO#QyE_9Fa_|U{CkvAo03c_.4#Kr~+V5cg9`lP.L2[ZrW7P>+REwwP!H}#C!)' );

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
