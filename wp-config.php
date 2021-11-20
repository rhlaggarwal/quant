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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'quant_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'dWO#5>lEE.wd~h8(Y6_.O!]`SbGrl2CWUl*Ziy3qDrC!Gq-7TlC?=4C>{LFFr!yP' );
define( 'SECURE_AUTH_KEY',  'r@Yc(j!<L.e&xYYb9Tmk9(bHGP8W8:>Y/QH[.{7Nw~3wVPArhAmehi5B9PSC3(H`' );
define( 'LOGGED_IN_KEY',    ';5=9BXIlt9Fv2B:>dM&i8BY4ArepfSM9{25KYcjkV5f*._Zan>O/wz{Wl2$}n{n]' );
define( 'NONCE_KEY',        ']6^Fg,r~3pI2V0uQ<@,,e7t:etX.^9aImE=bDrGOhlqk/_|Y0/Iiww_nkP<-yci?' );
define( 'AUTH_SALT',        'o7QW{wHhfI%DqWL}bEb2[Pndu>e+d_75mn#b0%O{W#owVhTe8d=}-Pk9xfjSifZ.' );
define( 'SECURE_AUTH_SALT', 'w|]ORiUEh,hi;F~9? K]0$wCZtxWwc`d7Y08wy)9;t(9uHk(0^M}v,;39WbBR00^' );
define( 'LOGGED_IN_SALT',   'tsuzi@it;fUCPU7Q  r;ex14J?w+{s [CJ&<fe)SHleu%?seXOG`1ztO^~j8lOXk' );
define( 'NONCE_SALT',       '_-+uB]D@2T/3_WAl#5!f6eM8nNd/GsuUR&gjiT1=W^pq7J7y-;B+{,RO;, Tn:=h' );

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
