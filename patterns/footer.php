<?php
/**
 * Title: Footer
 * Slug: babita-business-theme/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: A pattern for displaying the site footer for La Vie Boutique.
 *
 * @package    Babita_Business_Theme
 * @subpackage Babita_Business_Theme/patterns
 * @since      1.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px"}},"backgroundColor":"quaternary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-quaternary-background-color has-background">

  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"80px"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
  <div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

    <!-- wp:column {"width":"40%"} -->
    <div class="wp-block-column" style="flex-basis:40%">

      <!-- wp:heading {"level":3,"textColor":"base","style":{"typography":{"fontSize":"24px","fontWeight":"600"}}} -->
      <h3 class="wp-block-heading has-base-color has-text-color" style="font-size:24px;font-weight:600"><?php esc_html_e( 'La Vie Boutique', 'babita-business-theme' ); ?></h3>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"textColor":"secondary","style":{"typography":{"fontSize":"14px"}}} -->
      <p class="has-secondary-color has-text-color" style="font-size:14px"><?php esc_html_e( 'Elegant fashion crafted for every moment. Discover our curated collections for the modern woman.', 'babita-business-theme' ); ?></p>
      <!-- /wp:paragraph -->

    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"20%"} -->
    <div class="wp-block-column" style="flex-basis:20%">

      <!-- wp:heading {"level":6,"textColor":"tertiary","style":{"typography":{"fontSize":"14px","fontWeight":"700","letterSpacing":"2px","textTransform":"uppercase"}}} -->
      <h6 class="wp-block-heading has-tertiary-color has-text-color"><?php esc_html_e( 'Quick Links', 'babita-business-theme' ); ?></h6>
      <!-- /wp:heading -->

      <!-- wp:navigation {"textColor":"secondary","overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"12px"},"typography":{"fontSize":"13px"}}} -->
        <!-- wp:navigation-link {"label":"Home","url":"/"} /-->
        <!-- wp:navigation-link {"label":"About","url":"/about"} /-->
        <!-- wp:navigation-link {"label":"Shop","url":"/shop"} /-->
        <!-- wp:navigation-link {"label":"Blog","url":"/blog"} /-->
        <!-- wp:navigation-link {"label":"Contact","url":"/contact"} /-->
      <!-- /wp:navigation -->

    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"20%"} -->
    <div class="wp-block-column" style="flex-basis:20%">

      <!-- wp:heading {"level":6,"textColor":"tertiary","style":{"typography":{"fontSize":"14px","fontWeight":"700","letterSpacing":"2px","textTransform":"uppercase"}}} -->
      <h6 class="wp-block-heading has-tertiary-color has-text-color"><?php esc_html_e( 'Contact Us', 'babita-business-theme' ); ?></h6>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"textColor":"secondary","style":{"typography":{"fontSize":"13px"}}} -->
      <p class="has-secondary-color has-text-color" style="font-size:13px">
        <a href="mailto:hello@lavie.com" style="color:inherit">hello@lavie.com</a>
      </p>
      <!-- /wp:paragraph -->

      <!-- wp:paragraph {"textColor":"secondary","style":{"typography":{"fontSize":"13px"}}} -->
      <p class="has-secondary-color has-text-color" style="font-size:13px">
        <a href="tel:+9779800000000" style="color:inherit">+977 980-000-0000</a>
      </p>
      <!-- /wp:paragraph -->

    </div>
    <!-- /wp:column -->

  </div>
  <!-- /wp:columns -->

  <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|primary","style":"solid","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
  <div class="wp-block-group alignwide" style="border-top:1px solid var(--wp--preset--color--primary);padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">

    <!-- wp:paragraph {"textColor":"secondary","style":{"typography":{"fontSize":"12px"}}} -->
    <p class="has-secondary-color has-text-color" style="font-size:12px"><?php esc_html_e( '© 2026 La Vie Boutique. All rights reserved.', 'babita-business-theme' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:navigation {"textColor":"secondary","overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|20"},"typography":{"fontSize":"12px"}}} -->
      <!-- wp:navigation-link {"label":"Privacy Policy","url":"/privacy"} /-->
      <!-- wp:navigation-link {"label":"Terms & Conditions","url":"/terms"} /-->
    <!-- /wp:navigation -->

  </div>
  <!-- /wp:group -->

<!-- wp:pattern {"slug":"babita-business-theme/scroll-to-top-button"} /-->

</div>
<!-- /wp:group -->