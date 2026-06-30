<?php
/**
 * Title: Archives
 * Slug: wp-block-theme-boilerplate/archives
 * Categories: posts
 * Description: Display a date-based archive of posts, commonly placed in sidebars, footers, or site maps.
 *
 * @package    Babita_Business_Theme
 * @subpackage Babita_Business_Theme/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading"><?php esc_html_e( 'Archives', 'wp-block-theme-boilerplate' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:archives {"showPostCounts":true} /-->

</div>
<!-- /wp:group -->
