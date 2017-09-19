/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery(document).ready(function () {
    $('.wrt_customize_button').tooltip();
    $("#wrt-customizetheme-iframe").resizable();

    jQuery('body').on('click', '.reload_iframe', function () {
        var iframesrc = ajaxobj.siteurl + '/' + jQuery('#page_name').val();
        var iframe = $("#wrt-customizetheme-iframe");
        iframe.attr('src', iframesrc);
    });

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
                    var classes = jQuery(this).attr('data-classes');
                    var data_prop = jQuery(this).attr('data-prop');
                    var test_ifram_style = jQuery('#wrt-customizetheme-iframe').contents().find(classes).attr('style');
                    if (typeof (test_ifram_style) === undefined || typeof (test_ifram_style) === 'undefined') {
                        test_ifram_style = '';
                    }
                    jQuery('#wrt-customizetheme-iframe').contents().find(classes).attr('style', test_ifram_style + data_prop + ': ' + rgb + '!important;');
                } catch (e) {
                }
            },
            theme: 'bootstrap'
        });
    });

    jQuery('body').on('blur', '.text_field_css_prop', function () {
        var classes = jQuery(this).attr('data-classes');
        var data_prop = jQuery(this).attr('data-prop');
        var text_field_css_prop_val = jQuery(this).val();
        var test_ifram_style = jQuery('#test-iframe').contents().find(classes).attr('style');
        if (typeof (test_ifram_style) === undefined || typeof (test_ifram_style) === 'undefined') {
            test_ifram_style = '';
        }
        jQuery('#test-iframe').contents().find(classes).attr('style', test_ifram_style + data_prop + ': ' + text_field_css_prop_val + '!important;');
    });

    jQuery('body').on('change', '.select_box_css_prop', function () {
        var classes = jQuery(this).attr('data-classes');
        var data_prop = jQuery(this).attr('data-prop');
        var text_field_css_prop_val = jQuery(this).val();
        var test_ifram_style = jQuery('#wrt-customizetheme-iframe').contents().find(classes).attr('style');
        if (typeof (test_ifram_style) === undefined || typeof (test_ifram_style) === 'undefined') {
            test_ifram_style = '';
        }
        jQuery('#wrt-customizetheme-iframe').contents().find(classes).attr('style', test_ifram_style + data_prop + ': ' + text_field_css_prop_val + '!important;');
    });

    jQuery('#wrt-customizetheme-iframe').on('load', function () {
        var element_class_name = '';
        var wrt_classes = '';
        jQuery('#wrt-customizetheme-iframe').contents().find('#wpadminbarm').attr('style', 'display: none !important;');
        jQuery('#wrt-customizetheme-iframe').contents().find('.wrt_customize_button').attr('style', 'display: none !important;');
        jQuery(jQuery('[id="wrt-customizetheme-iframe"]')[0].contentWindow.document.body).on('click', '*', function () {
            if (this.className != '') {
                var classes = (this.className).split(' ');
                jQuery.each(classes, function (element_id, element_value) {
                    wrt_classes = wrt_classes + '.' + element_value;
                });
                if (element_class_name != '') {
                    class_name = wrt_classes + ' ' + element_class_name.trim();
                } else {
                    class_name = wrt_classes;
                }
                element_class_name = '';
                wrt_classes = '';
                jQuery('#wrt_class').val(class_name);
                $('#wrtModal').modal('show');
                return false;
            } else {
                element_class_name = (this.tagName).toLowerCase() + ' ' + element_class_name;
            }
        });
    });
    $('#wrtModal').on('show.bs.modal', function (event) {
        var customized_class = jQuery('#wrt_class').val();
        //alert(customized_class);
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        jQuery.ajax({
            data: {action: 'get_user_custom_style', class_name: customized_class},
            type: 'post',
            url: ajaxobj.ajaxurl,
            success: function (data) {
                var da = jQuery.parseJSON(data);
                if (da.status == 'success') {
                    jQuery.each(da.data, function (cn, ed) {
                        jQuery.each(ed, function(ei, v){
                            if(jQuery('input[name="wrt['+cn+']['+ei+']"]').length > 0)
                                jQuery('input[name="wrt['+cn+']['+ei+']"]').val(v);
                            else if(jQuery('select[name="wrt['+cn+']['+ei+']"]').lenght > 0)
                                jQuery('select[name="wrt['+cn+']['+ei+']"]').val(v);
                        });
                    });
                }
            }
        });

        var modal = jQuery(this);

        var inputBoxes = modal.find('.modal-body input[type="text"]');
        var selectDropdown = modal.find('.modal-body select');
        jQuery.each(inputBoxes, function (element_id, element_value) {
            input_id = element_value.id;
            js_input_id = '#' + (element_value.id);
            hover_customized_class = customized_class;
            if (jQuery(this).attr('data-propfor') == 'hover') {
                hover_customized_class = customized_class + ':hover';
            }
            jQuery(this).attr('name', 'wrt[' + hover_customized_class + '][' + input_id + ']').attr('data-classes', hover_customized_class);
        });
        jQuery.each(selectDropdown, function (element_id, element_value) {
            input_id = element_value.id;
            js_input_id = '#' + (element_value.id);
            hover_customized_class = customized_class;
            if (jQuery(this).attr('data-propfor') == 'hover') {
                hover_customized_class = customized_class + ':hover';
            }
            jQuery(this).attr('name', 'wrt[' + hover_customized_class + '][' + input_id + ']').attr('data-classes', hover_customized_class);
        });
    });

    jQuery('body').on('click', '.wrttheme_save_style', function () {
        var style_data = jQuery('#wrt_cutomizetheme_form').serialize();
        jQuery.ajax({
            data: {action: 'contact_form', data: style_data},
            type: 'post',
            url: ajaxobj.ajaxurl,
            success: function (data) {
                var da = jQuery.parseJSON(data);
                if(da.status == 'success'){
                    location.reload();
                }
            }
        });
    });
});
