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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'M`|M9!<)H~~E^lrBwi(2}vPR8I.^_H.C0ZHq:qUE1q,$Ry(n&r7zD3Jy7M2AP@>{' );
define( 'SECURE_AUTH_KEY',  '`Y=,R1/sJ3{B{W2l=6MHf7NU]Xf?V2ph+==K]g^1=-p6N7` Zw4eU;4PviV9d}R.' );
define( 'LOGGED_IN_KEY',    'K;wiwE5RE4q~Q9@yu:a!~rCf%o!WVUIJ]dC42I!!7DI3yN:V&ZtA?5R8*u`Qz/P0' );
define( 'NONCE_KEY',        'V7=1RBA SceBP5eAn3A6a!]o.rFUc{3duqx$oXTz}zL;,VUs`{t&vOMJYgR%7WLp' );
define( 'AUTH_SALT',        'fD;?%^I@/`RS)uNR@FJuI{03,]qzNxX-;J!IW;8(^^^l9l_|?3y?@L<2>!$5*o[?' );
define( 'SECURE_AUTH_SALT', 'I?-j[(c}Yu7;(P|g)-@sO3`Cs(dZIewfk8RQPoa_hSSa7ayBG?}J~+9P7J#`|G-w' );
define( 'LOGGED_IN_SALT',   'G*$wg_X89O2ew!:?e}*OeWwj:n-)R+eF_fR$vcf<^Uj*o@ jnfXOi}[2qUqKV=eM' );
define( 'NONCE_SALT',       '$^t4-^cV~i3m6#:Ac;#hTlQK!6Ydgxp+6**!%]HEKQ&~XlJ`,.5,rnH`8-2Lv_rJ' );

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
