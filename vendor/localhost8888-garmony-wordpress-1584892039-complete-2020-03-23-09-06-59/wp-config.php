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
define( 'DB_NAME', 'garmany' );

/** MySQL database username */
define( 'DB_USER', 'garmeny' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'vQ^}hBxloQT=36jLs(t5xU~{ ^)w02T$QW;_CA`m[^_=.@c`3mv>}IU4w Ln-.p8' );
define( 'SECURE_AUTH_KEY',  'n;!(8l4?-jmJX6Rt)EqJA~i5zK:7nVi,_0e6JCz|Z}RdBxrD;Z38hh)vi4.<!B]B' );
define( 'LOGGED_IN_KEY',    'd>LcoHL;8Ew|sO8NLN-Ic[0p_wG  /t/:r((-{]Bd9g)8,=ho=Il0X^0+d<B ]BQ' );
define( 'NONCE_KEY',        'ATJiR[xjC]bx37*Y&Dtp@)1C&YwMV@}Uwf=M<@Y#i}=>gZqX%vCO19APgR#L1^.F' );
define( 'AUTH_SALT',        ';io0|!ZF}!}[<TpL i{Q&5f;JWwPpLb0&RcvjaS-*gbUIFDJ,P7`E6f`wK1_pSrc' );
define( 'SECURE_AUTH_SALT', '04(ny,W8cF(wE5}R659V$IZd).9>[SoH 8Q;o0IsIdeGk!0@6;^k j$Mxz7?<`vu' );
define( 'LOGGED_IN_SALT',   '$%BEZ}+wL!Kc916D~)}ruZSaAY;/q@SeHw^`G0fgiCXQCDYbh=X+*}f{m@mG*?:s' );
define( 'NONCE_SALT',       '|dw Mb&25a8S2XiPA;^ f{SXH:(R!`$,LVVfad6Rd*abbihXrWthnT~|!~n|T2hY' );

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
