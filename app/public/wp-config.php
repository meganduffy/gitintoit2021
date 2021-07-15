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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

broke

/** MySQL database password */
define( 'DB_PASSWORD', 'root' )

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'c7/cvVNTWwaacSAy8gChDnxGkpJO2+jomyLvr74dJsLHFSkZ7s6IScvWAXp0o7M7JVUjxZ/ht4D2ATPehJ/okw==');
define('SECURE_AUTH_KEY',  '9a4EWQLqpx7jk7/pnSrEcvbg2M1PWkXzIt4MsR/UX/abTImi92q4e0/GxEZr5tL4+eqsmpZ0DF8+dHz9JT2ppw==');
define('LOGGED_IN_KEY',    'DYJvhqpjn+9JSjU7407A48K15diqWU9KFTSVn7hcQpzbNlxVRspkk9O42i2zXjRO141ORqwwIjQitnRTZ2I1Lw==');
define('NONCE_KEY',        'EZNRxYGPRYfoKBqCi1Wq2U3ZLXYe6MSkc8P8fxGKDf2Kw2eGaRI1VesxJmvnGgXSm43N3e2EYroa8eNxeNZ7BQ==');
define('AUTH_SALT',        'fSKJjMzLt+pgA2vSWnQC5S33SA/lC6dW//tJQNwZtpwhMjHQN4tMbmMRb/nweNorE8SIHupK5nRBv7i9bBHArg==');
define('SECURE_AUTH_SALT', '1NPVP5Zme2ntwCi4A4eVKo+cKNqt2qGL/qwkb1uTP+0K/1hEYZBRlFDORV+pYvAGkwcgWV9uwj+6KKY61JPwvA==');
define('LOGGED_IN_SALT',   '9lFxcrvJEQh3BBipIJY75ewtuZRyAMXDlr8rQQqPGAPmPUcoKngvcrWBnL5e7ZBi2eS8WandvnV5rwnFQIhIRA==');
define('NONCE_SALT',       '+TXbsgXRwPVY8jJ/J7LBywwlvc9vDZeisxG6vED4sw47b5M0Ssk1SdZ/3kKlzXwVQzGIhL3mlRBEOv7/B4Qp9Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. 
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
