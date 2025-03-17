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
define( 'AUTH_KEY',         '<LC(mD<9wm^bW-(z5(H}v!HNSQ4)*3!Wk23^&2amx4XVC S3VYcO(!je0JbA{+z~' );
define( 'SECURE_AUTH_KEY',  '>=;hQ1!MPv/tx{;/Aob,](s4)g~``t^?(YMq=QvVJazl)PVaFl}=6V(Gghe*v!pK' );
define( 'LOGGED_IN_KEY',    ']^9?w9aD?U]|NOQq&<V|pIBG|&Fp.pA)VZk/ p8Bj.m1?9V`iPxL39CQb8,$;jB$' );
define( 'NONCE_KEY',        ')8qt00UBIBC1eb.<=Gk=yP9W>lN9/Tb>idjDDfyt~7`US|S(W[2q8c6X;f1igL`y' );
define( 'AUTH_SALT',        ']#L}R+~u}50*bA4Ya9jfY_Gmn<7(b+=Q]=FG0ZLk8b<u5<@Oa[jJr>m|fDu;g/>!' );
define( 'SECURE_AUTH_SALT', 'z$ $kzg53QE@i^P1fbcU+NTqpvENsC6kQUss>`+][wAtIu44}FCXTr(VOldL0I=o' );
define( 'LOGGED_IN_SALT',   'tU+RSM_BpPFCt-m{cp8*<Oz/e7nJ~}bOWd,U}+]ot}3h.eW#c[cPk%?Tg=Hll)SR' );
define( 'NONCE_SALT',       '{>jlndvs~7H{,dG+v:d[bxV,N:2_LAMZX^)J0U9629]=%(UN!kUl W~-(*Prvq]@' );

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
define('FS_METHOD', 'direct');

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
