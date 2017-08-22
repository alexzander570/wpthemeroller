/*---------------------------------------------------------------*/
/*--------- PINFOLIO : REQUIRED CUSTOM JQUERY SCRIPTS -----------*/
/*---------------------------------------------------------------*/
(function($) {
	$(document).ready(function(){
	
		/* Header Toggle Handler */
		$("#header-trigger").click(function(e){
			e.preventDefault();
			var body = $('body');
			if (body.hasClass('display-sidebar')){
				body.removeClass('display-sidebar');
				jQuery('.content-overlay').fadeOut(200);
			}
			else{
				body.addClass('display-sidebar');
				jQuery('.content-overlay').fadeIn(200);
			}
		});
		
		/* Main Navigation Superfish Call */
		$('#main-nav').superfish();
		
		/* Header NiceScroll Call */
		$("#header").niceScroll({cursoropacitymax:0.7,cursorcolor:"#aaaaaa",touchbehavior:true,railalign:"left",cursorwidth:"3px"});
		
		/*- Overwrite Slider Toggle FORONT/BACK Function -*/
		jQuery('#rfwbs_toggle-button').unbind('click').click(function(){
		
			var zindex = jQuery('#rfwbslider').css('z-index');

			if(zindex <= 0){
				jQuery('#rfwbslider').css('z-index','9997');
				jQuery('.rfwbs-background').css('z-index','999');
				if(jQuery('body.rfwbs-gallery-active').length > 0){
					jQuery('body,html').css({'overflow':'hidden'});
				}
			}else{
				jQuery('#rfwbslider').css('z-index','0');
				jQuery('.rfwbs-background').css('z-index','-1');
				if(jQuery('body.rfwbs-gallery-active').length > 0){
					jQuery('body,html').css({'overflow':'inherit'});
				}
			}
		});	
		
		/*- Check slider home button appereance, shift menu button -*/
		if(jQuery('#rfwbs-home-button').length > 0){
			jQuery('#header-trigger').addClass('pushdown');
		}
	});
})( jQuery );