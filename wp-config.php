<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'sastastore_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'g)$^Mz<_%OE!NA6!v~D@oy86J6?MlT[fZm1r2Q%a6Hyo=AI0.7Kp6dylH<}A{Qlh' );
define( 'SECURE_AUTH_KEY',  '8E&)>#8<]uES]r{A)zLQ<30De8`%J7{X10Jj^6(O7<^/o=33wI(Wj<-50&|>54_B' );
define( 'LOGGED_IN_KEY',    'r2`l@H*=;rpkaSj)Cd`wq~S<Vbrf]co/;=5]*/K7mp|X}6H)O4Ii#UYFW/oaHxt8' );
define( 'NONCE_KEY',        'p2$Ch7ma50I`tiL/w#,}+FK&.>j1D#lbE-SO)*`r$F(VWTRL9(bW=;%N_}zY!V;Z' );
define( 'AUTH_SALT',        'cFas>g=/ZJtOW<#@u&0b%5_um3H ;Sb:=qHo-|,j[S{E-KdL26:s9Yi8TQ^18LzU' );
define( 'SECURE_AUTH_SALT', '*T6rPY6[N=C.m5^RzmPk4Av9+Ob)#Tw=ZTI><jvG!{-X{ _PsNGs.l}!0.X5[H?/' );
define( 'LOGGED_IN_SALT',   '[p![#`Wf6oj7V/M#7Yg<Jhd#Xb77|k<Im,^4.=am#OI$OHrknnMsv-ez8K5<&u0W' );
define( 'NONCE_SALT',       ')rhY L_$h3G1)W:1>KBg)lA9M|0R6WJQL4]5N25wL/.T4MC=E~i+PSw%WEs>odDx' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
