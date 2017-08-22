<?php 
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Pinfolio
 */

get_header();
?>	
<section id="container">
	<div class="container page-wrap">
		<div class="row-fluid">
			<div class="page-inner-wrap clearfix">
			
				<div id="content">
					<h1 class="entry-title"><?php _e('Oops! That page can&rsquo;t be found.', 'pinfolio'); ?></h1>
					<p><?php _e('It looks like nothing was found at this location. Maybe try a search?', 'pinfolio'); ?></p>
					<span class="span7 last-ele">
						<?php get_search_form(); ?>
					</span>
				</div><!-- #content -->

			</div><!-- .page-inner-wrap .clearfix -->
		</div><!-- .row-fluid -->
	</div><!-- .container -->
</section><!-- #container -->
<?php get_footer(); ?>