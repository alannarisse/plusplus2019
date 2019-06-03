<?php
/**
 * This config file is yours to hack on. It will work out of the box on Pantheon
 * but you may find there are a lot of neat tricks to be used here.
 *
 * See our documentation for more details:
 *
 * https://pantheon.io/docs
 */

/**
 * Local configuration information.
 *
 * If you are working in a local/desktop development environment and want to
 * keep your config separate, we recommend using a 'wp-config-local.php' file,
 * which you should also make sure you .gitignore.
 */
if (file_exists(dirname(__FILE__) . '/wp-config-local.php') && !isset($_ENV['PANTHEON_ENVIRONMENT'])):
  # IMPORTANT: ensure your local config does not include wp-settings.php
  require_once(dirname(__FILE__) . '/wp-config-local.php');

/**
 * Pantheon platform settings. Everything you need should already be set.
 */
else:
  if (isset($_ENV['PANTHEON_ENVIRONMENT'])):
    // ** MySQL settings - included in the Pantheon Environment ** //
    /** The name of the database for WordPress */
    define('DB_NAME', $_ENV['DB_NAME']);

    /** MySQL database username */
    define('DB_USER', $_ENV['DB_USER']);

    /** MySQL database password */
    define('DB_PASSWORD', $_ENV['DB_PASSWORD']);

    /** MySQL hostname; on Pantheon this includes a specific port number. */
    define('DB_HOST', $_ENV['DB_HOST'] . ':' . $_ENV['DB_PORT']);

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
     * Pantheon sets these values for you also. If you want to shuffle them you
     * must contact support: https://pantheon.io/docs/getting-support 
     *
     * @since 2.6.0
     */
    define('AUTH_KEY',         $_ENV['AUTH_KEY']);
    define('SECURE_AUTH_KEY',  $_ENV['SECURE_AUTH_KEY']);
    define('LOGGED_IN_KEY',    $_ENV['LOGGED_IN_KEY']);
    define('NONCE_KEY',        $_ENV['NONCE_KEY']);
    define('AUTH_SALT',        $_ENV['AUTH_SALT']);
    define('SECURE_AUTH_SALT', $_ENV['SECURE_AUTH_SALT']);
    define('LOGGED_IN_SALT',   $_ENV['LOGGED_IN_SALT']);
    define('NONCE_SALT',       $_ENV['NONCE_SALT']);
    /**#@-*/

    /** A couple extra tweaks to help things run well on Pantheon. **/
    if (isset($_SERVER['HTTP_HOST'])) {
        // HTTP is still the default scheme for now. 
        $scheme = 'http';
        // If we have detected that the end use is HTTPS, make sure we pass that
        // through here, so <img> tags and the like don't generate mixed-mode
        // content warnings.
        if (isset($_SERVER['HTTP_USER_AGENT_HTTPS']) && $_SERVER['HTTP_USER_AGENT_HTTPS'] == 'ON') {
            $scheme = 'https';
            $_SERVER['HTTPS'] = 'on';
        }
        define('WP_HOME', $scheme . '://' . $_SERVER['HTTP_HOST']);
        define('WP_SITEURL', $scheme . '://' . $_SERVER['HTTP_HOST']);
    }
    // Don't show deprecations; useful under PHP 5.5
    error_reporting(E_ALL ^ E_DEPRECATED);
    /** Define appropriate location for default tmp directory on Pantheon */
    define('WP_TEMP_DIR', $_SERVER['HOME'] .'/tmp');

    // FS writes aren't permitted in test or live, so we should let WordPress know to disable relevant UI
    if ( in_array( $_ENV['PANTHEON_ENVIRONMENT'], array( 'test', 'live' ) ) && ! defined( 'DISALLOW_FILE_MODS' ) ) :
        define( 'DISALLOW_FILE_MODS', true );
    endif;

  else:
    /**
     * This block will be executed if you have NO wp-config-local.php and you
     * are NOT running on Pantheon. Insert alternate config here if necessary.
     *
     * If you are only running on Pantheon, you can ignore this block.
     */
    define('DB_NAME',          'plusplus');
    define('DB_USER',          'plusplus');
    define('DB_PASSWORD',      'plusplus');
    define('DB_HOST',          '127.0.0.1');
    define('DB_CHARSET',       'utf8');
    define('DB_COLLATE',       '');
    define( 'WP_HOME', 'http://plusplus.com.test' );
    define( 'WP_SITEURL', 'http://plusplus.com.test' );
    define('AUTH_KEY',         'sb2|;5-TW kY.W&w#o4@nEIcknZvR-LZo64}{of6(M3Q0M3QHh%#X*ly @.q*vC0');
define('SECURE_AUTH_KEY',  '7O:kN. 9U#!=dJd]`y`#?1B);Z2H{t]RW3z@2Y>s*WJ?A5uo)iQY`YeMRpwd,y@X');
define('LOGGED_IN_KEY',    'lfYIoD#1Si>QW4:cfMez^mnFi+_a~!L.#,x3;tGlR56TiDJu.&-h^0b;G6eBQJSV');
define('NONCE_KEY',        'u-s-qX}2zX.Z(7,JKaSwFg 3i_NIj3Z7/ogV)aUj,<@&;K^+$^ph^@j=NgSChKI ');
define('AUTH_SALT',        '.X2Gz6Oi/#[dnY:ew54YvYm(LzZt{<UL$XV-HC=OIfl`XArX|A?>@;jY3`D`qS-b');
define('SECURE_AUTH_SALT', '2I-JM@+==>*W^bmaQ+T-h-dRfVufM2*Q*{p,l~<:Ope;M>]gtjc:]-+-8}>>1=.k');
define('LOGGED_IN_SALT',   'j`[NC/bj4L6ihGxo5R C(K  -2zX/HqrTL48VF3T|/A|O(:wi,D(aV`e{9BY<>X`');
define('NONCE_SALT',       '3Z]vdf}>.d;lkO/M]+/2,qh o8i8x_;qRvrZ5Fv}d)j+rc% iyL+SV8Gn(L}Iw!{');
  endif;
endif;

/** Standard wp-config.php stuff from here on down. **/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * You may want to examine $_ENV['PANTHEON_ENVIRONMENT'] to set this to be
 * "true" in dev, but false in test and live.
 */
if ( ! defined( 'WP_DEBUG' ) ) {
    define('WP_DEBUG', false);
}

if (isset($_ENV['PANTHEON_ENVIRONMENT']) && php_sapi_name() != 'cli') {
  // Redirect to https://$primary_domain in the Live environment
  if ($_ENV['PANTHEON_ENVIRONMENT'] === 'live') {
    // Replace www.example.com with your registered domain name.
    $primary_domain = 'plusplus.co';
  }
  else {
    // Redirect to HTTPS on every Pantheon environment.
    $primary_domain = $_SERVER['HTTP_HOST'];
  }

  if ($_SERVER['HTTP_HOST'] != $primary_domain
      || !isset($_SERVER['HTTP_USER_AGENT_HTTPS'])
      || $_SERVER['HTTP_USER_AGENT_HTTPS'] != 'ON' ) {

    // Name transaction "redirect" in New Relic for improved reporting (optional).
    if (extension_loaded('newrelic')) {
      newrelic_name_transaction("redirect");
    }

    header('HTTP/1.0 301 Moved Permanently');
    header('Location: https://'. $primary_domain . $_SERVER['REQUEST_URI']);
    exit();
  }
}
/* That's all, stop editing! Happy Pressing. */




/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
