<?php 
/* 
Template Name: Full Width Page
*/ 
get_header(); 
?>
<section id="container">
	<div class="container page-wrap">
		<div class="row-fluid">
			<div class="page-inner-wrap clearfix">
			
				<div id="content">
					<?php
						// Start the Loop.
						while ( have_posts() ) : the_post();

							// Include the page content template.
							get_template_part( 'template-parts/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) {
								comments_template();
							}
						endwhile;
					?>
				</div><!-- #content -->

			</div><!-- .page-inner-wrap .clearfix -->
		</div><!-- .row-fluid -->
	</div><!-- .container -->
</section><!-- #container -->

<?php get_footer(); ?>