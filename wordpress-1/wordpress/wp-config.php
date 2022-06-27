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
define( 'DB_NAME', 'wordpress-1' );

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
define( 'AUTH_KEY',         ']PV/hOyaWmf`}P4P*-tMf-8uL.W1LHFb.7S~[>(!jtzR]0~C$B gbch#dK^jQ4W6' );
define( 'SECURE_AUTH_KEY',  '*!f`8w+Rg3PFG0@qX^Ku3s5&51j#fHq:^y8qw|&bq,x3g49G6j3ZzD%/?97HSd2x' );
define( 'LOGGED_IN_KEY',    '#6Lc }x(@8BdZ[(&*g~84aL5Rv{jT)Xx(?G[i70{*L3[`|YD%j`jqnP-;eHOtn]t' );
define( 'NONCE_KEY',        '+}3j=nLDf->oR#4m!0.$152?Y{XMds$1}fv&-`O%lYCiuuSO>N3Ix=7IO<p,5>PZ' );
define( 'AUTH_SALT',        'U_&$/ cv.P[r-tweJ0dZPmg SwT.QV><tq]D]7;<]Y<=61yA!c+}g.A[0+>7GoYv' );
define( 'SECURE_AUTH_SALT', '[/,Q(|xW{aB^%LkK~?mQmhQ1$*7~2i4A7MYd- i01-(q]%z`i,ikwa(nb*V~pu1c' );
define( 'LOGGED_IN_SALT',   '[$q6T#avUjk3F5/d@:]MdE Iuw|)P/~$d,Z9V2X~e+.-~8Dg=@:HKz>8q7%!r=K>' );
define( 'NONCE_SALT',       '|Dgd3gIRj-b*A:.pj.N$vGMG#=(6Q_qq,bZ4f8T&PMuvnN`oWjQ>IaONSafD|W/4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp1_';

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
