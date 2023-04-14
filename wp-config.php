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
define( 'DB_NAME', 'cw2' );

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
define( 'AUTH_KEY',         'o9;gn[1jpYH~3T(?8j-?)OYd3o-:K2HYQCyAWQ/Rw`VT5vk{y|T=1YZiZeD=}eia' );
define( 'SECURE_AUTH_KEY',  'a1@9MS.i@N*i^uU`(UY5[&mM)MY5[Rb-AT >1/Zi`FK#n7 IUDJN<ZceF{6c<fBz' );
define( 'LOGGED_IN_KEY',    'zTbv2bwA9}/LEo]{/]I;&=1@Osbw+*7^H9gl{28r!!xJXaP8c(5EecLaoOo!8v&)' );
define( 'NONCE_KEY',        '(Q#HS,C%zvhsg4.;_Salx)ogT)>f`#!4#S1Inp2.)6c&saozR{RbMT|GUD#:xJ=N' );
define( 'AUTH_SALT',        'G@h3fNvL*~D`,NJ<M+L8PS3*_Mj3WUD75hbYbZE+49mh4Cz:yO8MIqvJ@/:&c{>u' );
define( 'SECURE_AUTH_SALT', '}2Zz~F#AINJ`%NVwW%CB,eY_K!G+7~7(.g(66Z yxTMvs+^}(DF6!wV=+~2lPF+>' );
define( 'LOGGED_IN_SALT',   'LW6U)3_(EBpe%7zWQj)bRH>|4cb.u4&wHuKp}#6&aXiUoLVwwo[32Pr}W@kJ-Dvf' );
define( 'NONCE_SALT',       ' 4],=:DUjHMN{DOip(*Ix>X cV!TRFj!n%O&7g)DN4]UpHU`.)Kqu&21L6&3m#}b' );

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
