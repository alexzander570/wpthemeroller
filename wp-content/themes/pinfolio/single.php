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
					<?php 
						if(have_posts()) : 
						while(have_posts()) : the_post();
					?>
						
					<div <?php post_class('post'); ?> id="post-<?php the_ID(); ?>">

						<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
							<div class="post-thumbnail">
								<?php the_post_thumbnail( 'full' ); ?>
							</div>
						<?php } ?>

						<h1 class="post-title"><?php the_title(); ?></h1>

						<div class="post-meta clearfix">
							<span class="author-name"><i class="fa fa-user">&nbsp;</i><?php the_author_posts_link(); ?> </span>
							<?php if (has_category()) { ?><span class="category"><i class="fa fa-folder">&nbsp;</i><?php the_category(','); ?></span><?php } ?>
							<?php the_tags('<span class="tags"><i class="fa fa-tag"></i> ',',','</span>'); ?>
							<span class="date"><i class="fa fa-clock-o">&nbsp;</i><?php the_time( get_option( 'date_format' ) ); ?></span>
							<span class="comments"><i class="fa fa-comments">&nbsp;</i><?php comments_popup_link(__('No Comments ','pinfolio'), __('1 Comment ','pinfolio'), __('% Comments ','pinfolio')) ; ?></span>
						</div>

						<div class="post-content clearfix">
							<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'pinfolio' ) ); ?>
							<?php
								wp_link_pages( array(
									'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'pinfolio' ) . '</span>',
									'after'       => '</div>',
									'link_before' => '<span>',
									'link_after'  => '</span>',
									'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'pinfolio' ) . ' </span>%',
									'separator'   => '<span class="screen-reader-text">, </span>',
								) );
							?> 
						</div>
					</div>
					
					<?php
						edit_post_link(
							sprintf(
								/* translators: %s: Name of current post */
								__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'pinfolio' ),
								get_the_title()
							),
							'<span class="edit-link">',
							'</span>'
						);
					?>

					<?php
					// Previous/next post navigation.
					the_post_navigation( array(
						'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'pinfolio' ) . '</span> ' .
							'<span class="screen-reader-text">' . __( 'Next post:', 'pinfolio' ) . '</span> ' .
							'<span class="post-title">%title</span>',
						'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'pinfolio' ) . '</span> ' .
							'<span class="screen-reader-text">' . __( 'Previous post:', 'pinfolio' ) . '</span> ' .
							'<span class="post-title">%title</span>',
					) );
					?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}						
					?> 
					<?php endwhile; else :  ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
					<?php endif; ?>
				</div><!-- #content -->
			
				<?php get_sidebar( 'blog' ); ?>
				
			</div><!-- .clearfix -->
		</div><!-- row-fluid -->
	</div><!-- .container -->
</section><!-- #container -->

<?php get_footer(); ?>