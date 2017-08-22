<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package Faith
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function faith_jetpack_setup() {

    /*
     * JetPack Infinite Scroll
     */
    add_theme_support( 'infinite-scroll', array(
        'container' => 'recent-posts',
        'type' => 'click',
		'wrapper' => false,
		'render' => 'faith_infinite_scroll_render',
        'footer' => false,
    ) );

	add_theme_support( 'site-logo', array( 'size' => 'full' ) );

} // end function faith_jetpack_setup
add_action( 'after_setup_theme', 'faith_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function faith_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content' );
	}
} // end function faith_infinite_scroll_render

function faith_jetpack_infinite_scroll_js_settings( $settings ) {
	$settings['text'] = __( 'Load more posts', 'faith' );
	return $settings;
}
add_filter( 'infinite_scroll_js_settings', 'faith_jetpack_infinite_scroll_js_settings' );

/**
 * Disable Infinite Scroll for the Menu CPT
 * @return bool
 */
function faith_infinite_scroll_supported() {
	return current_theme_supports( 'infinite-scroll' ) && ! is_tax( 'nova_menu' );
}
add_filter( 'infinite_scroll_archive_supported', 'faith_infinite_scroll_supported' );
