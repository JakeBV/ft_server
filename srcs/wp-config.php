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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'mstoneho' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'Gw:)K7r73gk-rO%-<GD~y9BvYv+.CRXa+1)dOl@a=h}U}AZz]UvkGx|&yvLHoIL8' );
define( 'SECURE_AUTH_KEY',  '<G5}dm:Fg-n~-:l&9_CDb?a+-PdzA+w+U-77;(KIJxsr,]~XS.Et{$hTxw.:a4@k' );
define( 'LOGGED_IN_KEY',    '6d.Wz@91t5}4!#mP2+4&ese?buSc|lk08qit;K/!i=_5-6vq!K?U<,0Bqd!J.~)_' );
define( 'NONCE_KEY',        '%p:z;:eFe&{{PwCe}`$W%dT68,9U*j&Blq225vdl_3+9xUCajxHB*9J;C8r(@Vuf' );
define( 'AUTH_SALT',        '+ejgE[&0bTe[((N|{hR|`b.1$B7S2V{!(O?NquzcAG<,ShYjQ+/m]};k]dF|*Fwm' );
define( 'SECURE_AUTH_SALT', '< 2*>,p((<!4DLq0%saJsw`bRtq|,:ptIrK[Q.A-5:1Fb5wKqr,`_LH6M`6JIK=A' );
define( 'LOGGED_IN_SALT',   'l%@Z0h`x)?6m^Yw1_NHfM=+0-MxZ|Bsi}DC>CVokmCYUA.<SHf5|-.N}V$8r9Dwu' );
define( 'NONCE_SALT',       'i,-yf58k(I[Mbus$WReRa.{1:xaBd gBt8ZK@E;6aBw<b-RLY;1UH>@&[n=e3EKo' );

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