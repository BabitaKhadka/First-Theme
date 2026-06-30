<?php
/**
 * Title: Featured Collections
 * Slug: babita-business-theme/featured-collections
 * Categories: featured
 * Description: Featured collections section for La Vie Boutique.
 * Keywords: collections, fashion, boutique
 * Inserter: true
 *
 * @package Babita_Business_Theme
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"quinary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-quinary-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"8px","margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
    <div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--60)">

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"12px","fontWeight":"700","letterSpacing":"4px","textTransform":"uppercase"}},"textColor":"tertiary"} -->
        <p class="has-text-align-center has-tertiary-color has-text-color" style="font-size:12px;font-weight:700;letter-spacing:4px;text-transform:uppercase"><?php esc_html_e( 'Our Collections', 'babita-business-theme' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","level":2,"textColor":"default","style":{"typography":{"fontSize":"40px","fontWeight":"700"}}} -->
        <h2 class="wp-block-heading has-text-align-center has-default-color has-text-color" style="font-size:40px;font-weight:700"><?php esc_html_e( 'Shop by Collection', 'babita-business-theme' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","textColor":"default","style":{"typography":{"fontSize":"16px"}}} -->
        <p class="has-text-align-center has-default-color has-text-color" style="font-size:16px"><?php esc_html_e( 'Discover our carefully curated fashion collections for every occasion.', 'babita-business-theme' ); ?></p>
        <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"30px","top":"30px"}}}} -->
    <div class="wp-block-columns alignwide">

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/collection-1.jpg","dimRatio":30,"overlayColor":"quaternary","minHeight":450,"minHeightUnit":"px","isDark":true,"style":{"border":{"radius":"4px"}}} -->
            <div class="wp-block-cover" style="border-radius:4px;min-height:450px">
            <span aria-hidden="true" class="wp-block-cover__background has-quaternary-background-color has-background-dim-30 has-background-dim"></span>
            <img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/collection-1.jpg" alt="<?php esc_attr_e( 'Dress Collection', 'babita-business-theme' ); ?>" style="object-fit:cover"/>
            <div class="wp-block-cover__inner-container">
                <!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group">
                    <!-- wp:heading {"textAlign":"center","level":3,"textColor":"base","style":{"typography":{"fontSize":"28px","fontWeight":"700"}}} -->
                    <h3 class="wp-block-heading has-text-align-center has-base-color has-text-color" style="font-size:28px;font-weight:700"><?php esc_html_e( 'Dress Collection', 'babita-business-theme' ); ?></h3>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph {"align":"center","textColor":"secondary","style":{"typography":{"fontSize":"14px"}}} -->
                    <p class="has-text-align-center has-secondary-color has-text-color" style="font-size:14px"><?php esc_html_e( 'Elegant dresses for every occasion', 'babita-business-theme' ); ?></p>
                    <!-- /wp:paragraph -->
                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons">
                        <!-- wp:button {"backgroundColor":"accent","textColor":"base","style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"24px","right":"24px"}},"typography":{"fontSize":"12px","letterSpacing":"2px","textTransform":"uppercase"}}} -->
                        <div class="wp-block-button"><a class="wp-block-button__link has-base-color has-accent-background-color has-text-color has-background wp-element-button" href="/shop" style="border-radius:0px;padding-top:10px;padding-right:24px;padding-bottom:10px;padding-left:24px;font-size:12px;letter-spacing:2px;text-transform:uppercase"><?php esc_html_e( 'Shop Now', 'babita-business-theme' ); ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/collection-2.jpg","dimRatio":30,"overlayColor":"quaternary","minHeight":450,"minHeightUnit":"px","isDark":true,"style":{"border":{"radius":"4px"}}} -->
            <div class="wp-block-cover" style="border-radius:4px;min-height:450px">
            <span aria-hidden="true" class="wp-block-cover__background has-quaternary-background-color has-background-dim-30 has-background-dim"></span>
            <img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/collection-2.jpg" alt="<?php esc_attr_e( 'Accessories', 'babita-business-theme' ); ?>" style="object-fit:cover"/>
            <div class="wp-block-cover__inner-container">
                <!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group">
                    <!-- wp:heading {"textAlign":"center","level":3,"textColor":"base","style":{"typography":{"fontSize":"28px","fontWeight":"700"}}} -->
                    <h3 class="wp-block-heading has-text-align-center has-base-color has-text-color" style="font-size:28px;font-weight:700"><?php esc_html_e( 'Accessories', 'babita-business-theme' ); ?></h3>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph {"align":"center","textColor":"secondary","style":{"typography":{"fontSize":"14px"}}} -->
                    <p class="has-text-align-center has-secondary-color has-text-color" style="font-size:14px"><?php esc_html_e( 'Handbags, jewellery and more', 'babita-business-theme' ); ?></p>
                    <!-- /wp:paragraph -->
                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons">
                        <!-- wp:button {"backgroundColor":"accent","textColor":"base","style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"24px","right":"24px"}},"typography":{"fontSize":"12px","letterSpacing":"2px","textTransform":"uppercase"}}} -->
                        <div class="wp-block-button"><a class="wp-block-button__link has-base-color has-accent-background-color has-text-color has-background wp-element-button" href="/shop" style="border-radius:0px;padding-top:10px;padding-right:24px;padding-bottom:10px;padding-left:24px;font-size:12px;letter-spacing:2px;text-transform:uppercase"><?php esc_html_e( 'Shop Now', 'babita-business-theme' ); ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/collection-3.jpg","dimRatio":30,"overlayColor":"quaternary","minHeight":450,"minHeightUnit":"px","isDark":true,"style":{"border":{"radius":"4px"}}} -->
            <div class="wp-block-cover" style="border-radius:4px;min-height:450px">
            <span aria-hidden="true" class="wp-block-cover__background has-quaternary-background-color has-background-dim-30 has-background-dim"></span>
            <img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/collection-3.jpg" alt="<?php esc_attr_e( 'Footwear', 'babita-business-theme' ); ?>" style="object-fit:cover"/>
            <div class="wp-block-cover__inner-container">
                <!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group">
                    <!-- wp:heading {"textAlign":"center","level":3,"textColor":"base","style":{"typography":{"fontSize":"28px","fontWeight":"700"}}} -->
                    <h3 class="wp-block-heading has-text-align-center has-base-color has-text-color" style="font-size:28px;font-weight:700"><?php esc_html_e( 'Footwear', 'babita-business-theme' ); ?></h3>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph {"align":"center","textColor":"secondary","style":{"typography":{"fontSize":"14px"}}} -->
                    <p class="has-text-align-center has-secondary-color has-text-color" style="font-size:14px"><?php esc_html_e( 'Elegant shoes for every step', 'babita-business-theme' ); ?></p>
                    <!-- /wp:paragraph -->
                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons">
                        <!-- wp:button {"backgroundColor":"accent","textColor":"base","style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"24px","right":"24px"}},"typography":{"fontSize":"12px","letterSpacing":"2px","textTransform":"uppercase"}}} -->
                        <div class="wp-block-button"><a class="wp-block-button__link has-base-color has-accent-background-color has-text-color has-background wp-element-button" href="/shop" style="border-radius:0px;padding-top:10px;padding-right:24px;padding-bottom:10px;padding-left:24px;font-size:12px;letter-spacing:2px;text-transform:uppercase"><?php esc_html_e( 'Shop Now', 'babita-business-theme' ); ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->