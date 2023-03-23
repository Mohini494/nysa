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
define( 'DB_NAME', 'nysa' );

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
define( 'AUTH_KEY',         'CA8fHq,;Ll$fJpIvdT62&[J#2o:dRQ2Y<CpLj?w:!kRg0*<[/eck&k9X5:Myd]T-' );
define( 'SECURE_AUTH_KEY',  '8cnC%4O{*SK+4AkA6=:KLlQu^hc[3bs!y}h#~moUQQqxKx{.|UhP5Ym- cOmQ2>8' );
define( 'LOGGED_IN_KEY',    'ha4WwUe}9GJyVgDsmpxUa6J}~]<N<o]}|SzGEJaQ<#Q%Zj:Q.;q@>YK_ctKl$O2G' );
define( 'NONCE_KEY',        'iVeM0qT|KhPSXV$>.UNp mH-6C5j.P;2~e#&:Vsy;5#(]9HAfXHlhbp!fZ4(=ejt' );
define( 'AUTH_SALT',        '}}4B#h/!b7*KCj F/a,v[?qrtD}cCS2R~E72L1CPFOd(#b -eZ^x2`0;H  UBMU,' );
define( 'SECURE_AUTH_SALT', 'oAp50~qQ2qOsvVzgW_K4! +|oe( 2#60F7Y^g&dHF{+1b4DBwEp5YA.|j;+WiT|;' );
define( 'LOGGED_IN_SALT',   'OzMv[;Hk>VRyq?lIDOCd_]z 4Qm(2BDTmLSsJd#9iGfLIQEIK{U&2g2/KUL5q#x-' );
define( 'NONCE_SALT',       '+J/WzfxNB3V32v*|xu*Zv*Wt .5E80V!w7CdJQ(D67 !eN}q{=CY~;],]K,1n{e?' );

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
