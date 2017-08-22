<?php
/**
 * The Content Sidebar
 *
 * @package WordPress
 * @subpackage Pinfolio
 */

if ( ! is_active_sidebar( 'page-sidebar' ) ) {
	return;
}
?>
<div id="sidebar" class="span4 widget-area" role="complementary">
	<?php dynamic_sidebar( 'page-sidebar' ); ?>
</div><!-- #sidebar -->
