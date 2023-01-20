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
define( 'AUTH_KEY',         '_N(,L.YXc]L&XYF&R&^:fT[yQ(7 6~jvdw(Qt7|X@7&MNnjwJDn+LoUpNs`=;4 S' );
define( 'SECURE_AUTH_KEY',  '#H`AZ$!kS&*D}(H7L>@$2A`#6K(rM[*zTXIW;=+LwTbd@ahl3Myub8q0aA=vKrQA' );
define( 'LOGGED_IN_KEY',    'xeA0f0`<ePqH;*.Sc];yuHzh[Liaf_n9FSpK@W@~~a0Xi>E_9XQ.VAZY0EQU8f7o' );
define( 'NONCE_KEY',        'pQ`LWv<@oc`%G=RdU^k1;s&Vs0%p19XlM]0t``bm8?z5G0/8/ri;nGOYIc39:nMN' );
define( 'AUTH_SALT',        '|_&P4j# r9VrN,!fQFVKE{[ZG@qX 5`Z69KIZi?+x>l!bmaxP!%_}rm=^j+b~;%I' );
define( 'SECURE_AUTH_SALT', '_ E_onhJPWkH8oF6RhZu2FR,!ZXl}uLmD=$^h%gNE/hTK@iQ2`J,:`dvb!RIQ2i8' );
define( 'LOGGED_IN_SALT',   'q,?vkYd{E:H$k!GFRxJ=Sv-t_J2%T:;G^tSq(}P`f~bT=4[U|Dk+^p^Y(8%/hqV.' );
define( 'NONCE_SALT',       'RF@+z ^;9@d2aQ>8>?ATC9o=q9C0Dz_$ogk+<5XCfQ[nXn,&~Ji<Q3:5h;If]$^A' );

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
