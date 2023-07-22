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
define( 'DB_NAME', 'g-planning' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'WJ:pQE1Eh)>*|#V+Cf+C:WK6!KHPB*rSP*wTp~%wyiBh,/39,->!@4kbPBO.ADx}' );
define( 'SECURE_AUTH_KEY',  'aekL.J|K<aW02lPew6N:QrU|9PHjn,/Ky-E#9&[9AmO/8Psq? $Cp}f,$JNmvoS0' );
define( 'LOGGED_IN_KEY',    '_h(1/Y)bL0X+|&/Z$b/0,>,=>U{Quf#z8cZg)>ZHe==L{(r~Q*jC3:<L1R}k{h<!' );
define( 'NONCE_KEY',        'Rek6R5Z96]%poDhfV~W!?VPK>(rpR37jH^,4T%C:,|kTtNYptWX11J2F/[|.~2Ye' );
define( 'AUTH_SALT',        'rJO2 V[Y}VksRHVBQ8OoT;pK[u{4[$..Hb |eQcv/f~MX$_tk&hT=3e5#)eG+}>q' );
define( 'SECURE_AUTH_SALT', 'nF&>|>b_F%2E_kl>,T83LaJ$%=HUmt8Y%P-4tFar<[|7;):>bUiPY#a9ab`yR<Jm' );
define( 'LOGGED_IN_SALT',   'H[qWK,50pC)aHG3TX%KtjdY4$A( RD_.P1sLU.B43N2>ZUU2l/i?x@XH.~|6-Q_m' );
define( 'NONCE_SALT',       'BteQHj}Hw)&OinMA`VNZI,Z^h!@W6 Mjw}+<d:oH4Zp|jh7C<pv:b1+4D&e=#ea#' );

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
