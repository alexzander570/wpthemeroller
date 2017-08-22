<?php
#-----------------------------------------------------------------#
#------------------ PINFOLIO : CUSTOM STYLES  --------------------#
#-----------------------------------------------------------------#

//Get required theme custom value
$color_scheme   = esc_attr(get_theme_mod( 'color_scheme', '#F2481A'));
$menuicon_color = esc_attr(get_theme_mod( 'menuicon_color', '#ffffff'));
?>
<!-- Pinfolio Customizer Options// -->
<style type="text/css">

::selection{
	background: <?php echo $color_scheme; ?>;
	color: #fff;
	text-shadow: none;
}
::-moz-selection {
	background: <?php echo $color_scheme; ?>;
	color: #fff;
	text-shadow: none;
}

/*Global css*/
a,a:active,a:focus,a:hover,#respond form .form-submit input[type="submit"],a.comment-reply-link{color:<?php echo $color_scheme; ?>;}
button,
html input[type="button"],
input[type="reset"],
input[type="submit"]{
	color:<?php echo $color_scheme; ?>;
}

.page-inner-wrap{border-left:5px solid <?php echo $color_scheme; ?>;}
#header-trigger{color:<?php echo $menuicon_color; ?>}
#follow-icons li i:hover{background-color:<?php echo $color_scheme; ?>;color:#fff;border-color:<?php echo $color_scheme; ?>}

/*color scheme*/
#logo #site-title a,#follow-icons li a,h1.entry-title span, #content .sticky-post{color:<?php echo $color_scheme; ?>;}
#follow-icons li a:hover,{background-color:<?php echo $color_scheme; ?>;color:#fff;border:1px solid <?php echo $color_scheme; ?>;}

/*Search From Submit*/
#searchform input[type="submit"]{color:<?php echo $color_scheme; ?>;}
</style>
<!-- \\Pinfolio Customizer Options -->