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
define( 'DB_NAME', 'TESTing' );

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
define( 'AUTH_KEY',         '3v:$uZiq-}RTbDN&7IxMR~tQu>Zg>iR}.YVVp:Oaa?70#&IOruDLgG*^1X%J6c# ' );
define( 'SECURE_AUTH_KEY',  'N1yqH;0>s8BF{Q^N[#F*Iz9/Ti-7v07>t2R3BxJN J|!Nhy0+xeQ@aw*kvd7Oix+' );
define( 'LOGGED_IN_KEY',    '|x^_Qm5-x{z!D9c4p+Ghl#@C~^7s:Y/:|Tv^{y)Yyn#q/6rb;Ru-SY(1UsrA&a B' );
define( 'NONCE_KEY',        ';dKERQY00JyI _?~[@&8nMi<yV+oK460^$LZl;KG+Rw00B)@JG:D(0Z5%?4imEpT' );
define( 'AUTH_SALT',        'H(kHJ2xN$CB/b?!t<y+P;e7$Y73tB*NJ5fqNK:#7kIiC@hEpBXVJ,K:d#a_{=%<}' );
define( 'SECURE_AUTH_SALT', '<&f7f]&W KP2ATm,UA*1YZ:HHv#GspGXlN%M]Djn!7`-78 &%{X?l0BS M=iV!c^' );
define( 'LOGGED_IN_SALT',   'yq@7ZUxmT)n>kU.9zU.gwkB^=5s9=Nl pIC& X!EMBt[8Kz<JDKv(C}X~>7X0y0_' );
define( 'NONCE_SALT',       'VnAs*5ck`B$bH>DvWih/C[(x=zWG~|yCIW|FMhOuoJDdk9pf>K&b(#Xv6OcR;dx%' );

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
