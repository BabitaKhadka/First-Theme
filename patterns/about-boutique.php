<?php
/**
 * Title: About Boutique
 * Slug: babita-business-theme/about-boutique
 * Categories: featured
 * Description: About section for La Vie Boutique.
 * Keywords: about, story, boutique
 * Inserter: true
 *
 * @package Babita_Business_Theme
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"80px"}}},"verticalAlignment":"center"} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center">

        <!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis:50%">
            <!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"4px"}}} -->
            <figure class="wp-block-image size-full" style="border-radius:4px">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/about-boutique.jpg" alt="<?php esc_attr_e( 'About La Vie Boutique', 'babita-business-theme' ); ?>" style="border-radius:4px"/>
            </figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"24px"}}} -->
        <div class="wp-block-column" style="flex-basis:50%">

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontWeight":"700","letterSpacing":"4px","textTransform":"uppercase"}},"textColor":"tertiary"} -->
            <p class="has-tertiary-color has-text-color" style="font-size:12px;font-weight:700;letter-spacing:4px;text-transform:uppercase"><?php esc_html_e( 'Our Story', 'babita-business-theme' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":2,"textColor":"default","style":{"typography":{"fontSize":"40px","fontWeight":"700","lineHeight":"1.2"}}} -->
            <h2 class="wp-block-heading has-default-color has-text-color" style="font-size:40px;font-weight:700;line-height:1.2"><?php esc_html_e( 'Fashion That Tells Your Story', 'babita-business-theme' ); ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"default","style":{"typography":{"fontSize":"16px","lineHeight":"1.8"}}} -->
            <p class="has-default-color has-text-color" style="font-size:16px;line-height:1.8"><?php esc_html_e( 'La Vie Boutique was born from a passion for elegant, timeless fashion. We believe every woman deserves to feel confident and beautiful in what she wears.', 'babita-business-theme' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"textColor":"default","style":{"typography":{"fontSize":"16px","lineHeight":"1.8"}}} -->
            <p class="has-default-color has-text-color" style="font-size:16px;line-height:1.8"><?php esc_html_e( 'Our collections are carefully curated from the finest designers, bringing you pieces that blend contemporary style with classic elegance.', 'babita-business-theme' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button {"backgroundColor":"primary","textColor":"base","style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"36px","right":"36px"}},"typography":{"fontSize":"13px","fontWeight":"600","letterSpacing":"2px","textTransform":"uppercase"}}} -->
                <div class="wp-block-button"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" href="/about" style="border-radius:0px;padding-top:14px;padding-right:36px;padding-bottom:14px;padding-left:36px;font-size:13px;font-weight:600;letter-spacing:2px;text-transform:uppercase"><?php esc_html_e( 'Read Our Story', 'babita-business-theme' ); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->