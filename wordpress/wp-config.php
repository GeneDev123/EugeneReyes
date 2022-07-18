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
define( 'DB_NAME', 'portfolio_website' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Admin_123' );

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
define( 'AUTH_KEY',         ',U?*E1_K8gVq2Ak_5Z:(r;2.Eck^L#?*~xz3G&?V@ E1)p=>;G_$ Q|<(jv&,R~`' );
define( 'SECURE_AUTH_KEY',  ' ;XbKje@8jo;IH/Cz<]RN*tX !Gc`dJqw];K:=iCQK=UnHl@q1sIVurU&<}kb:ni' );
define( 'LOGGED_IN_KEY',    '.|*r7TxWu8epG (+qro*X6/oocz4bo~5bV:&D!<ykW=yV<}I ekV3Z2>W!fpgNvX' );
define( 'NONCE_KEY',        'i<(nd] ,BCGN`CDlq03fsY5%K&M0[c;R]Bkj+7.T^6<=|~1u9k/pr=T]bh8fTOIS' );
define( 'AUTH_SALT',        '3& KHA5<fp0?-<8XZ9-U(U>8)?bwbC<vhBI)8q(g2!N72Zu@E[dOH!_Wvo*>gXH4' );
define( 'SECURE_AUTH_SALT', 'S6ZF/{%6-PsMe9c@Q}uEa&AjQHN!SO,pYXW8_%f:2tgoM$X/y?M8fb5wnB$]BL]h' );
define( 'LOGGED_IN_SALT',   '-.<$=I*N|[_n#j4i]evs~g^3G{z9AfH|?IW3b@}w75`:W3IRl_Jy_f[s[3nH;K6.' );
define( 'NONCE_SALT',       'IA=SLuWKMe!1IQ|z!eE&GUZMb~SZ>cz;iHBb!ql^Y!-Idb}psG{w+9h}Xo[Vg2Qw' );

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
