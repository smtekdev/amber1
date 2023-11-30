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
define( 'DB_NAME', 'nyb' );

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
define( 'AUTH_KEY',         ';lbj>y~;%*2dzT%oW>q!b1g?_]q~9I4Om@lJ?-4h |z(uLDV!gn:S^drk8P[.c7#' );
define( 'SECURE_AUTH_KEY',  'Iz]S&LzG16=R]*&^),8x{~ ))YlW>`*7pZRddg-15F>C*(t!wuUr;+tK=%yVjPIs' );
define( 'LOGGED_IN_KEY',    'UtoBjuyD)&%L5. <?~%GQ1!)zL_.xINP-)k,E%|I?1[fB-pOX7,>mT@+m ZRLkmn' );
define( 'NONCE_KEY',        '@~F!|Nr?(%OIA#Ew;~_:uk({M>;U3|l*<mdx&`g7;Wr}uXqqq&y,T`Yv)WU3%gCT' );
define( 'AUTH_SALT',        '%i1$}6Rq>Z;lX1]6uMX6L}/qMmU3mm{ HXex1T?=2=c^>1[LvQ#TuvR>yS$**i;F' );
define( 'SECURE_AUTH_SALT', 'xy?.lA:N_vXk~a=pW~7T(3 XW^ki60x=g%N W>Hj=kl=xdvD?I*k;t3PgObT_E#i' );
define( 'LOGGED_IN_SALT',   '~aVT?=EPu9:06=Q.U|6i{usZ+oR%iu*PAphV;L:1+cwJ)DpwUP;1/aB`(/l|iM|:' );
define( 'NONCE_SALT',       '&detpVeC|aCr7Z8#Lnwt&UNR)e=Ezp -:C0aqp)X[KRmzULCuGIIY`GMsj,PEPp,' );

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
