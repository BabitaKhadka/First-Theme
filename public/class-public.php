<?php // phpcs:ignore Class file names should be based on the class name with "class-" prepended.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * The public-facing functionality of the theme.
 *
 * @package    Babita_Business_Theme
 * @subpackage Babita_Business_Theme/public
 */
class Babita_Business_Theme_Public {

    public static function get_instance() {
        static $instance = null;
        if ( null === $instance ) {
            $instance = new self();
        }
        return $instance;
    }

    public function run() {
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_resources' ) );
    }

    public function enqueue_resources() {
        wp_enqueue_style( 'atomic' );
        wp_style_add_data( 'atomic', 'rtl', 'replace' );

        $version = BABITA_BUSINESS_THEME_VERSION;

        wp_enqueue_style( BABITA_BUSINESS_THEME_NAME, BABITA_BUSINESS_THEME_URL . 'build/public/public.css', array(), $version );
        wp_style_add_data( BABITA_BUSINESS_THEME_NAME, 'rtl', 'replace' );

        $deps_file  = BABITA_BUSINESS_THEME_PATH . 'build/public/public.asset.php';
        $dependency = array();

        if ( file_exists( $deps_file ) ) {
            $deps_file  = require $deps_file;
            $dependency = $deps_file['dependencies'];
            $version    = $deps_file['version'];
        }

        wp_enqueue_script( BABITA_BUSINESS_THEME_NAME, BABITA_BUSINESS_THEME_URL . 'build/public/public.js', $dependency, $version, true );
        wp_set_script_translations( BABITA_BUSINESS_THEME_NAME, BABITA_BUSINESS_THEME_NAME );

        $localize = apply_filters(
            'babita_business_theme_public_localize',
            array(
                'BABITA_BUSINESS_THEME_URL' => BABITA_BUSINESS_THEME_URL,
                'home_url'                  => esc_url( home_url() ),
                'rest_url'                  => get_rest_url(),
                'nonce'                     => wp_create_nonce( 'wp_rest' ),
            )
        );

        wp_add_inline_script(
            BABITA_BUSINESS_THEME_NAME,
            sprintf(
                "var BabitaBusinessThemeLocalize = JSON.parse( decodeURIComponent( '%s' ) );",
                rawurlencode(
                    wp_json_encode( $localize )
                ),
            ),
            'before'
        );
    }
}

function babita_business_theme_public() { //phpcs:ignore
    return Babita_Business_Theme_Public::get_instance();
}
babita_business_theme_public()->run();