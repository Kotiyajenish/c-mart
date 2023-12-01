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
define( 'DB_NAME', 'c-mart' );

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
define( 'AUTH_KEY',         ':`B-dHG{?ypMZing?~]E4t#`mHnqU/&Ng9WwU-LdD6|juI!nuiVb]|;vz-c6Rj+E' );
define( 'SECURE_AUTH_KEY',  'iTQ^DeNjb3`Ti|g?J,V: ~;&wVbo9;|j}3fxXEmmHndH+~|F>s|2SR7V*oa-0.SC' );
define( 'LOGGED_IN_KEY',    'RzVms &Np9 ~e`/~ l*iVzJ]>4tG^d}>uyG@P%T`u?#=T^#ku7S&d^X.Rd;z/423' );
define( 'NONCE_KEY',        'P^l*Tiqk)&q!cP+hJ{u=3^UvCa6Wu?>&-@Cw]ss4yN3%_c6AB5g?{~`e}aLh{c+ ' );
define( 'AUTH_SALT',        '[N*u?M;<Y}$a+x,~5`@^AP%_i$+/r2<q+f0<NKttm: %supm%|CbnGU#q-2o%(K:' );
define( 'SECURE_AUTH_SALT', 'U(EZy6[1R`>8ra@=/n9h1E(nNEPLw8q4Xh0Q-,xW#R|p+G&{<[}&)X)uO0cD4.xT' );
define( 'LOGGED_IN_SALT',   '+J^1blF$Z6b&%8.Ysobuhs|`^P#w/qGL<v%8 ^J},uO:|^i,S<=yy[NP$QwCe8Go' );
define( 'NONCE_SALT',       'aQ/(%g^L6&AKB:=y[_:l1t?wK#l+5S&e6eT+SVGfMIb%7QkBuS.7U6|-]jne!XLx' );

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
define('FS_METHOD','direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
