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
define( 'DB_NAME', 'tjsm_db' );

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
define( 'AUTH_KEY',         '859ltw&l.K3y#!S&d)CFqFCJw@Kv)YUKsAw=h7=:JQ~yh0SPyGKn;VTSoQ)ukM{X' );
define( 'SECURE_AUTH_KEY',  '>wITLYSt/h,^H6(Tf2C|p-ga*E|NfI+t?`8X^!U,XW)e[^[s;[x|/dyUFF#ka8BE' );
define( 'LOGGED_IN_KEY',    'R0XkK0! j4q__?f_(Q`I  X*6#J(7Lq-}G|R$iRflmIaYL-Q0GLpc6e.=#69m-Md' );
define( 'NONCE_KEY',        'D|K;UTtSZAZ(6mdACV7/uA(zo0+]MH$aWSJ,7m(kw2L-ula@E,V@W}/(W^yMLDt~' );
define( 'AUTH_SALT',        ')wb,!%piYpVSmu=cD:~{&|/4Z}!A/HbO K66?c<IIG7w,N~CJxFZ|_ :7-cNhVhr' );
define( 'SECURE_AUTH_SALT', '!tU&3gTgkE:JkH)]U%9#|f(cf~rt:M9SBIbMg&MoXSEh63g~:b 1,_C<ZU{lcV]Y' );
define( 'LOGGED_IN_SALT',   '5V~&8_,|n.IF.N[#0PW>m*^W/AE7J%lYcOWM~_*?d|<}fNWG-}IsA`l.[T.N^<`6' );
define( 'NONCE_SALT',       ' ,}K|2=z4o*(u@p*hb:w><y0nTgRIa%~uT{&d,gAe5#{Yo=3]D=FAQbhF3CH.&.2' );

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
