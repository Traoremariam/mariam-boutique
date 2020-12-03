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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'sU?!w)J%D#[|f2=i$35yhl#Z2Ebo/@dqRn*H{lME*tlW_3%i(9%s{GRf>-!1(3BY' );
define( 'SECURE_AUTH_KEY',  'pUwNwd:~U<$SS})nL:>sBX?.QR 3TJGL+<;3AXRd^09d)ab]FcFW&)>i %#oiy^/' );
define( 'LOGGED_IN_KEY',    '[${Jo5EZ )(w1[VG7zR`Y !+r]m`)#= cR]yBj2F<[eLdn#0M|^uDRPa%*i3S2!/' );
define( 'NONCE_KEY',        '22OjDq,d}<WzOo.?=]sT+Yu(],E*bIbOF2VM/2Ts^pl) WwZ]AL<o/wQSJLGZI<D' );
define( 'AUTH_SALT',        'w|FU`vS_RB)o5?uRT0!U$I@;jBqnZ9#NnE/}|RP{CzFusN+(A;*2HyJhQBm*jsJ~' );
define( 'SECURE_AUTH_SALT', '|2;W1bj(* p@e9&;WgN>Gv@(B0_1^KGZfA&jydy:,<Ds0 A}!O;b<UD2pdhL%f5$' );
define( 'LOGGED_IN_SALT',   '32J,x1xlW9Ht%3|pfQpnusmYd> k&&T[fZa8*Q$w5 2j}jD2#AfVi<4<YWY*uUw?' );
define( 'NONCE_SALT',       '$$A>+}%dR5g(0IRAN@x <p#Vj/Q~][GT-OHhA}2cqsrBE-M1ZEMCUKbbK+_&o*1J' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
