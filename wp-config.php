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
define( 'DB_NAME', 'belajarwp' );

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
define( 'AUTH_KEY',         '?G!kwx<vX0il&GLF<8[bpS&:+4`?8IbnMG=gXIN %0Me:5cG N!%|wgPK3Kh3ul)' );
define( 'SECURE_AUTH_KEY',  'yYPV93U`i&p87~6IA!;Tn|$z&2v+P<([(={{K57Iq$sEf-j%3{k`,9!_hL(J$Lk^' );
define( 'LOGGED_IN_KEY',    'A7EeI{^D4`cX$nPQ`O.fNcmL;4<CU5+r+a ;S*a/}:5n9*8p-n-T}=k@T!`j#2Uy' );
define( 'NONCE_KEY',        'iq{Psg.tLO8KW/qG&rDDGI@U7Q$K_%0Dyi1Dl2lIJUV~|#IGb_u)p!m*a=Dlflbt' );
define( 'AUTH_SALT',        'N2A,X.,|j#2.X66:I)5<P7(F+K(MGj-F+z^+,!j[Zwz*YECm{wwHEIA.j(k*E[1y' );
define( 'SECURE_AUTH_SALT', 'BhpHqByxXhVhm7>b8l~kMlfFh}p*!FwRY#[iqQxcqqV9reBNM[)BG1N@Eb-xP`0X' );
define( 'LOGGED_IN_SALT',   '70rp2h{ ob6`&>:<}BhnZ/`P&FU*bI:XF *.aH+RbFb0){L8yj2PtD*ZJ_(<[S43' );
define( 'NONCE_SALT',       '1QsQ{%:otPWSOePHb2`$Apa.$PZ:&hf=Fww.:&$3)PptFe2k`5S7.+p]m(FNg1Cs' );

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
