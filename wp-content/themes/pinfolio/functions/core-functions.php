<?php
#-----------------------------------------------------------------#
#---------- PINFOLIO : CORE FUNCTIONS AND DEFINITIONS ------------#
#-----------------------------------------------------------------#

#-----------------------------------------------------------------#
# EXCERPT RELATED 
#-----------------------------------------------------------------#

//custom excerpt ending
function pinfolio_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'pinfolio_excerpt_more');

#-----------------------------------------------------------------#
# DISPLAY AN OPTIONAL POST THUMBNAIL
#-----------------------------------------------------------------#

function pinfolio_post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}
	if ( is_singular() ) :
	?>
	<div class="post-thumbnail">
	<?php
		the_post_thumbnail('full');
	?>
	</div>

	<?php else : ?>

	<a class="post-thumbnail" href="<?php the_permalink(); ?>">
	<?php
		the_post_thumbnail('full');
	?>
	</a>

	<?php endif; // End is_singular()
}

#-----------------------------------------------------------------#
# THEME CHECK FIX
#-----------------------------------------------------------------#
if ( ! isset( $content_width ) ) $content_width = 900;
