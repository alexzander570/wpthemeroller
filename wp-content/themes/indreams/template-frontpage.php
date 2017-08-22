<?php

/* 
 * Template Name: Front Page
 */

 get_header();

 $first_slide_image    = esc_url(get_theme_mod('first_slide_image'));
 $first_slide_title    = esc_attr(get_theme_mod('first_slide_title'));
 $first_slide_subtitle = esc_attr(get_theme_mod('first_slide_subtitle'));
 $first_slide_btn_text = esc_attr(get_theme_mod('first_slide_btn_text'));
 $first_slide_btn_link = esc_url(get_theme_mod('first_slide_btn_link'));

 $second_slide_image    = esc_url(get_theme_mod('second_slide_image'));
 $second_slide_title    = esc_attr(get_theme_mod('second_slide_title'));
 $second_slide_subtitle = esc_attr(get_theme_mod('second_slide_subtitle'));
 $second_slide_btn_text = esc_attr(get_theme_mod('second_slide_btn_text'));
 $second_slide_btn_link = esc_url(get_theme_mod('second_slide_btn_link'));

 $third_slide_image    = esc_url(get_theme_mod('third_slide_image'));
 $third_slide_title    = esc_attr(get_theme_mod('third_slide_title'));
 $third_slide_subtitle = esc_attr(get_theme_mod('third_slide_subtitle'));
 $third_slide_btn_text = esc_attr(get_theme_mod('third_slide_btn_text'));
 $third_slide_btn_link = esc_url(get_theme_mod('third_slide_btn_link'));

 ?>


