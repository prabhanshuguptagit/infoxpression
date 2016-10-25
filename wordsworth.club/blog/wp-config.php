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
define('DB_NAME', 'i2731176_wp2');

/** MySQL database username */
define('DB_USER', 'i2731176_wp2');

/** MySQL database password */
define('DB_PASSWORD', 'W#UecT]cvRZ&gbCpX2&34[#0');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ReZM1eqqVPGtO5kAlGhVooY1tjrLvr2GoBrR57B55G8b0zK2Ip443Na1RsIx3qDR');
define('SECURE_AUTH_KEY',  'cdwk6W3toZztqt8oEE4n8tnGHl6g6yssyqwrHHbhEUNApjBIfinQrp6iwVGhNqrZ');
define('LOGGED_IN_KEY',    '22dtOwk8Nf3bTpAoGWkIjmVqJICun727Tp8MONmm2wT1Ris0ZtKXXRurrDyQtiqP');
define('NONCE_KEY',        '4yUMg1VRZMGxSF26EcGfgVKFxmyoSCmGYX0qLGYsVlWz3oOKiy4rtEava5N0MqtL');
define('AUTH_SALT',        'mGM8RvMW6mKgJJSuMmorGinPJopiuuNQtfZpFEHBtUn1JvHPyCGlPewaJh83YMfm');
define('SECURE_AUTH_SALT', 'WO768EWxFbli30VHE1mKao1JgiJl2YW74l6vmPUtBPv38qmylBRuGhAKmoVQU3Vf');
define('LOGGED_IN_SALT',   'NZoTTyZeDEqlVrd79r8wLAffdWFrG3TikE6u0vDxGBXY8cLj1wZwHg2FCdZRgH9z');
define('NONCE_SALT',       'pAW4WFkzPhMrdePBZ0B8FDsfSGOwI33kWNf0XJ11Z1MVFAf9RsBFAZx6qB7hdBZF');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
