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
define( 'AUTH_KEY',         'LX1f&n:rdusB35eyA<f<1L/lAqsagKRR&+lgMx%(JOO5#?(7+E)T.F`9l_S.?m)1' );
define( 'SECURE_AUTH_KEY',  'SkTV!jLVyplH{;A:7`o5gonym(~Bv+6]]ERuxxcaavi,]FU2kOD1>U:nN^g6$FzU' );
define( 'LOGGED_IN_KEY',    '4Dj{KIf8&qVK|ld68{|PNpy]}*n6T/L}ZoUcj827XzfN.1,`DO7bd&Y,B34P?Wdg' );
define( 'NONCE_KEY',        'fzF9Dn0aU3&5&+.*BD8&MCK&hu$om)9?MZR1y,@Xv}.MY#0)bae<xGq;by-IGfG,' );
define( 'AUTH_SALT',        '|!rNOHXl=-~{K9$9[03xU){<MNNO7Y0~ p6^1Bsr6iua`s8MQGUVPzy<=${Tv6x5' );
define( 'SECURE_AUTH_SALT', 'GE,aBo/Uc>m#k!t=G9FWQXoa[H,qz8]x,pU$q9vCGE4vVMB1`eNeL/rGb0bJCxWG' );
define( 'LOGGED_IN_SALT',   'kGR7Q7{=xUC8&ff6Mhtm2$;3QOO,CT[l`%Z4J#Ue7TD4tC}P7O-3rew?}.cK=lVe' );
define( 'NONCE_SALT',       'u|muy9+6t[XZK=8s5 2PLpO<tuOrc~RTK^v^C~bSt;QEi#s~<dW`~Bnj_f$3Ee#P' );

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
