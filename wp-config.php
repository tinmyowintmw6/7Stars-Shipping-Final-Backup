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
define( 'DB_NAME', 'sevenstarsshipping_db' );

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
define( 'AUTH_KEY',         ']nmKE l&<})DNs72CfY!bF` @hg{H}qy^s4zPL0cj{}0gwmR+p%s8 jdjI3Jle a' );
define( 'SECURE_AUTH_KEY',  'H^CVwMFD9f`DJ~,?5`$]5htam3cZfY+Q-8L)fN3RvnD-){`CW:97Dum{PL~h^^}V' );
define( 'LOGGED_IN_KEY',    'p]%K}6Rfy:tN],!3(7)d`d;c)M_%q%kLPY1`OsUg>5Ph05ny*{Amd^F(l+:m%jXA' );
define( 'NONCE_KEY',        'WO@lA5x>gjMD0<eyB#a:%c=6}2wp{I0MR*7mG2@.^r4*~`rE4Y|nh;=tU$NmiGJ9' );
define( 'AUTH_SALT',        'Bk$ip-}S!39]C*jKV0*{:WLByYQ~3s_ADY#yBs[QTqc)]V`3~t|p,V(b!ApWx,C1' );
define( 'SECURE_AUTH_SALT', 'by)nM{ga9%?ylnGuAa!3&~h$dBQf<@HTe(<`Ao*&5FB[TGwi-V8,nJ4mo#b{S_hI' );
define( 'LOGGED_IN_SALT',   'x=Gfjwv808:[ZN3GN%UZ1+mctc$<i#7**x(bDwt&hu7hk}1u8ziF(:<eLSX$(v@[' );
define( 'NONCE_SALT',       'F`~M&KxT?MO=RC*~`J<=v`2M-tTdQJmIH/] 7QhJ%NxaZMM<FIL:YE <eV_,suhu' );

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
