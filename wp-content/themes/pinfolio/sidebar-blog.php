<?php
/**
 * The Blog Sidebar
 *
 * @package WordPress
 * @subpackage Pinfolio
 */

if ( ! is_active_sidebar( 'blog-sidebar' ) ) {
	return;
}
?>
<div id="sidebar" class="span4 widget-area" role="complementary">
	<?php dynamic_sidebar( 'blog-sidebar' ); ?>
</div><!-- #sidebar -->