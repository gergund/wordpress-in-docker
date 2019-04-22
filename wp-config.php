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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'gFq>#6Wn&+{GocXeP0`[LlQiy,s:hB(gilY6!mhTT=NpdM=,CGqFx4f1(XHvl_W(' );
define( 'SECURE_AUTH_KEY',  'T>7dJJ*+Hx)&)3o1j}T`}<_En6z/c&I<Es_23w(u}X|b:J88KB}oKGGl->,_bCK.' );
define( 'LOGGED_IN_KEY',    '8OY4rSb5`%L<Bf4J_$x*P|-^}kgsQ=,R-;)mq_q;Fj4`#(1:}x> [Xv8<&YP04.7' );
define( 'NONCE_KEY',        ';hy#w_Ze3e(t5k&@</OFee,r [WqOg}/tP!Ya8JI:[w*Enf-~zuI^ji(rcIhQL+P' );
define( 'AUTH_SALT',        '_T#!C.qfFgEn5emGST$Fv45!wS(<^G2vGj0xfs*IhIj}~ZN6L$IC2Td5#aG;oC%-' );
define( 'SECURE_AUTH_SALT', '()nH_R[>m]*34},Ogz<n)G`o9x$Sm&~zXTXzv46Dd$W7HfSSZw}TC2 QwlI,VHr}' );
define( 'LOGGED_IN_SALT',   '_q4?JmLuYY^qVRf Lru}O*e(v(]oQoy!)TS4)Y5/Fc$#MN.&KQ&)Z_[d?H^j;CCA' );
define( 'NONCE_SALT',       '<G`I28}pC(XWZZB^xXuP-7ASk6]]w|aleQtpg96V%4r<#/|l!KQ+ZmLiITHD+C+k' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

