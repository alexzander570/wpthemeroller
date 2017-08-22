<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Pinfolio
 */
get_header(); ?>

<section id="container">
	<div class="container page-wrap">
		<div class="row-fluid">
			<div class="page-inner-wrap clearfix">
			
				<div id="content" class="span8">
				
					<h1 class="entry-title"><?php printf( __( 'Search Results for : %s', 'pinfolio' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				
					<div class="post-wrap">
						<?php 
							if(have_posts()) :						
							while(have_posts()) : the_post();							
							get_template_part( 'template-parts/content', get_post_format() );
							endwhile; 

							// Previous/next page navigation.
							the_posts_pagination( array(
								'prev_text'          => __( 'Previous page', 'pinfolio' ),
								'next_text'          => __( 'Next page', 'pinfolio' ),
								'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'pinfolio' ) . ' </span>',
							));	
						?> 
						<?php else :  ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
						<?php endif; ?>
					</div>
					
				</div><!-- #content -->
			
				<?php get_sidebar( 'blog' ); ?>
				
			</div><!-- .clearfix -->
		</div><!-- row-fluid -->
	</div><!-- .container -->
</section><!-- #container -->

<?php get_footer(); ?>