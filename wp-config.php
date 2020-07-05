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
define( 'DB_NAME', 'hari' );

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
define( 'AUTH_KEY',         'wy)X$}T@FB/rH01fn5GGvq)rB}$Phlj%-Dodo89CVMX8@A8Q64//~0l_e7Y#=N-I' );
define( 'SECURE_AUTH_KEY',  'JF2a{{wq[w_z9E>e&=!R$e5q3ylkQ|6S((vXS78;+6fG`o5P-Ul^2NZFvzEyF mz' );
define( 'LOGGED_IN_KEY',    '.Buc*zzib1&bx%jYTF16E;Y,sPseh~uj0k~2aVBFJ=bLrPI(@:rT*>-2~f3+u34X' );
define( 'NONCE_KEY',        '!shPkudS$$BiBF<z#c!AoG?7oLH?U@=aT$1rx7^Y13HtJinVF.l#2)b#7[(e 675' );
define( 'AUTH_SALT',        '{8jbv4hHA@FUKU8u#Q.t(mTFN(jru+6JoC+S.L5z@qkx{r>>tAt|7H`|gfX8_-hV' );
define( 'SECURE_AUTH_SALT', 'e}@vf@IaK+FP=q5^,f(l[!d<./Rg^<7_7WTqM$@ (twD6<VcG}DBu^Nm3k`,HfJE' );
define( 'LOGGED_IN_SALT',   'KBV%l4y#@QlY9R(lB uqluZ=.(zQq=xuMvzzgrc?PaUqYDH-v~nXhjcONaI{<51{' );
define( 'NONCE_SALT',       'B8oDNJ5%Te8o$MlW)Z#m.Aw0S3kX]T>}EY8^WO+NNB`nxMJcTapJ=[20v~OIte|^' );

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
set_time_limit(300);
