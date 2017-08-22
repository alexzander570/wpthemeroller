<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package indreams
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if (has_post_thumbnail()) : ?>
		<div class="post-image">
			<a class="entry-image" href="<?php echo esc_url( get_permalink() ) ?>"><?php the_post_thumbnail(); ?></a>
		</div>		
	<?php endif; ?>
	<header class="entry-header">
		<?php indreams_blog_header(); #indreams_posted_on();  ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'indreams' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'indreams' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php indreams_entry_footer(); ?>
		<div class="clearfix"></div>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
