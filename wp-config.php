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
define( 'DB_NAME', 'tbt_wp' );

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
define( 'AUTH_KEY',         'GJ3v@#tXKuAr~,#We$Bq1Q^q%(CWDHrOpas#px)mNI#Q0K1~7u$BjC462P1ij9p?' );
define( 'SECURE_AUTH_KEY',  ']NyD)h Z%`u6J!s`,OU#z~-q) Fkg7)90gT:qK3k:K<O+.G4gP~hQf+|nV{7Rv2y' );
define( 'LOGGED_IN_KEY',    'G@,Igh4!9Gfai:BTMhatY=107^N459f03r(I.Ny8u46]51QZ)P/H@y?teJog9>@_' );
define( 'NONCE_KEY',        'EqXRM<.pEmgrpGIWiq]A1+`,xO=d{N7l<VZnSD$jtey?3g$kT/dq-=~1*yc9HJ**' );
define( 'AUTH_SALT',        '[ Q!byI8n6b-YLIP-gD3MS{A/yqbB0*.V|} cdEbGwD|:clJSiq+v@LVurqvIdOs' );
define( 'SECURE_AUTH_SALT', 'BCX69r[iG7HUpTm06SSxL+#V6|bz.j9:PSZNQ~ 1>r5NCY(au> xq I7G1AE7GaG' );
define( 'LOGGED_IN_SALT',   '|@JI.,1pr92gzXr>YOhP{PKs|^U,UfVnM:9zcJ=0g9Ja6r|239!;yz0bX[3Ld/rd' );
define( 'NONCE_SALT',       '+S9^^9<|p .*bbk@]xe?qw{[eQX%fRF$@%-zezInt8&xuuz YCmL98R(h,aE@WJ9' );

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
