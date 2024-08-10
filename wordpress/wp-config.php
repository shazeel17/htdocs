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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         'Odw}%tjF28O.G>F~N(i)QEbvTfmOWLZwsj$iWrN1j|Z?nvERQoLU GzXr^Ds[!=1' );
define( 'SECURE_AUTH_KEY',  '%d9/Q3(Q>IH$?qI0?yPy>?x|}V-^eq^M;-Foosf)0}^##.HF|!Y_R}|{|~:~^dxS' );
define( 'LOGGED_IN_KEY',    '$?$RM0YP*%{JUXV n|wRv mC:L$B@^vJZ0b4o Kyp7-H&(m);cEO^0y:t]=IYa&C' );
define( 'NONCE_KEY',        '~G3NFn:S/1`wiM)KW zD0s##vnuNp|1&HCk47PDummGn|-C?I:#%7<{MS0]@AQe<' );
define( 'AUTH_SALT',        ' VU8$uV~#s}%.E^%_rSmm<+cbBUNy 32R3QaSJ8.`xXy(Rm)oX9tXv hAZD:0.:#' );
define( 'SECURE_AUTH_SALT', 'wy:0.QdE0FPR&E!]:#H>=Q_Ojn+uyJ%4NlgljlNLmx1U0:Wp<oLr?sz 5N_9fBmY' );
define( 'LOGGED_IN_SALT',   'Rm$C$>#d?n$oHHp`Tnpo)fqjtdSX5r}857dDtlQoE+Teruj_%$8!j=>|F;z>`wsB' );
define( 'NONCE_SALT',       'Y,9pY|M%9<-cJ;c`<~&`wIYT%2_A3DdKREg1<kGYFiGR?p[#2#;5%P1|6I2IVb0L' );

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
