<?php 
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
get_header(); ?>

<section id="container">
	<div class="container page-wrap">
		<div class="row-fluid">
			<div class="page-inner-wrap clearfix">
			
				<div id="content" class="span8">
				
					<h1 class="entry-title"><?php _e('WelCome to : ','pinfolio'); ?><span><?php bloginfo('name'); ?></span></h1>
				
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