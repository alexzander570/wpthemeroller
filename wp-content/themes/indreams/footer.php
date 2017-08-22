<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package indreams
 */

?>

	</div><!-- #content -->

	<?php

		$footer_widget_style = esc_attr( get_theme_mod('footer_widget_style', '3') );
        $footer_credits      = get_theme_mod('footer_credits');

	?>

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div id="" class="footer-wrapper">
			<div class="container">
			<?php if (is_active_sidebar('first-footer-widget') || is_active_sidebar('second-footer-widget') || is_active_sidebar('third-footer-widget') || is_active_sidebar('fourth-footer-widget') ) { ?>
				<div class="row footer-widget-wrapper">
		            <?php if($footer_widget_style=='4'){ ?>
		                <div class="col-md-3 first">
		            <?php }elseif($footer_widget_style=='3'){ ?>
		                <div class="col-md-4 first">
		            <?php }elseif($footer_widget_style=='2'){ ?>
		                <div class="col-md-6 first">
		            <?php }elseif($footer_widget_style=='1'){ ?>
		                <div class="col-md-12 first">
		            <?php } ?>
		                    <div class="footer-widget-column">
		                      	<?php if (is_active_sidebar('first-footer-widget')) : ?>
		                            <?php dynamic_sidebar('first-footer-widget'); ?>
		                        <?php endif; ?>
		                    </div>    
		                </div>
		                    
		            <?php if($footer_widget_style=='4'){ ?>
		                <div class="col-md-3 second">
		            <?php }elseif($footer_widget_style=='3'){ ?>
		                <div class="col-md-4 second">
		            <?php }elseif($footer_widget_style=='2'){ ?>
		                <div class="col-md-6 second">
		            <?php } ?>
		            <?php if($footer_widget_style=='4' || $footer_widget_style=='3' || $footer_widget_style=='2' ){ ?>
		                    <div class="footer-widget-column">
		                       <?php if (is_active_sidebar('second-footer-widget')) : ?>
		                            <?php dynamic_sidebar('second-footer-widget'); ?>
		                     <?php endif; ?>
		                    </div>
		                </div>
		             <?php } ?>
		                    
		            <?php if($footer_widget_style=='4'){ ?>
		                <div class="col-md-3 third">
		            <?php }elseif($footer_widget_style=='3'){ ?>
		                <div class="col-md-4 third">
		            <?php } ?>
		            <?php if($footer_widget_style=='4' || $footer_widget_style=='3' ){ ?>
		                    <div class="footer-widget-column">
	                        <?php if (is_active_sidebar('third-footer-widget')) : ?>
	                            <?php dynamic_sidebar('third-footer-widget'); ?>
		                     <?php endif; ?>
		                    </div>
		                </div>
		             <?php } ?>
		                    
		            <?php if($footer_widget_style=='4'){ ?>
		                <div class="col-md-3 fourth">
		                    <div class="footer-widget-column">
	                        <?php if (is_active_sidebar('fourth-footer-widget')) : ?>
	                            <?php dynamic_sidebar('fourth-footer-widget'); ?>
		                     <?php endif; ?>
		                    </div>
		                </div>
		            <?php } ?>
		        </div>
		    <?php } ?>

		        <div class="row">
		        	<div class="col-md-12">
						<div class="site-info text-center">
						<?php if(isset($footer_credits) && $footer_credits!=''){ ?>
							<?php echo $footer_credits; ?>
						<?php }else{ ?>
							<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'indreams' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'indreams' ), 'WordPress' ); ?></a>
							<span class="sep"> | </span>
							<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'indreams' ), 'indreams', '<a href="http://gleedthemes.com/" rel="designer">GleedThemes.com</a>' ); ?>
						<?php } ?>
						</div><!-- .site-info -->
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
