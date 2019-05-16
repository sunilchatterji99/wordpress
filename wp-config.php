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
define( 'DB_NAME', 'wordpress_dbtable' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'Z:wD,JczyDq&+0.G(EjPS~*Fxo`5l*bp8:BV1s$hP^gy}o{j!a:|Vq~:^I*xr[gY' );
define( 'SECURE_AUTH_KEY',  '.[YO&qS:l=+uicj8wXGOujXCIfg2!y|*_-;-b5_phDs_Lw#|TPER[<mU=J69i2QV' );
define( 'LOGGED_IN_KEY',    '7aL!:D]}CF@PnSS-|CX,()~qT}SvV:!,^)C*A,%`pzg[:5w+-o:dxh70+7i[.LDO' );
define( 'NONCE_KEY',        'WK((G|+p4OHHgJ:TA58M>aIH|cmDVMS@<XL7^}[Nin80@>$E(90PH>0AbWq>HVCr' );
define( 'AUTH_SALT',        '?vQ;+1&T@<FzwEcwVA^ im./ATNj~hK&JzeK_R$:>Y!d4]f;eZ=J#]WL~[)y=aC{' );
define( 'SECURE_AUTH_SALT', 'btoN|o[L,pQ423l+9?[DkF2Lx p4PI/)2h::<PC^2n;| Kh5>+<f+YhDEy{FI!I1' );
define( 'LOGGED_IN_SALT',   'Qp^wLe`T*b$}q4F|bn?*_354DX90Iciur|1>&>N`/AF1Eo6skqVhNo&q9 0eJw3H' );
define( 'NONCE_SALT',       '}kzc&-}/PTHiH(8y[$k01v>P,MSzB$5H|-qHrP@/9-reg9YDY|!%*l<8iStO|yc$' );

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
