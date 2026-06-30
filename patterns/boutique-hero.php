<?php
/**
 * Title: Boutique Hero
 * Slug: babita-business-theme/boutique-hero
 * Categories: featured
 * Description: Hero section for La Vie Boutique.
 * Keywords: hero, boutique, fashion, banner
 * Inserter: true
 *
 * @package Babita_Business_Theme
 */
?>
<!-- wp:cover {"dimRatio":60,"overlayColor":"quaternary","minHeight":90,"minHeightUnit":"vh","isDark":true,"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="min-height:90vh">
<span aria-hidden="true" class="wp-block-cover__background has-quaternary-background-color has-background-dim-60 has-background-dim"></span>
<div class="wp-block-cover__inner-container">

    <!-- wp:spacer {"height":"60px"} -->
    <div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"13px","fontWeight":"600","letterSpacing":"4px","textTransform":"uppercase"}},"textColor":"tertiary"} -->
    <p class="has-text-align-center has-tertiary-color has-text-color" style="font-size:13px;font-weight:600;letter-spacing:4px;text-transform:uppercase"><?php esc_html_e( 'New Collection 2026', 'babita-business-theme' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textAlign":"center","textColor":"base","level":1,"style":{"typography":{"fontSize":"64px","fontWeight":"700","lineHeight":"1.1"}}} -->
    <h1 class="wp-block-heading has-text-align-center has-base-color has-text-color" style="font-size:64px;font-weight:700;line-height:1.1"><?php esc_html_e( 'Welcome to La Vie Boutique', 'babita-business-theme' ); ?></h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","textColor":"secondary","style":{"typography":{"fontSize":"18px"},"layout":{"wideSize":"600px"}}} -->
    <p class="has-text-align-center has-secondary-color has-text-color" style="font-size:18px"><?php esc_html_e( 'Elegant fashion crafted for every moment. Discover our curated collections for the modern woman.', 'babita-business-theme' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:spacer {"height":"20px"} -->
    <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons">

        <!-- wp:button {"backgroundColor":"accent","textColor":"base","style":{"spacing":{"padding":{"top":"16px","bottom":"16px","left":"40px","right":"40px"}},"typography":{"fontSize":"14px","fontWeight":"600","letterSpacing":"2px","textTransform":"uppercase"},"border":{"radius":"0px"}}} -->
        <div class="wp-block-button">
            <a class="wp-block-button__link has-base-color has-accent-background-color has-text-color has-background wp-element-button" href="/shop" style="border-radius:0px;padding-top:16px;padding-right:40px;padding-bottom:16px;padding-left:40px;font-size:14px;font-weight:600;letter-spacing:2px;text-transform:uppercase"><?php esc_html_e( 'Shop Collection', 'babita-business-theme' ); ?></a>
        </div>
        <!-- /wp:button -->

        <!-- wp:button {"className":"is-style-outline","textColor":"base","style":{"spacing":{"padding":{"top":"16px","bottom":"16px","left":"40px","right":"40px"}},"typography":{"fontSize":"14px","fontWeight":"600","letterSpacing":"2px","textTransform":"uppercase"},"border":{"radius":"0px","color":"var:preset|color|base","width":"1px"}}} -->
        <div class="wp-block-button is-style-outline">
            <a class="wp-block-button__link has-base-color has-text-color wp-element-button" href="/about" style="border-radius:0px;padding-top:16px;padding-right:40px;padding-bottom:16px;padding-left:40px;font-size:14px;font-weight:600;letter-spacing:2px;text-transform:uppercase"><?php esc_html_e( 'Our Story', 'babita-business-theme' ); ?></a>
        </div>
        <!-- /wp:button -->

    </div>
    <!-- /wp:buttons -->

    <!-- wp:spacer {"height":"60px"} -->
    <div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

</div>
</div>
<!-- /wp:cover -->
