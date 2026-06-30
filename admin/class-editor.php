<?php // phpcs:ignore Class file names should be based on the class name with "class-" prepended.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * File for Block Editor.
 *
 * @package    Babita_Business_Theme
 * @subpackage Babita_Business_Theme/includes
 */
class Babita_Business_Theme_Editor {

    private function __construct() {}

    public static function get_instance() {
        static $instance = null;
        if ( null === $instance ) {
            $instance = new self();
        }
        return $instance;
    }

    public function run() {
        add_action( 'after_setup_theme', array( $this, 'add_editor_style' ) );
        add_action( 'enqueue_block_editor_assets', array( $this, 'enqueue_resources' ) );
    }

    public function add_editor_style() {
        add_editor_style( array( 'atomic', BABITA_BUSINESS_THEME_URL . 'build/admin/editor/editor.css' ) );
    }

    public function enqueue_resources() {

        $unique_id = BABITA_BUSINESS_THEME_NAME . '-editor';

        $deps_file  = BABITA_BUSINESS_THEME_PATH . 'build/admin/editor/editor.asset.php';
        $dependency = array();
        $version    = BABITA_BUSINESS_THEME_VERSION;

        if ( file_exists( $deps_file ) ) {
            $deps_file  = require $deps_file;
            $dependency = $deps_file['dependencies'];
            $version    = $deps_file['version'];
        }

        wp_enqueue_script( $unique_id, BABITA_BUSINESS_THEME_URL . 'build/admin/editor/editor.js', $dependency, $version, true );

        $localize = apply_filters(
            'babita_business_theme_editor_localize',
            array(
                'version'  => $version,
                'nonce'    => wp_create_nonce( 'wp_rest' ),
                'rest_url' => get_rest_url(),
            )
        );

        wp_set_script_translations( $unique_id, BABITA_BUSINESS_THEME_NAME );
        wp_localize_script( $unique_id, 'BabitaBusinessThemeLocalize', $localize );
    }
}

function babita_business_theme_editor() { //phpcs:ignore
    return Babita_Business_Theme_Editor::get_instance();
}
babita_business_theme_editor()->run();