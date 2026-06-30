<?php
/**
 * Title: Primary Sidebar
 * Slug: wp-block-theme-boilerplate/primary-sidebar
 * Categories: posts
 * Block Types: core/template-part/primary-sidebar
 * Description: Display a collection of blocks for primary sidebar template part.
 *
 * @package    Babita_Business_Theme
 * @subpackage Babita_Business_Theme/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:pattern {"slug":"wp-block-theme-boilerplate/search-form"} /-->
    <!-- wp:pattern {"slug":"wp-block-theme-boilerplate/latest-posts"} /-->
    <!-- wp:pattern {"slug":"wp-block-theme-boilerplate/latest-comments"} /-->
</div>
<!-- /wp:group -->
