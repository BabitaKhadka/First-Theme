<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Babita Business Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Babita_Business_Theme
 */

/**
 * Current theme path.
 * Current theme url.
 * Current theme version.
 * Current theme name.
 * Current theme option name.
 */
define( 'BABITA_BUSINESS_THEME_PATH', trailingslashit( get_template_directory() ) );
define( 'BABITA_BUSINESS_THEME_URL', trailingslashit( get_template_directory_uri() ) );
define( 'BABITA_BUSINESS_THEME_VERSION', '1.0.0' );
define( 'BABITA_BUSINESS_THEME_NAME', 'babita-business-theme' );
define( 'BABITA_BUSINESS_THEME_OPTION_NAME', 'babita-business-theme' );

/**
 * The core theme class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require BABITA_BUSINESS_THEME_PATH . 'includes/main.php';

/**
 * Begins execution of the theme.
 *
 * @since    1.0.0
 */
function babita_business_theme_run() {
    new Babita_Business_Theme();
}
babita_business_theme_run();