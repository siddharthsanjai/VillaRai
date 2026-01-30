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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '!%_+5WJ3kDU>&5^/(kVFgHNR&l7(IX^^MkA=mu:hI%QzJ)q-q6ac2:c2?X`,yTS>' );
define( 'SECURE_AUTH_KEY',   'j?S|$L}YOME+X|fU.){q,@h&KG<`9{;ky4QFg2P47}:Tsxhqeez{<nt*^,Xgr{;/' );
define( 'LOGGED_IN_KEY',     '|BVUiU_ww2Q@IaU?X(y-p5a{ #w0NT{bWNB5yz,NU4m~MmGx8f6eoaS18GKKeXNc' );
define( 'NONCE_KEY',         'qOX6em:(LgLf[Z,-?X`yM7GX._qFEOK=q2/:6xdWg3;@n(*p>:w4)r968:;E3R4j' );
define( 'AUTH_SALT',         '1m5n(Y92!7-zM[Uy U1Zw?qbnp[0+4Y:=A_ev+%%t5z}?^fhs_`ao>Y6K.|UXtu<' );
define( 'SECURE_AUTH_SALT',  'H{E(JPSM34}*5Nb(<xR{3p(Aq2;-hqh*6JKwE;p$9R_J>V#4z(jLqL vaG{OBO:=' );
define( 'LOGGED_IN_SALT',    'X,~Czlz&ie8tog1+qNl8dVyiwS;;4p PcFI{T,sdp6cgrZeXs@ZrdfrGZ 6]|04c' );
define( 'NONCE_SALT',        'P.SR1eH`44J_JdT>6[yFH=2DSd u~{T]hZznb>( ;/+5va3!Cz,E2`YX#^sux8!C' );
define( 'WP_CACHE_KEY_SALT', '6I2r+~Ak2*cmS)K$r@p3DDZ$(y&h4*:YfQ%2uCnB&.N2Us#lB2UyL6r5jPKSP.ZP' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
