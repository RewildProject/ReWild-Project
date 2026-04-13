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
define( 'AUTH_KEY',          '>g X,pqRB5ss8VK9/o3x^L#tL7o&Ok|DV/TB<#:-s>p*m}Ysd~E% Gn<}?R9A?:R' );
define( 'SECURE_AUTH_KEY',   '-M_ElX`qzkm-p-g&F+]vI)%/3SwUqL%9atJk5 Tzh;p13PrlWa=I_{Y(6kE24qHt' );
define( 'LOGGED_IN_KEY',     ']zTFIG4<l@|9.o<7V2t9-F?wD;J-fZex6/dY]umnUn<5A80JR5{8{]H5&SuQ0~eM' );
define( 'NONCE_KEY',         'w]uX1_nhKXY&uodh*8<>9T`EfRTBu1K;3HubK0JSO+Yp1Pfqrw-#r[PAA@hnx^#0' );
define( 'AUTH_SALT',         '7=mt=XqfHK:JC_4#?_38[~U31v(cB-$&VY);{0C9@+2*W|p_nXsv;UDkRmBDUel|' );
define( 'SECURE_AUTH_SALT',  '5/<tC;l{5h+{i;<LFI^JP`PkNmA/Q,B8`&;^:VO_R[DFtz:E$]*2(2F4w>/+}bm0' );
define( 'LOGGED_IN_SALT',    '|{F&.)x>U&~BVdZCw%JqsvA9{MMUfHzGr[{1D]g-9`Ffr9#|:Lyi#;n>2etY$ f5' );
define( 'NONCE_SALT',        'd$>rW$d)!%!E, 2#JWV#`/6(I^7:ecO`<2|Ed<SDPbeLP@w&q8Ch^d6yv6CTja~.' );
define( 'WP_CACHE_KEY_SALT', 'LrQel8?Via/NQ-9pDvN`4%Fv+yuaw7qv0X&drw+XPp46S<F:c82=q%7:<~nQF*[w' );


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
