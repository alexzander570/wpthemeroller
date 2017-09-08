/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery(document).ready(function () {
    var font_families = [
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
            format: jQuery(this).attr('data-format') || 'hex',
            keywords: jQuery(this).attr('data-keywords') || '',
            inline: jQuery(this).attr('data-inline') === 'true',
            letterCase: jQuery(this).attr('data-letterCase') || 'lowercase',
            opacity: jQuery(this).attr('data-opacity'),
            position: jQuery(this).attr('data-position') || 'bottom left',
            swatches: jQuery(this).attr('data-swatches') ? jQuery̰(this).attr('data-swatches').split('|') : [],
            change: function (hex, opacity) {
                try {
                    var classes = '.'+jQuery(this).attr('data-classes');
                    var data_prop = jQuery(this).attr('data-prop');
                    jQuery('#test-iframe').contents().find(classes).css(data_prop, hex);
                } catch (e) {
                }
            },
            theme: 'bootstrap'
        });
    });


    //For font-family dropdown
    $('#fontSelect').fontSelector({
        'hide_fallbacks': true,
        'initial': 'Courier New,Courier New,Courier,monospace',
        'selected': function (style) {
            var data_classes = jQuery(this).attr('target_class');
            var body_class = "."+data_classes;
            var font_type_input_id = "#"+data_classes;
            jQuery('#test-iframe').contents().find(body_class).css('font-family', style);
            jQuery(this).parent().find(font_type_input_id).val(style);
        },
        'fonts': font_families
    });

});
