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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'N+p A^i?BI*[Q&PFPf.LTC%iIg{^dLhfZsJNwN}$Cj0V=@-?W+,&xfS#~*:!QlX ' );
define( 'SECURE_AUTH_KEY',  'KBdZKT9;Rx3RC*n/&*C%u57%mU8f.4/<4=<Z2x+0=2*Z11GsV~nJ)h;IPefa8o<<' );
define( 'LOGGED_IN_KEY',    'qnu{l5v3jI:Rz 8p#`oO/Gudis%]i!Rg[!?ny<FI$?;*OzvrU)lJ$r%U78dl/F?G' );
define( 'NONCE_KEY',        'Dz%P@bPrcZA,R0?},2`Z]e!787Mxr!0xjJ Kb__k^QHWNW7nB:sy&{&j763Wd-Zc' );
define( 'AUTH_SALT',        '*mg*3kl<^;h=><R7BEt/%5#cFtkY#tzF5ktn|d^ZFn/=}ffL8hl$31YC/0o;WIxH' );
define( 'SECURE_AUTH_SALT', ',J23]0pE=bNx&<mlhYFX?seIMd1y;_U3M,#=#n&DUVKrNc:>ie{%*FRotuGTG4 j' );
define( 'LOGGED_IN_SALT',   '91H;C]>ri.nRgU*r=PIJ2DIxXL8`Rpu;aJL0`CE.N4?WzH%Bs`xta]#Dzyk1j,PR' );
define( 'NONCE_SALT',       'FX(2{6n0DHLG!6PtS+}u,9:)A77M:.mt5 ;.AlZ4+H$KY$q@`P<Ib?`#H(4:t!fc' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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

define("FS_METHOD","direct");
define("FTP_USER","USERNAME");
define("FTP_PASS","PASSWORD");
define("FTP_HOST","FTP.EXSAMPLE.COM");
/* Add any custom values between this line and the "stop editing" line. */


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
