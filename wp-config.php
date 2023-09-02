<?php /* BEGIN KINSTA DEVELOPMENT ENVIRONMENT - DO NOT MODIFY THIS CODE BLOCK */ ?>
<?php if ( !defined('KINSTA_DEV_ENV') ) { define('KINSTA_DEV_ENV', true); /* Kinsta development - don't remove this line */ } ?>
<?php if ( !defined('JETPACK_STAGING_MODE') ) { define('JETPACK_STAGING_MODE', true); /* Kinsta development - don't remove this line */ } ?>
<?php /* END KINSTA DEVELOPMENT ENVIRONMENT - DO NOT MODIFY THIS CODE BLOCK */ ?>
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'christsagalos' );

/** Database username */
define( 'DB_USER', 'christsagalos' );

/** Database password */
define( 'DB_PASSWORD', 'U1LFugNcGhGRQLa' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '~7:Z255Nw=WUKV`KbLn#~ryl`c_1a_GUX+vadaQ&k%<u=32|)1~6Tc6L4qB46Yr:' );
define( 'SECURE_AUTH_KEY',   '*$YNrMGr`$EhXXwcnW9syL1;dRD`/3DzW1}.ty}PCXQU&7)H!.O`+DHv_Z-EJ!`T' );
define( 'LOGGED_IN_KEY',     ';]=FHH*RD}TLVy:^jh@{TFJi*=}|.xQ}t5(7-lf=MY_9[r*D :w;^@|Y&8kM1;@Y' );
define( 'NONCE_KEY',         '0old}y?<-It*%N2+;[?_ B!_e1S(3VgYt3MezrD.YhzSe{6f} VBK>T2!o^szGb|' );
define( 'AUTH_SALT',         '<mM8ME?(+B6tXu~,|$k|B|gDDXcUPlSLgA$cr_gZ)go4+0VWMsvtl8$W]KJ,gx j' );
define( 'SECURE_AUTH_SALT',  'Mq%q_$L;Hn $8xA BP/6qNfDPM!I_;T:-:3,l23fn],7IZ&s_/7B627204s5;Dd!' );
define( 'LOGGED_IN_SALT',    'vfm*:gvR62_+#+&i_GGqCRMg-&H0;&Yt]e58;qt7L7)8pvCL?=ucjUd]dr2y<mqf' );
define( 'NONCE_SALT',        '^>YTxlEOU?+*-ObpGFm${Q{ 4g@G4*]Q0pKcXO(Gg?b$Ll0.`G{_W7u^tY5y6TB.' );
define( 'WP_CACHE_KEY_SALT', 'X.WBMM:Y,7$SvcGHi_:|=j[2I!qF}P+/.y|iL%[Wf/`U[uQfl_R0ue.DRxfc_@}1' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
