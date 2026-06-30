<?php // phpcs:ignore Class file names should be based on the class name with "class-" prepended.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * The file that defines the core theme class
 *
 * @link       https://www.acmeit.org/
 * @since      1.0.0
 *
 * @package    Babita_Business_Theme
 * @subpackage Babita_Business_Theme/includes
 */

/**
 * The core theme class.
 *
 * @since      1.0.0
 * @package    Babita_Business_Theme
 * @subpackage Babita_Business_Theme/includes
 * @author     Babita
 */
class Babita_Business_Theme {

    /**
     * Define the core functionality of the theme.
     *
     * @since    1.0.0
     */
    public function __construct() {
        $this->load_dependencies();
    }

    /**
     * Load the required dependencies for this theme.
     *
     * @since    1.0.0
     * @access   private
     */
    private function load_dependencies() {

        /** Theme Core Functions */
        require_once BABITA_BUSINESS_THEME_PATH . 'includes/functions.php';

        /** The class responsible for defining all actions that occur in both admin and public area. */
        require_once BABITA_BUSINESS_THEME_PATH . 'includes/class-include.php';

        /** The class responsible for block bindings. */
        require_once BABITA_BUSINESS_THEME_PATH . 'includes/class-block-bindings.php';

        /** API */
        require_once BABITA_BUSINESS_THEME_PATH . 'includes/api/index.php';

        /** The class responsible for defining all actions that occur in the admin area. */
        require_once BABITA_BUSINESS_THEME_PATH . 'admin/index.php';

        /** The class responsible for defining all actions that occur in the public-facing side of the site. */
        require_once BABITA_BUSINESS_THEME_PATH . 'public/index.php';
    }
}