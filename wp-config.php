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
define('DB_NAME', 'my_wordpress');

/** MySQL database username */
define('DB_USER', 'sagar');

/** MySQL database password */
define('DB_PASSWORD', 'Sunday1234');

/** MySQL hostname */
define('DB_HOST', 'wordpress.c2pgkenspckg.ap-south-1.rds.amazonaws.com');

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
define('AUTH_KEY',         'yW8Y>{hA|zry%cPg2@i,O!lBu?@ Sue-Kx29G@Y%E}5MZx+_>t.@6xwg=mJcb2<3');
define('SECURE_AUTH_KEY',  '-ycE+YZ%wf9fjSO^w e&,d-FB6{U~|bA@(Y%Sfx-bf?21]wS2*]F`ewN?oY$]TE8');
define('LOGGED_IN_KEY',    '*OE`wLQl!ts=[xU/TAH:IB3|]k&/csDIuG.8G?EoL(uZe.&3>6<@nS -!)Ha?v*b');
define('NONCE_KEY',        '2|zJ*BcgbaI3fM[;/XR/w</%`8Q`_M-pI{V5svP {JsfML~t#Sftd]BAYMaqn=lA');
define('AUTH_SALT',        '-A]/fZ9H+tCWU#nVI WWW$;3<^TY{qSJ+.]kpVX&t5cqt.|DNe+O@j$>2B;Aa8ec');
define('SECURE_AUTH_SALT', 'rmN?8 W4(t} *,/H8o|$eHG7f4DeU3OYn^jU2:m4WfA2xtE+J0=MAw`khX+N}aq%');
define('LOGGED_IN_SALT',   'W<2le-g$-dZ1u;y~3zI]{:jKcB7)K#_OxzIclY|mE:y|SwS@38m9!4Hy^~!.gh^~');
define('NONCE_SALT',       'CzZH2M6vdvw,e@rN`nFzIMmd#h}28BJ)k^.IMj`TUji:n-p5Q~?-E S_<OS03@ y');

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
