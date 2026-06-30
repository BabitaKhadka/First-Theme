<?php // phpcs:ignore Class file names should be based on the class name with "class-" prepended.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Class used to manage block bindings for the theme.
 *
 * @package    Babita_Business_Theme
 * @subpackage Babita_Business_Theme/includes
 */
if ( ! class_exists( 'Babita_Business_Theme_Block_Bindings' ) ) {

    class Babita_Business_Theme_Block_Bindings {

        public function run() {
            add_action( 'init', array( $this, 'register_block_bindings' ) );
        }

        public function register_block_bindings() {
            if ( ! function_exists( 'register_block_bindings_source' ) ) {
                return;
            }

            register_block_bindings_source(
                'babita-business-theme/copyright',
                array(
                    'label'              => _x( '&copy; YEAR', 'Label for the copyright placeholder in the editor', 'babita-business-theme' ),
                    'get_value_callback' => array( $this, 'get_binding_data' ),
                )
            );

            register_block_bindings_source(
                'babita-business-theme/archive-title',
                array(
                    'label'              => _x( 'Archive title', 'Label for the archive title placeholder in the editor', 'babita-business-theme' ),
                    'get_value_callback' => array( $this, 'get_binding_data' ),
                )
            );
        }

        public function get_binding_data( array $source_args, $block_instance ) {
            if ( empty( $source_args['key'] ) ) {
                return null;
            }

            $binding_data = null;

            if ( 'copyright' === $source_args['key'] ) {
                $date_format  = _x( 'Y', 'copyright date format', 'babita-business-theme' );
                $binding_data = sprintf(
                    __( '%1$s %2$s %3$s', 'babita-business-theme' ),
                    '&copy;',
                    wp_date( $date_format ),
                    get_bloginfo( 'name' )
                );
            } elseif ( 'archive-title' === $source_args['key'] ) {
                if ( is_archive() ) {
                    $binding_data = get_the_archive_title();
                } elseif ( is_search() ) {
                    $binding_data = sprintf(
                        __( 'Search results for: "%s"', 'babita-business-theme' ),
                        get_search_query()
                    );
                } elseif ( is_home() ) {
                    $binding_data = __( 'Blog', 'babita-business-theme' );
                }
            }

            return apply_filters( 'babita_business_theme_binding_get_binding_data', $binding_data, $source_args, $block_instance );
        }

        public static function get_instance() {
            static $instance = null;
            if ( null === $instance ) {
                $instance = new self();
            }
            return $instance;
        }
    }
}

function babita_business_theme_block_bindings() { //phpcs:ignore
    return Babita_Business_Theme_Block_Bindings::get_instance();
}
babita_business_theme_block_bindings()->run();