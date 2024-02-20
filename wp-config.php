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
define( 'DB_NAME', 'abc' );

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
define( 'AUTH_KEY',         'Z:+=7^M#``=5Sd=E/`,#W6+.N[2|gBJF(b1J*+F$EAXI|9M!3YgV9ay?oA:--~j$' );
define( 'SECURE_AUTH_KEY',  '%2vCPbc`053lZ_9vR;30[/}21H[|:K?{uR^s^`j(`*j;f.ovwASw4yh)Gc:S:^2f' );
define( 'LOGGED_IN_KEY',    'mLM:cr3WrTR*Ktl=}58azLXp74nT*yV)9,>]d@u|Kl;YtE]h;@LWfEyMC-}ngXuA' );
define( 'NONCE_KEY',        '7Jq<([9)IN[$Pt4~Y4K:{a:L[8 l`zomj@,tAj82Lr#E.rm>/=5U]lw|sZ]244#+' );
define( 'AUTH_SALT',        'LFRNU GM)B}.7zwe&5Ah()|>2fR,1_PI>Zu)sv]#nXDg#_M<r6!Tb`3_}sLajQN0' );
define( 'SECURE_AUTH_SALT', 'ojJxeL1T9,r&hBDsM|u[r8`enbq{_|Kd@eys_qNQ>Jh;bSNTJ[M2ZJ{C[eKb(3J}' );
define( 'LOGGED_IN_SALT',   'XAdRw/*h<E.=k&jmM)6a3-aW*>:6dia=loH0;@B5F^DVjM)%#Xnp]He~OSS*;RYY' );
define( 'NONCE_SALT',       'H&X>3l{x_mpD|fm)@E,}8eJ8U=G}E&Qbw5=_K:sl0*kT-B]%kEu3a(74qqqo(sIn' );

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
