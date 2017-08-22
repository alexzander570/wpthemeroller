<?php
/**
 * indreams functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package indreams
 */

if ( ! function_exists( 'indreams_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function indreams_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on indreams, use a find and replace
	 * to change 'indreams' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'indreams', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	/*
	 * This function id used for Logo upload.
	 */
	add_theme_support( 'custom-logo' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'indreams' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );


}
endif;
add_action( 'after_setup_theme', 'indreams_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function indreams_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'indreams_content_width', 640 );
}
add_action( 'after_setup_theme', 'indreams_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function indreams_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'indreams' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'indreams' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );


	// First Footer Widget
	register_sidebar( array(
		'name'          => esc_html__( 'First Footer Widget', 'indreams' ),
		'id'            => 'first-footer-widget',
		'description'   => esc_html__( 'Add widgets here.', 'indreams' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );

	// Second Footer Widget
	register_sidebar( array(
		'name'          => esc_html__( 'Second Footer Widget', 'indreams' ),
		'id'            => 'second-footer-widget',
		'description'   => esc_html__( 'Add widgets here.', 'indreams' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );

	// Third Footer Widget
	register_sidebar( array(
		'name'          => esc_html__( 'Third Footer Widget', 'indreams' ),
		'id'            => 'third-footer-widget',
		'description'   => esc_html__( 'Add widgets here.', 'indreams' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );

	// Fourth Footer Widget
	register_sidebar( array(
		'name'          => esc_html__( 'Fourth Footer Widget', 'indreams' ),
		'id'            => 'fourth-footer-widget',
		'description'   => esc_html__( 'Add widgets here.', 'indreams' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );

}
add_action( 'widgets_init', 'indreams_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function indreams_scripts() {

	wp_enqueue_style( 'indreams-font-Montserrat', '//fonts.googleapis.com/css?family=Montserrat:400,700' );
	wp_enqueue_style( 'indreams-font-Merriweather', '//fonts.googleapis.com/css?family=Merriweather:400,700' ); 
	wp_enqueue_style( 'indreams-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'indreams-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css' );
	wp_enqueue_style( 'indreams-style', get_stylesheet_uri() );

	wp_enqueue_script( 'indreams-carousel-script', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20151225', true );
	wp_enqueue_script( 'indreams-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'indreams-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'indreams-script', get_template_directory_uri() . '/js/script.js', array(), '20151214', true );
}
add_action( 'wp_enqueue_scripts', 'indreams_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


function indreams_editor_styles() {
    add_editor_style( array(get_template_directory_uri() . "/style.css", get_template_directory_uri() . "/css/editor-style.css", str_replace( ',', '%2C', 'https://fonts.googleapis.com/css?family=Merriweather:400,700,400italic|Montserrat:400,700' ) ) );
}
add_action( 'admin_init', 'indreams_editor_styles' );


function custom_theme_color(){ 
	$custom_theme_color = esc_attr( get_theme_mod('custom_theme_color') );
?>
	<style type="text/css">
		blockquote, input.search-submit, .slider-rm-btn, .slider-wrapper .owl-dots span, article.page .entry-header .entry-title, .form-submit .submit, input[type="submit"]{
		    border-color: <?php echo $custom_theme_color; ?>;
		}

		input.search-submit, .main-navigation ul ul a:hover, .main-navigation ul ul a.focus, .slider-rm-btn, .slider-rm-btn:hover, .slider-wrapper .owl-dot.active span, .services-column .services-icon, .services-column .services-title-sep, .separator, #back-top a, td#today, .form-submit .submit, input[type="submit"] {
		    background-color: <?php echo $custom_theme_color; ?>;
		}

		a, a:hover, a:focus, a:active, .nav-links a:hover .post-title, .theme-color, ul#mobile-menu li a:hover, .services-column .services-title a:hover, .blog-column-title a:hover, table#wp-calendar td a, .entry-header .entry-title a:hover, .entry-meta ul li a:hover, .nav-links .current, .comment-reply-link:hover, .comment-reply-link:focus {
			color: <?php echo $custom_theme_color; ?>;
		}

		#primary-menu > li:hover > a{
			color: <?php echo $custom_theme_color; ?> !important;
		}

		.caption-text .single-dash, .section-heading .single-dash {
		    background-image: -webkit-linear-gradient(left, transparent, <?php echo $custom_theme_color; ?>, transparent);
		    background-image: -moz-linear-gradient(left, transparent, <?php echo $custom_theme_color; ?>, transparent);
		    background-image: -ms-linear-gradient(left, transparent, <?php echo $custom_theme_color; ?>, transparent);
		    background-image: -o-linear-gradient(left, transparent, <?php echo $custom_theme_color; ?>, transparent);
		}
	</style>
<?php
}
add_action('wp_head', 'custom_theme_color');

function custom_style(){
    $custom_style = esc_attr( get_theme_mod('custom_style') );
    echo '<style type="text/css">'.$custom_style.'</style>';
}
add_action('wp_head', 'custom_style');