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
define( 'DB_NAME', 'aamghararchitects_db' );

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
define( 'AUTH_KEY',         '%Vo[9gbl-LhE{16&n:71AQRH(1D*_o`CCese^Jp3S_xL`6%YllNJ5!79XCy!HNBE' );
define( 'SECURE_AUTH_KEY',  '0Pf-kn2S4v<)FKfR@XDA5o{PJY`w|_&u []SFJoCn.c3p=8gprZJD~l6:0{-V;i>' );
define( 'LOGGED_IN_KEY',    'i).sgf&2@i<U}*$|;S<HnI9X5*i2IJw_88/B[#grai^5D`m}V?1=o%pXed.F$NNC' );
define( 'NONCE_KEY',        '+>W5gyU0|$s5wryJ>LRTqJVGW-cfcJ~!#o6GND1Kz&:2um8UgyQC7S7Wi&OL0CLM' );
define( 'AUTH_SALT',        'D9K.qY};N|>R$0r!F&rri}on{`X^wcM$:h@q)DIb5Ahe)>CGHdJ5tXe?h^Ai $Fj' );
define( 'SECURE_AUTH_SALT', 'BjTr=%o&W$Y+<v$=da]}=Z$Q*fQd6_HGBvd_x2(Aocf|=PzDoOfY;Cz13il,5;~y' );
define( 'LOGGED_IN_SALT',   '%B~yX4-5p6B&usnsWhYEAhBi4(G}K8-uC&_3=gqx)7|{.*DWw&}N^_@et:Be&1%$' );
define( 'NONCE_SALT',       '/~AJ`Yi3y#6[/&@1X-q:[VuhztU$U$& ?4_;oD!&9Za6qPTojx|~O%,S9XBPGZ;|' );

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
