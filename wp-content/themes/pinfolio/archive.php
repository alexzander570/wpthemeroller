<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Pinfolio already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
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
				
					<?php
						the_archive_title( '<h1 class="entry-title">', '</h1>' );
					?>

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