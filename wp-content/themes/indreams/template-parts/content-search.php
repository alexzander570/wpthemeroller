<?php
/**
 * Template part for displaying results in search pages.
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

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php indreams_entry_footer(); ?>
		<div class="clearfix"></div>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
