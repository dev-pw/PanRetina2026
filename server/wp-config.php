<?php

require_once __DIR__ . '/vendor/autoload.php'; // Certifique-se de que o autoload do Composer está disponível

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

if ($_SERVER['HTTP_HOST'] === 'localhost') {
    // Ambiente local
    define('WP_HOME', 'http://localhost');
    define('WP_SITEURL', 'http://localhost');
} else {
    // Produção
    define('WP_HOME', $_ENV['WP_HOME']);
    define('WP_SITEURL', $_ENV['WP_SITEURL']);
}

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
define( 'DB_NAME', $_ENV['DB_NAME'] );

/** Database username */
define( 'DB_USER', $_ENV['DB_USER'] );

/** Database password */
define( 'DB_PASSWORD', $_ENV['DB_PASS'] );

/** Database hostname */
define( 'DB_HOST', $_ENV['DB_HOST'] );

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
define( 'AUTH_KEY',         'tP-`pE[FtYg)@8oB&7flQ<E-Yd*Yd[B5-m..&,(y5]k(>$~E_[p6EDk0Z%nu8UL ' );
define( 'SECURE_AUTH_KEY',  '|l:@u2/0GL&f/G%^jT%x=LO:V`L0(v_nXj;6{^@Q=utHFLs|>CX;z5poj}BS$Puh' );
define( 'LOGGED_IN_KEY',    'B;kh!.|Uc,bP)G1^/wXc$nLWQW?$tslt_j}Z!#F>#.;PV@PP.J^{79B8IOUT?2Gp' );
define( 'NONCE_KEY',        '#W?7^nXu]gYR^AaTC-EFBKP@K]*Wc?aC-XZ,4qC;%B5g_88dJ<1-vc,S5;!K*E$x' );
define( 'AUTH_SALT',        'gDIP$^vSp >1[D0L.I@%aF;).WwgSl<qqsq6>azfqboUUENV~4KDC<#$1)`Mvnp*' );
define( 'SECURE_AUTH_SALT', '>c_y7N:Tn+?S%mP1stSf5Qr$8Jj&60x>NK.($jB%71Ilsexl>~}D3v%ph2P5Vckg' );
define( 'LOGGED_IN_SALT',   ',*H|!wRi[U?YPdw(c44jxM[|2/l5Sgx#UIAC_P>|y!VP`tLbs2=Ar{v@iP`m-n(7' );
define( 'NONCE_SALT',       '>W%)z,7-d)++;tH^xKpi}HD+|$RfR:=h96K8>!UbI3=uhIP72]ShQ~&0!YBkSE(u' );


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
$table_prefix = $_ENV['DB_PREFIX'];


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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
