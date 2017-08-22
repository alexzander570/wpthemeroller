<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Pinfolio
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Page thumbnail and title.
		pinfolio_post_thumbnail();
		the_title( '<h1 class="entry-title">', '</h1>' );
	?>

	<div class="entry-content">
		<?php
			the_content();
			
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'pinfolio' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'pinfolio' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );

			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'pinfolio' ),
					get_the_title()
				),
				'<footer class="entry-footer"><span class="edit-link">',
				'</span></footer><!-- .entry-footer -->'
			);
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->