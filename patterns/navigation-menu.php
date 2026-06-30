<?php
/**
 * Title: Navigation Menu
 * Slug: babita-business-theme/navigation-menu
 * Description: A pattern for displaying the site navigation for La Vie Boutique.
 *
 * @package    Babita_Business_Theme
 * @subpackage Babita_Business_Theme/patterns
 * @since      1.0.0
 */
?>
<!-- wp:navigation {"textColor":"default","overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"},"typography":{"fontSize":"14px","fontWeight":"500","letterSpacing":"1px","textTransform":"uppercase"}}} -->
    <!-- wp:home-link {"label":"<?php echo esc_html_x( 'Home', 'label', 'babita-business-theme' ); ?>"} /-->
    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'babita-business-theme' ); ?>","url":"/about"} /-->
    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Shop', 'babita-business-theme' ); ?>","url":"/shop"} /-->
    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'babita-business-theme' ); ?>","url":"/blog"} /-->
    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact', 'babita-business-theme' ); ?>","url":"/contact"} /-->
<!-- /wp:navigation -->