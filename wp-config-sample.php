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
define( 'AUTH_KEY',         'Uc~cr,d1JA[DTKG}08oVDf$,eDj)dh0lQu,;*G&#)nDB;_}U)>8d:wkJ)(zFqMh;' );
define( 'SECURE_AUTH_KEY',  'bN!Lf };`(*14#tF<N?Y(/.X.4Q{%H-w+WVJ#m?r_=R$?`rkZAB*47|=*(w1tpM_' );
define( 'LOGGED_IN_KEY',    'N)$`5[#gW_eF|&5{J7T4R/]F4p3=Y61|gwG:1.>ak(e)%<H#Ldy}&Ny.S2Dg<U>$' );
define( 'NONCE_KEY',        'dF5x<vUaa~RvFT@NX+/xQ[+?<z#}ef{/8!gs[j(T$>@$T+p%nnoFi3nC@ob}545U' );
define( 'AUTH_SALT',        '0r&6uI8xD4O?d`tO(zj]V;^~5rH(d%LLU,Z,3VlLMo~yNA56ic*<E/b3~s~;eY@q' );
define( 'SECURE_AUTH_SALT', 'wrcFgmXYvVP!sz|v_w=zZQM[*]TV9!?4>zS=d:XL&~v%+J2%)JV(^-uUncBps<,;' );
define( 'LOGGED_IN_SALT',   'MOby `IQh8K=r!@IvUM&3u=u6g*=j@ I#i6euW-1)_`^K55}#A?QKgp]d`YUa(R)' );
define( 'NONCE_SALT',       'Gv=4OlNJM@y}DkvG9@RuL4H:ijZ|f~C7K!}ZreFF&@-7(o1pN{D=x2]#:8w,O7[=' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
