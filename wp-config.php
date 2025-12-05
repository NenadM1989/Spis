<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'spis_db' );

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
define( 'AUTH_KEY',         '&5@uy(4OW=%ftMTi40jg= TlA0w}naZ5Ozx=%X%UX:g8pD72xh^W@wKriN=KaNeQ' );
define( 'SECURE_AUTH_KEY',  'E*AV--37,Gf0Tv<1tw?&zKF)9Z$M_;jXMzf0x[_cz+GIx}%Qeou^ vn.qc(}IbX-' );
define( 'LOGGED_IN_KEY',    '(.itkN82rN<df3)oV+`EjpNP:p&#1m(zC$9B=:>JA]3{kXsEd/_9H(dEK<BUrcuw' );
define( 'NONCE_KEY',        'g~3d.(Ocq~U/_!MCR QF/64Eqc[|+4wS1_c2tV|bIHbLfQ,QRS8#5H]<)g(-lG5a' );
define( 'AUTH_SALT',        '-/l&eiO^^ao]2>#6CYx&XpA@M W(2jM<=k^x?|Bf/Z@G^v`2:j+{d`a;yh6jt4G*' );
define( 'SECURE_AUTH_SALT', 'n{w-^DOgM=%@k_.Ua{Mr1SVGU_E|Kiff<-nB/Vv>Dv(-v*UZ^UJTbfV;Qv}biTs_' );
define( 'LOGGED_IN_SALT',   ' [T<RJbE:YR7cO@+v3n{DHP7}FX#^T6d+]U%},O2)d+:@)tMXOFU= HGV+pR]9v{' );
define( 'NONCE_SALT',       'krkDpix+.DX Du{rHSB _k/ =d>.OIH|wkC`SAZ]ol{}8f{ %@h{Qy%U7g~!pT@4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
