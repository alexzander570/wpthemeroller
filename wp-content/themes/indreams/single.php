<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package indreams
 */

get_header(); ?>

<div class="page-post-container-wrapper">
	<div class="container">
		<div class="row">
        	<div class="col-md-8">

				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', get_post_format() );

						// Previous/next post navigation.
						the_post_navigation( array(
							'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'indreams' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Next post:', 'indreams' ) . '</span> ' .
								'<span class="post-title">%title</span>',
							'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'indreams' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Previous post:', 'indreams' ) . '</span> ' .
								'<span class="post-title">%title</span>',
						) );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

					</main><!-- #main -->
				</div><!-- #primary -->

			</div>
			<div class="col-md-4">
				<?php  get_sidebar();  ?>
			</div>
		</div>
	</div>
</div>

<?php  get_footer();