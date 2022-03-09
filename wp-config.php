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
define( 'DB_NAME', 'zenvoyage_db' );

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
define( 'AUTH_KEY',         'P3$bt b^B.7s;zh*x:=EACeJV$vtd+J{)_]jP@G)0eN7_!||0xV!u87)FIkR0U`%' );
define( 'SECURE_AUTH_KEY',  'wU4iS$IyVQvH o<yeA5}+FQWch9aK!2^99K[U{yrk&?y=-?gms7bNFz+%Zj!2bru' );
define( 'LOGGED_IN_KEY',    '=~SX]2d(Y1i87G[N]6&?.xG0(sN&QSDOM2DI!=6={#F&()0 hKZ*a!w.3.1f l=N' );
define( 'NONCE_KEY',        'qU+Y]jlzYm|;Uh%D|844@Kg4Xg*)i:Izc2jcsvx)ROiLw$=z%^ ]X?Zh&JP1rbDk' );
define( 'AUTH_SALT',        '=H+O?i]P,<y}).X}cftVqpMsUd$vO#Q8rtbz%~)$w/:k&d6$-A_ EZnm$BQ-Zj@D' );
define( 'SECURE_AUTH_SALT', 'v71Zd@sD-Wzb1ko/Gm-28)K-Ik*<F^*!V+Kqdj170&]-9=O9Qt^w9@8D;;0a~1.&' );
define( 'LOGGED_IN_SALT',   '[4r6Q_@`-B`#6Ija0Q04e$&{HVas=,f/T=J$H(5>F:D8D)TOte0])^EWOb+t*V5d' );
define( 'NONCE_SALT',       ';^M*S_M^SYM^o D/9 :(BCNfJS}u(bK44uY]A=XNqL`}N]Ld_0|C2a(Ocmg6=uE_' );

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
