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
define( 'DB_NAME', 'wordpress_tech' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '.(/K;a_PEOcTLWXbzZ ^q<K*822b3u-FBW:Tl8^vhwYF[rG$akpa4=e:xw_Ft:R8' );
define( 'SECURE_AUTH_KEY',  'ePwY cjZ06|9L1.~7R:q:PkrM^|1YzsOu$`escusV1|4_[ZR2$t*a^mFHj^anVK[' );
define( 'LOGGED_IN_KEY',    'm4z)XXFx2s=,qD>7R_;>YR|*CyKe=f@O{U_(K8N@2O~PQ{h`2eKct!L*vJN}z38E' );
define( 'NONCE_KEY',        '9Lxl16*DN6?%Iqce}p!&y{bQA2j%>u>58M1R7e)P$q^C40PA_P{?0.Y1M(y,0io1' );
define( 'AUTH_SALT',        'o^h@a*Fi6U}!!XM~s4frY JP|-a$Da/luSa|OA}/<lvc|ub{kj1Uep<AsokJPH70' );
define( 'SECURE_AUTH_SALT', '#ob7Hs<cO KEP92eBn66#I{cyn]OZIonx{Yf;rq)}ELxDOTu2{`/#Tj^]YIE?)f^' );
define( 'LOGGED_IN_SALT',   'p9^*,YjgpJP6SRL9O*9iCv@q7Kp/qRBPe}]6WQiU;-iKxof^590lD/X^UCb%ZXTq' );
define( 'NONCE_SALT',       'Pi-F>8I{H3dhIP2}(FSMqpo>HRp`(Zk)wDQaJX_ji))O&bW7?==`!&9b]KN!B4PN' );

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