<?php // phpcs:ignore Class file names should be based on the class name with "class-" prepended.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * The common bothend functionality of the theme.
 *
 * @package    Babita_Business_Theme
 * @subpackage Babita_Business_Theme/includes
 */
class Babita_Business_Theme_Include {

    private function __construct() {}

    public static function get_instance() {
        static $instance = null;
        if ( null === $instance ) {
            $instance = new self();
        }
        return $instance;
    }

    public function run() {
        add_action( 'init', array( $this, 'register_block_pattern_category' ) );
        add_action( 'init', array( $this, 'register_scripts_and_styles' ) );
        add_action( 'after_setup_theme', array( $this, 'setup_theme' ) );
    }

    public function register_block_pattern_category() {
        register_block_pattern_category(
            'page',
            array(
                'label'       => _x( 'Pages', 'Block pattern category', 'babita-business-theme' ),
                'description' => __( 'A collection of full page layouts.', 'babita-business-theme' ),
            )
        );
    }

    public function register_scripts_and_styles() {
        wp_register_style( 'atomic', BABITA_BUSINESS_THEME_URL . 'assets/library/atomic-css/atomic.min.css', array(), BABITA_BUSINESS_THEME_VERSION );
    }

    public function setup_theme() {
        load_theme_textdomain( 'babita-business-theme', BABITA_BUSINESS_THEME_PATH . 'languages' );
    }

    public function get_settings( $key = '' ) {
        static $cache = null;
        if ( ! $cache ) {
            $cache = babita_business_theme_get_options();
        }
        if ( ! empty( $key ) ) {
            return isset( $cache[ $key ] ) ? $cache[ $key ] : false;
        }
        return $cache;
    }

    public function get_user_meta( $user_id, $key = '' ) {
        static $cache = array();
        if ( ! isset( $cache[ $user_id ] ) ) {
            $options           = babita_business_theme_get_user_meta( $user_id );
            $cache[ $user_id ] = $options;
        }
        if ( ! empty( $key ) ) {
            return isset( $cache[ $user_id ][ $key ] ) ? $cache[ $user_id ][ $key ] : false;
        }
        return $cache[ $user_id ];
    }
}

if ( ! function_exists( 'babita_business_theme_include' ) ) {
    function babita_business_theme_include() { //phpcs:ignore
        return Babita_Business_Theme_Include::get_instance();
    }
    babita_business_theme_include()->run();
}