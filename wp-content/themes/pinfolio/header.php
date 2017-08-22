<?php
/**
 * The Header for our theme
 *
 * @package WordPress
 * @subpackage Pinfolio
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

	<div class="content-overlay"></div>

	<!-- #Header Section Starts -->
	<header id="header">
		<!-- #logo -->
		<div id="logo">
			<?php 
			$custom_logo_id  = get_theme_mod( 'custom_logo' );
			$custom_logo_src = wp_get_attachment_image_src( $custom_logo_id , 'full' );

			if($custom_logo_src[0]){ ?>
				<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>" ><img class="logo custom-logo" src="<?php echo esc_url($custom_logo_src[0]); ?>" alt="<?php bloginfo('name'); ?>" /></a>
			<?php } else{ ?>
			<!-- #description -->
			<div id="site-title" class="site-title">
				<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name') ?>" ><?php bloginfo('name'); ?></a> 
				<div id="site-description" class="site-description"><?php bloginfo( 'description' ); ?></div>
			</div>
			<!-- #description -->
			<?php } ?>
		</div>
		<!-- #logo -->
		
		<!-- #main-navigation-->
		<?php 
			if( function_exists( 'has_nav_menu' ) && has_nav_menu( 'Header' ) ) {
				wp_nav_menu(array( 'container_class' => 'main-navigation', 'container_id' => 'main-navigation', 'menu_id' => 'main-nav','theme_location' => 'Header' )); 
			} else {
			?>
			<nav id="main-navigation" class="main-navigation">
				<ul id="main-nav" class="menu">
					<?php wp_list_pages('title_li=&depth=0'); ?>
				</ul>
			</nav>
			<?php 
			} 
		?>
		<!-- #main-navigation --> 
		
		<!-- #follow-icons --> 
		<?php 
			$fbicon     = get_theme_mod('fbicon');
			$twicon     = get_theme_mod('twicon');
			$gpicon     = get_theme_mod('gpicon');
			$dribicon   = get_theme_mod('dribicon');
			$linkdicon  = get_theme_mod('linkdicon');
			$piniticon  = get_theme_mod('piniticon');
			$flickricon = get_theme_mod('flickricon');
			$instaicon  = get_theme_mod('instaicon');
			$yticon     = get_theme_mod('yticon');
		?>
		<ul id="follow-icons" class="clearfix">
			<?php if(isset($fbicon) && $fbicon !=""){ ?><li><a class="icon-item" target="_blank" href="<?php echo esc_url($fbicon); ?>"><i class="fa fa-facebook"></i></a></li><?php } ?>
			<?php if(isset($twicon) && $twicon !=""){ ?><li><a class="icon-item" target="_blank" href="<?php echo esc_url($twicon); ?>"><i class="fa fa-twitter"></i></a></li><?php } ?>
			<?php if(isset($gpicon) && $gpicon !=""){ ?><li><a class="icon-item" target="_blank" href="<?php echo esc_url($gpicon); ?>"><i class="fa fa-google-plus"></i></a></li><?php } ?>
			<?php if(isset($dribicon) && $dribicon !=""){ ?><li><a class="icon-item" target="_blank" href="<?php echo esc_url($dribicon); ?>"><i class="fa fa-dribbble"></i></a></li><?php } ?>
			<?php if(isset($linkdicon) && $linkdicon !=""){ ?><li><a class="icon-item" target="_blank" href="<?php echo esc_url($linkdicon); ?>"><i class="fa fa-linkedin"></i></a></li><?php } ?>
			<?php if(isset($piniticon) && $piniticon !=""){ ?><li><a class="icon-item" target="_blank" href="<?php echo esc_url($piniticon); ?>"><i class="fa fa-pinterest"></i></a></li><?php } ?>
			<?php if(isset($flickricon) && $flickricon !=""){ ?><li><a class="icon-item" target="_blank" href="<?php echo esc_url($flickricon); ?>"><i class="fa fa-flickr"></i></a></li><?php } ?>
			<?php if(isset($instaicon) && $instaicon !=""){ ?><li><a class="icon-item" target="_blank" href="<?php echo esc_url($instaicon); ?>"><i class="fa fa-instagram"></i></a></li><?php } ?>
			<?php if(isset($yticon) && $yticon !=""){ ?><li><a class="icon-item" target="_blank" href="<?php echo esc_url($yticon); ?>"><i class="fa fa-youtube"></i></a></li><?php } ?>
		</ul>
		<!-- #follow-icons --> 	

		<!-- #Contact us block -->
		<?php
			$default_contact = sprintf( __( 'Contact Us', 'pinfolio' ));
			$contact_title   = get_theme_mod('contact_title', $default_contact);
			$contact_adds    = get_theme_mod('contact_adds');
		?>
		<div id="contact-block">
			<div class="contact-adds">
				<?php if(!empty($contact_title)){ ?><div class="ctitle"><?php echo esc_attr($contact_title); ?></div><?php } ?>				
				<?php if(!empty($contact_adds)){ ?><div class="cadds"><?php echo esc_attr($contact_adds); ?></div><?php } ?>		
			</div>
			<div class="copyright_txt"><?php _e('Pinfolio by','pinfolio'); ?><a href="<?php echo esc_url( __( 'http://desirepress.com', 'pinfolio' ) ); ?>" target="_blank">&nbsp;&nbsp;<b><?php _e('DesirePress','pinfolio'); ?></b></a></div>
		</div>
		<!-- #Contact us block -->
		
	</header>
	<!-- #Header Section Ends -->
	
	<a href="#" id="header-trigger" class="fa fa-bars"></a>