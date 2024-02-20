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
define( 'DB_NAME', 'xyz' );

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
define( 'AUTH_KEY',         '?9HN^CTR,byy0v9If|@7~`_B)q[<q4dOHG(.,;7Wv2?u}PAvoP6W9]rxT|oyPhy9' );
define( 'SECURE_AUTH_KEY',  'b7<bg(y^GOJ7yNJaR,dr]A=urRunyiVd31;Q%yHvd@dN~a%v/nUa]q5M$c8~?!p-' );
define( 'LOGGED_IN_KEY',    '<T;:,Os2F/D/2ZIl_X{rd-HN[fbs?<s{e5e-s8:MXbj^L0}iX]P)G_?EB,t-z9!;' );
define( 'NONCE_KEY',        'A*&zUgYK1{RfQXsk%1?nHCU.)1E}W6uu+YYN9cw2y]IQ^_&kK~}lMYkIh8$JTU7 ' );
define( 'AUTH_SALT',        'W`<~]i-2: DVnF~3Z| %lF8{I>A>}R.]P;6r;Posu7JEtGvDc9q%Hd+l6Se{>i0n' );
define( 'SECURE_AUTH_SALT', '5&[u1$6`x6RW3^5!&#UjQZkjstCAN}/gmA_QXyLf##bf@U@^)0oi4##=Z>VF<Xcc' );
define( 'LOGGED_IN_SALT',   'gjuy%x9V!&_/;xp]qmsqyl=^+Dk1G>2-.+Q+|=XN#)h;O46`/k+(rSjkU:H677+7' );
define( 'NONCE_SALT',       'Z7span$Y5#|SZ%H*VbDIa%;v[yMW3OboR}w8kqu~5H,l8RD|dN7mv6jj1p2~;-l%' );

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
