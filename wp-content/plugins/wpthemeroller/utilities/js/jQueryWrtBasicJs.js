/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery(document).ready(function () {
    jQuery('input').addClass('wrt_input_box');
    jQuery('header').addClass('wrt_header');
    jQuery('h1, h2, h3, h4, h5, h6').addClass('wrt_heading');
    jQuery('.site-content, .site-main').addClass('wrt_site_content');
    var font_families = [
            'Inherit',
            'Arial,Arial,Helvetica,sans-serif',
            'Arial Black,Arial Black,Gadget,sans-serif',
            'Comic Sans MS,Comic Sans MS,cursive',
            'Courier New,Courier New,Courier,monospace',
            'Georgia,Georgia,serif',
            'Impact,Charcoal,sans-serif',
            'Lucida Console,Monaco,monospace',
            'Lucida Sans Unicode,Lucida Grande,sans-serif',
            'Palatino Linotype,Book Antiqua,Palatino,serif',
            'Tahoma,Geneva,sans-serif',
            'Times New Roman,Times,serif',
            'Trebuchet MS,Helvetica,sans-serif',
            'Verdana,Geneva,sans-serif',
            'Gill Sans,Geneva,sans-serif'
        ];
    //For color-picker
    jQuery('.demo').each(function () {
        $(this).minicolors({
            control: jQuery(this).attr('data-control') || 'hue',
            defaultValue: jQuery(this).attr('data-defaultValue') || '',
            format: jQuery(this).attr('data-format') || 'rgb',
            keywords: jQuery(this).attr('data-keywords') || '',
            inline: jQuery(this).attr('data-inline') === 'true',
            letterCase: jQuery(this).attr('data-letterCase') || 'lowercase',
            opacity: true,
            position: jQuery(this).attr('data-position') || 'bottom left',
            swatches: jQuery(this).attr('data-swatches') ? jQuery̰(this).attr('data-swatches').split('|') : [],
            change: function (rgb, opacity) {
                try {
                    var classes = '.'+jQuery(this).attr('data-classes');
                    var data_prop = jQuery(this).attr('data-prop');
                    var test_ifram_style = jQuery('#test-iframe').contents().find(classes).attr('style');
                    if(typeof(test_ifram_style) === undefined || typeof(test_ifram_style) === 'undefined'){
                        test_ifram_style = '';
                    }
                    jQuery('#test-iframe').contents().find(classes).attr('style', test_ifram_style+data_prop+': '+ rgb+'!important;');
                } catch (e) {
                }
            },
            theme: 'bootstrap'
        });
    });

    jQuery('body').on('blur', '.text_field_css_prop', function(){
        var classes = '.'+jQuery(this).attr('data-classes');
        var data_prop = jQuery(this).attr('data-prop');
        var text_field_css_prop_val = jQuery(this).val();
        var test_ifram_style = jQuery('#test-iframe').contents().find(classes).attr('style');
        if(typeof(test_ifram_style) === undefined || typeof(test_ifram_style) === 'undefined'){
            test_ifram_style = '';
        }
        jQuery('#test-iframe').contents().find(classes).attr('style', test_ifram_style+data_prop+': '+ text_field_css_prop_val+'!important;');
    });

    //For font-family dropdown
    $('.fontSelect').fontSelector({
        'hide_fallbacks': true,
        'initial': $(this).attr('data-font-family'),
        'selected': function (style) {
            var data_classes = jQuery(this).attr('target_class');
            var body_class = "."+data_classes;
            var font_type_input_id = "#"+data_classes;
            var test_ifram_style = jQuery('#test-iframe').contents().find(data_classes).attr('style');
            jQuery(this).parent().find(font_type_input_id).val(style);
            if(typeof(test_ifram_style) === undefined || typeof(test_ifram_style) === 'undefined'){
                test_ifram_style = '';
            }
            jQuery('#test-iframe').contents().find(body_class).attr('style', test_ifram_style+'font-family:'+style+'!important;');
            
        },
        'fonts': font_families
    });
});
