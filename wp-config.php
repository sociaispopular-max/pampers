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
define( 'DB_NAME', 'i10061889_w6dm1' );

/** Database username */
define( 'DB_USER', 'i10061889_w6dm1' );

/** Database password */
define( 'DB_PASSWORD', 'U.55fG3YAXfgg5m4R6h91' );

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
define('AUTH_KEY',         'v2HmaCMjbbCSjZqsDaZAdWDcQdiORCLFa8jjPMJPxAXzsA6VPBtTSFmwTYevyg0n');
define('SECURE_AUTH_KEY',  'FHTHp4DCIKIlqXgNSkiXlERiQrXNWySAqcc0ZSG8Q0pSwRQZpsmBNrx5Ss8YCX1F');
define('LOGGED_IN_KEY',    'CB1cTlv2tMojWRu7uMYH0F3AeC52NSWlg9V4nHHn9PnyEt2p4EgVVuP8GLvSosnN');
define('NONCE_KEY',        'ecIZRBoCVp0LWFnA7pbTqEt2NWfTOaFMjiSW3xH0DegdSeX3MfKZizloJ6BFSAbp');
define('AUTH_SALT',        'QGZSj8xdC6ckjRsMKx6jWmjUz3bHCF9mIgLqD7YZ6ndgkmwJuTlbMS1nQjl8kQ2k');
define('SECURE_AUTH_SALT', 'hrfS9kEAJRAJwfQ44pYqN5n5jA55PyuHZeUODlCw2509GmmDT7crGMT7cCNk08rU');
define('LOGGED_IN_SALT',   'OffWAOl2d5JkYaRqWWEV1Ku9rJpPVtStazJkmbrR2k29FWUKbFYgyzk7s9joXOGk');
define('NONCE_SALT',       'BtcNQJo2NLJdgQqxHZTtHnwGlR77j80qpW6ATXigwab7lIZuqtvCzwO9drBWaZss');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


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
$table_prefix = 'is3v_';

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
