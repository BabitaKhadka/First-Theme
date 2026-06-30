<?php
/**
 * Title: Primary Header
 * Slug: babita-business-theme/hidden-primary-header
 * Inserter: no
 *
 * @package    Babita_Business_Theme
 * @subpackage Babita_Business_Theme/patterns
 * @since      1.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">

    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">

        <!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
        <div class="wp-block-group alignwide">

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group">
                <!-- wp:pattern {"slug":"babita-business-theme/site-identity"} /-->
                <!-- wp:pattern {"slug":"babita-business-theme/navigation-menu"} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"backgroundColor":"primary","textColor":"base"} -->
                <div class="wp-block-button">
                    <a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--30)">
                        <?php esc_html_e( 'Shop Now', 'babita-business-theme' ); ?>
                    </a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->