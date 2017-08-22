<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package indreams
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'indreams' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="menu-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav id="site-navigation" class="main-navigation text-center" role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</nav><!-- #site-navigation -->
						<nav id="mobile-navigation" class="text-center" role="navigation">
						<div id="mobile-menu-trigger">
	    					<span></span>
	    					<span></span>
	    					<span></span>
	    				</div>
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'mobile-menu' ) ); ?>
						</nav><!-- #site-navigation -->
					</div>
				</div>
			</div>
		</div>

		<div class="site-branding-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="site-branding text-center">
							<?php indreams_the_custom_logo(); ?>
							<h1 class="site-title">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<?php bloginfo( 'name' ); ?>
								</a>
							</h1>
						<?php
							$description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
						<?php endif; ?>
						</div><!-- .site-branding -->
					</div>
				</div>
			</div>
		</div>

	</header><!-- #masthead -->

	<div class="container">    
        <div class="row">
            <p id="back-top">
                <a href="#top"><span class="glyphicon glyphicon-menu-up"></span></a>
            </p>
        </div>
    </div>

	<div id="content" class="site-content">
