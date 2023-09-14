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
define( 'DB_NAME', 'testsite' );

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
define( 'AUTH_KEY',         '+Q]f&Mp2r3@XUU$V1B7X !@n-(dr-^ndK#ijx9-o62Cs :+?ZjGMpF1MZ4N0Tt3I' );
define( 'SECURE_AUTH_KEY',  'E[vbX6Am|T26nol=Nb|k<!-`rw*OWPfzVoZ2qh:9a$]G,T=?wIl0H_Z|[O(l!h!9' );
define( 'LOGGED_IN_KEY',    'HD<YQ-7]rAn-!{Ga6)GJS?pBV0>v,%];?rQcOiE6I(8x8avw=NFpO iTv9?1PpXD' );
define( 'NONCE_KEY',        'I.<:[<rm-mBGetEAg.aDFdxEO:<;wpxDPJW0le#s? ##d@_juczF_3(w3U@s@8`R' );
define( 'AUTH_SALT',        '1fm-%>VOTshQu!D2K<5kg5eY3!0_Ru&:6GD&d(-RDiMY~4yx=N+Cb!0CQNKyQ5ZF' );
define( 'SECURE_AUTH_SALT', 'b7tO;c?g<+k>0P%F7H~-r4_uM+zX;kDQ~hE<:_d|(kdTT>dV?v)s0F._nPR0/(BT' );
define( 'LOGGED_IN_SALT',   'I].1>E@V2oNii^q(`x$<~UpYI@=rO3b_oxDQVNaM(t,JiQ(}W%P8i8v9C!q0xn]q' );
define( 'NONCE_SALT',       '%q$wod4`Adj42)Y^{Tl->+r8rIs$d>dx7JJ4@eAxIce,?nH,,5RMZW?*Prfk@[%2' );

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
