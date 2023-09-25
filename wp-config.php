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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dev_thia_db' );

/** Database username */
define( 'DB_USER', 'dev_thia_user' );

/** Database password */
define( 'DB_PASSWORD', 'gD#6$S%^blFhpF1' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', ';G4FC53T:DX*8+e;oC:556XHX)My2I24yR&rze|+w]7CqE]90mvse9&SXzXQSwur');
define('SECURE_AUTH_KEY', '4*8)TSw/sd905F#C7x(9C;/~-hT6!O0ST2E6([]Gg2vim+#93[i66-H!)3g(Dbcq');
define('LOGGED_IN_KEY', '0:h8m6|1!e50-Gx-00&R2_ow/c7oX*6*E96k6N)UZze&5n|4XPBV7_;/-RprbK/M');
define('NONCE_KEY', '240CO|1&HWJj0!YguFVU0G&[sG6i@13(4VPSju|9)17Gb26EPpyzN_XR6W_+5D+E');
define('AUTH_SALT', 'k5A9TE5xkxVh7a54Zh68L_VfU43_v*)J#Tg98[*sgpbZ#i20L(%(+m*6v|v(&(lV');
define('SECURE_AUTH_SALT', '3[V8O_+9Hy!(3)OeL)(i67G#1hKS(5])aom-z6n38H:qKfMUUv19WMVq@74iI2T7');
define('LOGGED_IN_SALT', 'ja~J/y4ccIx2zn4@ZykqJ1#5e99UZFa)]0Ke/S20O:KX9:CF@1Q|D8M%-Ba3q#d:');
define('NONCE_SALT', 'Q9)X(OU-[0S81OjI/dM5(zp(FxP#e6&m2f!P_dKYmqr39/@]a3;)9/yyh(3r89&w');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpX4oA_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
define('WP_AUTO_UPDATE_CORE', false);

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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
