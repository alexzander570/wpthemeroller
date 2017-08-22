jQuery(document).ready(function(){

    jQuery('#slider').owlCarousel({
        items: 1,
        nav: true,
        mouseDrag: false,
        loop: true,
        dots: true,
        autoplay: true,
        autoplaySpeed: 1000,
        navText: ['<i class="glyphicon glyphicon-menu-left"></i>','<i class="glyphicon glyphicon-menu-right"></i>'],
    });

    jQuery( "#mobile-menu-trigger" ).click(function() {
      jQuery( "#mobile-menu" ).slideToggle( "slow" );
    });

    // hide #back-top first
    jQuery("#back-top").hide();

    // scroll body to 0px on click
    jQuery('#back-top a').click(function () {
        jQuery('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
});

jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 500) {
        jQuery('#back-top').fadeIn();
    } else {
        jQuery('#back-top').fadeOut();
    }
});