<section class="slider-wrapper">
    <div id="slider" class="owl-carousel owl-theme">
    <?php if($first_slide_image!='' || $first_slide_title!='' || $first_slide_subtitle!='' ){ ?>
        <div class="slider-item" style="background-image:url('<?php echo $first_slide_image; ?>');">                       
            <div class="caption-cell">
                <div class="caption-text">
                <?php if(isset($first_slide_title) && $first_slide_title!=''){ ?>
                    <h2 class="slider-title"><?php echo $first_slide_title; ?></h2>
                <?php } ?>

                <?php if(isset($first_slide_subtitle) && $first_slide_subtitle!=''){ ?>
                    <span class="single-dash"></span>
                    <p class="slider-desc"><?php echo $first_slide_subtitle; ?></p>
                <?php } ?>
                
                <?php if( $first_slide_btn_text!='' || $first_slide_btn_link!='' ){ ?>
                    <a href="<?php echo $first_slide_btn_link; ?>" class="slider-rm-btn"><?php echo $first_slide_btn_text; ?></a>
                <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>

    <?php if($second_slide_image!='' || $second_slide_title!='' || $second_slide_subtitle!='' ){ ?>
        <div class="slider-item" style="background-image:url('<?php echo $second_slide_image; ?>');">                       
            <div class="caption-cell">
                <div class="caption-text">
                <?php if(isset($second_slide_title) && $second_slide_title!=''){ ?>
                    <h2 class="slider-title"><?php echo $second_slide_title; ?></h2>
                <?php } ?>

                <?php if(isset($second_slide_subtitle) && $second_slide_subtitle!=''){ ?>
                    <span class="single-dash"></span>
                    <p class="slider-desc"><?php echo $second_slide_subtitle; ?></p>
                <?php } ?>
                
                <?php if( $second_slide_btn_text!='' || $second_slide_btn_link!='' ){ ?>
                    <a href="<?php echo $second_slide_btn_link; ?>" class="slider-rm-btn"><?php echo $second_slide_btn_text; ?></a>
                <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>

    <?php if($third_slide_image!='' || $third_slide_title!='' || $third_slide_subtitle!='' ){ ?>
        <div class="slider-item" style="background-image:url('<?php echo $third_slide_image; ?>');">                       
            <div class="caption-cell">
                <div class="caption-text">
                <?php if(isset($third_slide_title) && $third_slide_title!=''){ ?>
                    <h2 class="slider-title"><?php echo $third_slide_title; ?></h2>
                <?php } ?>

                <?php if(isset($third_slide_subtitle) && $third_slide_subtitle!=''){ ?>
                    <span class="single-dash"></span>
                    <p class="slider-desc"><?php echo $third_slide_subtitle; ?></p>
                <?php } ?>
                
                <?php if( $third_slide_btn_text!='' || $third_slide_btn_link!='' ){ ?>
                    <a href="<?php echo $third_slide_btn_link; ?>" class="slider-rm-btn"><?php echo $third_slide_btn_text; ?></a>
                <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>

    </div>
</section>

<?php

    $about_us_title    = esc_attr(get_theme_mod('about_us_title'));
    $about_us_subtitle = esc_attr(get_theme_mod('about_us_subtitle'));

?>

<?php if( (isset($about_us_title) && $about_us_title!='') || (isset($about_us_subtitle) && $about_us_subtitle!='') ) { ?>
<section class="section about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="section-heading text-center"> 
                <?php if(isset($about_us_title) && $about_us_title!=''){ ?>
                    <h2 class="title "><?php echo $about_us_title; ?></h2>
                <?php } ?>                  
                </div>

                <div class="section-description text-center">
                <?php if(isset($about_us_subtitle) && $about_us_subtitle!=''){ ?>
                    <span class="single-dash "></span>
                    <p class=""><?php echo $about_us_subtitle; ?></p>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>

<?php

    $service_title    = esc_attr(get_theme_mod('service_title'));
    $service_subtitle = esc_attr(get_theme_mod('service_subtitle')); 

    $first_service_icon     = esc_attr(get_theme_mod('first_service_icon'));
    $first_service_title    = esc_attr(get_theme_mod('first_service_title'));
    $first_service_subtitle = esc_attr(get_theme_mod('first_service_subtitle'));
    $first_service_link     = esc_url(get_theme_mod('first_service_link'));

    $second_service_icon     = esc_attr(get_theme_mod('second_service_icon'));
    $second_service_title    = esc_attr(get_theme_mod('second_service_title'));
    $second_service_subtitle = esc_attr(get_theme_mod('second_service_subtitle'));
    $second_service_link     = esc_url(get_theme_mod('second_service_link'));

    $third_service_icon     = esc_attr(get_theme_mod('third_service_icon'));
    $third_service_title    = esc_attr(get_theme_mod('third_service_title'));
    $third_service_subtitle = esc_attr(get_theme_mod('third_service_subtitle'));
    $third_service_link     = esc_url(get_theme_mod('third_service_link'));

?>

<?php if( (isset($service_title) && $service_title!='') || (isset($service_subtitle) && $service_subtitle!='') ) { ?>
<section class="section services">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="section-heading text-center"> 
                <?php if(isset($service_title) && $service_title!=''){ ?>
                    <h2 class="title"><?php echo $service_title; ?></h2>
                <?php } ?>                  
                </div>
                <div class="section-description text-center">
                <?php if(isset($service_subtitle) && $service_subtitle!=''){ ?>
                    <span class="single-dash"></span>
                    <p class=""><?php echo $service_subtitle; ?></p>
                <?php } ?>
                </div>
            </div>
            <div class="services-column-wrapper">
                <div class="col-md-12">
                	<div class="col-md-4">
                		<div class="services-column text-left ">
                			<div class="services-icon">
                            <?php if(isset($first_service_icon) && $first_service_icon!=''){ ?>
                                <a href="<?php echo $first_service_link; ?>">
                                    <span class="fa <?php echo $first_service_icon; ?>"></span>
                                </a>
                            <?php } ?>
                			</div>

                            <?php if(isset($first_service_title) && $first_service_title!=''){ ?>
                                <h6 class="services-title">
                                    <a href="<?php echo $first_service_link; ?>">
                                        <?php echo $first_service_title; ?>
                                    </a>
                                </h6>
                            <?php } ?>

                            <?php if(isset($first_service_subtitle) && $first_service_subtitle!=''){ ?>
                                <span class="services-title-sep"></span>
                                <p class="services-desc"><?php echo $first_service_subtitle; ?></p>
                            <?php } ?>
                			
                		</div>
                	</div>

                	
                    <div class="col-md-4">
                        <div class="services-column text-left ">
                            <div class="services-icon">
                            <?php if(isset($second_service_icon) && $second_service_icon!=''){ ?>
                                <a href="<?php echo $second_service_link; ?>">
                                    <span class="fa <?php echo $second_service_icon; ?>"></span>
                                </a>
                            <?php } ?>
                            </div>

                            <?php if(isset($second_service_title) && $second_service_title!=''){ ?>
                                <h6 class="services-title">
                                    <a href="<?php echo $second_service_link; ?>">
                                        <?php echo $second_service_title; ?>
                                    </a>
                                </h6>
                            <?php } ?>

                            <?php if(isset($second_service_subtitle) && $second_service_subtitle!=''){ ?>
                                <span class="services-title-sep"></span>
                                <p class="services-desc"><?php echo $second_service_subtitle; ?></p>
                            <?php } ?>
                            
                        </div>
                    </div>

                	
                    <div class="col-md-4">
                        <div class="services-column text-left ">
                            <div class="services-icon">
                            <?php if(isset($third_service_icon) && $third_service_icon!=''){ ?>
                                <a href="<?php echo $third_service_link; ?>">
                                    <span class="fa <?php echo $third_service_icon; ?>"></span>
                                </a>
                            <?php } ?>
                            </div>

                            <?php if(isset($third_service_title) && $third_service_title!=''){ ?>
                                <h6 class="services-title">
                                    <a href="<?php echo $third_service_link; ?>">
                                        <?php echo $third_service_title; ?>
                                    </a>
                                </h6>
                            <?php } ?>

                            <?php if(isset($third_service_subtitle) && $third_service_subtitle!=''){ ?>
                                <span class="services-title-sep"></span>
                                <p class="services-desc"><?php echo $third_service_subtitle; ?></p>
                            <?php } ?>
                            
                        </div>
                    </div>
            	</div>
            </div>
        </div>
    </div>
</section>
<?php } ?>


<?php

    $blog_title    = esc_attr(get_theme_mod('blog_title'));
    $blog_subtitle = esc_attr(get_theme_mod('blog_subtitle'));

?>

<?php if( (isset($blog_title) && $blog_title!='') || (isset($blog_subtitle) && $blog_subtitle!='') ) { ?>
<section class="section blog-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="section-heading text-center"> 
                <?php if(isset($blog_title) && $blog_title!=''){ ?>
                    <h2 class="title"><?php echo $blog_title; ?></h2>
                <?php } ?>                 
                </div>
                <div class="section-description text-center">
                <?php if(isset($blog_subtitle) && $blog_subtitle!=''){ ?>
                    <span class="single-dash"></span> 
                    <p><?php echo $blog_subtitle; ?></p>
                <?php } ?>
                </div>
            </div>
            <div class="col-md-12">
                <div class="blog-outer">
                <?php 
                    $args = array('showposts' => get_option('posts_per_page'));
                    $the_query = new WP_Query( $args ); 
                    if ( $the_query->have_posts() ) : 
                    while ( $the_query->have_posts() ) : $the_query->the_post(); 
                ?>

                    <div class="col-md-4 col-sm-4">
                        <div id="blog-<?php the_ID(); ?>" class="blog-column ">
                        	<div class="blog-column-image">
                        		<?php echo the_post_thumbnail(); ?>
                        	</div>
                            <div class="blog-column-content">
                                <h6 class="blog-column-title">
                                    <a href="<?php the_permalink() ?>">
                                    	<?php the_title(); ?>
                                    </a>
                                </h6>
                            	<span class="separator"></span>
                            	<ul>
                            		<li class="date">
                            			<span class="glyphicon glyphicon-time"></span>
                            			<?php echo get_the_date('M d, Y'); ?>
                            		</li>
                            		<li class="category">
                            			<span class="glyphicon glyphicon-folder-open"></span>
                            			<?php the_category( ', ' ); ?>
                            		</li>
                            	</ul>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php else: ?>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>


<?php

	get_footer();