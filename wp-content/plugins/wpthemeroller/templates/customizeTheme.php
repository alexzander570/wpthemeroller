<?php
    $wrt_body_background_color = isset($user_style_sheet['wrt_theme_body']['background-color'])?$user_style_sheet["wrt_theme_body"]["background-color"]:'';
    $wrt_body_font_family = isset($user_style_sheet['wrt_theme_body']['font-family'])? stripcslashes($user_style_sheet["wrt_theme_body"]["font-family"]):'';
    $wrt_heading_font_family = isset($user_style_sheet['wrt_heading']['font-family'])? stripcslashes($user_style_sheet["wrt_heading"]["font-family"]):'';
    
    $wrt_menu_background_color = isset($user_style_sheet['wrt_menu_class']['background-color'])?$user_style_sheet["wrt_menu_class"]["background-color"]:'';
    $wrt_menu_background_color_on_hover = isset($user_style_sheet['wrt_menu_class:hover']['background-color'])?$user_style_sheet["wrt_menu_class:hover"]["background-color"]:'';
    $wrt_active_menu_background_color = isset($user_style_sheet['wrt_menu_class:hover']['background-color'])?$user_style_sheet["wrt_menu_class:hover"]["background-color"]:'';
    $wrt_active_menu_background_color_on_hover = isset($user_style_sheet['wrt_current_menu_class:hover']['background-color'])?$user_style_sheet["wrt_current_menu_class:hover"]["background-color"]:'';
    $wrt_menu_border_width = isset($user_style_sheet['wrt_menu_class']['border-width'])?$user_style_sheet["wrt_menu_class"]["border-width"]:0;
    $wrt_menu_border_style = isset($user_style_sheet['wrt_menu_class']['border-style'])?$user_style_sheet["wrt_menu_class"]["border-style"]:'';
    $wrt_menu_border_radius = isset($user_style_sheet['wrt_menu_class']['border-radius'])?$user_style_sheet["wrt_menu_class"]["border-radius"]:0;
    $wrt_menu_border_color = isset($user_style_sheet['wrt_menu_class']['border-color'])?$user_style_sheet["wrt_menu_class"]["border-color"]:'';
    $wrt_menu_font_color = isset($user_style_sheet['wrt_menu_link_class']['color'])?$user_style_sheet["wrt_menu_link_class"]["color"]:'';
    $wrt_menu_font_size = isset($user_style_sheet['wrt_menu_link_class']['font-size'])?$user_style_sheet["wrt_menu_link_class"]["font-size"]:'';
    
    $wrt_widget_background_color = isset($user_style_sheet['widget']['background-color'])?$user_style_sheet["widget"]["background-color"]:'';
    $wrt_widget_border_width = isset($user_style_sheet['widget']['border-width'])?$user_style_sheet["widget"]["border-width"]:'';
    $wrt_widget_border_style = isset($user_style_sheet['widget']['border-style'])?$user_style_sheet["widget"]["border-style"]:'';
    $wrt_widget_border_color = isset($user_style_sheet['widget']['border-color'])?$user_style_sheet["widget"]["border-color"]:'';
    $wrt_widget_border_radius = isset($user_style_sheet['widget']['border-radius'])?$user_style_sheet["widget"]["border-radius"]:'';
    $wrt_widget_title_background_color = isset($user_style_sheet['widget-title']['background-color'])?$user_style_sheet["widget-title"]["background-color"]:'';
?>
<div class="wrt-theme-settings-page">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <span>Hover properties will only work once all the properties are saved.</span>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-sm-4 col-xs-4">
            <form method="post" action="">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Global</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <?php
                                echo $this->wrtGenerateHtmlTags_obj->geterateColorBox('Background color', $wrt_body_background_color, 'wrt_theme_body', 'background-color');
                                echo $this->wrtGenerateHtmlTags_obj->generateFontSelectBox('Body font type', $wrt_body_font_family, 'wrt_theme_body', 'font-family');
                                echo $this->wrtGenerateHtmlTags_obj->generateFontSelectBox('Heading font type', $wrt_heading_font_family, 'wrt_heading', 'font-family');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Customize Menu</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <?php
                            echo $this->wrtGenerateHtmlTags_obj->geterateColorBox('Background color', $wrt_menu_background_color, 'wrt_menu_class', 'background-color');
                            echo $this->wrtGenerateHtmlTags_obj->geterateColorBox('Background color on hover', $wrt_menu_background_color_on_hover, 'wrt_menu_class:hover', 'background-color');
                            echo $this->wrtGenerateHtmlTags_obj->geterateColorBox('Active menu item background color', $wrt_active_menu_background_color, 'wrt_current_menu_class', 'background-color');
                            echo $this->wrtGenerateHtmlTags_obj->geterateColorBox('Active menu item background color on hover', $wrt_active_menu_background_color_on_hover, 'wrt_current_menu_class:hover', 'background-color');
                            echo $this->wrtGenerateHtmlTags_obj->generateTextBox('Border Width', $wrt_menu_border_width, 'wrt_menu_class', 'border-width');

                            echo $this->wrtGenerateHtmlTags_obj->generateSelectBox('Border Style', $wrt_menu_border_style, 'wrt_menu_class', 'border-style', BORDERSTYLE);
                            echo $this->wrtGenerateHtmlTags_obj->generateTextBox('Border radius', $wrt_menu_border_radius, 'wrt_menu_class', 'border-radius');
                            echo $this->wrtGenerateHtmlTags_obj->geterateColorBox('Border color', $wrt_menu_border_color, 'wrt_menu_class', 'border-color');
                            echo $this->wrtGenerateHtmlTags_obj->geterateColorBox('Font color', $wrt_menu_font_color, 'wrt_menu_link_class', 'color');
                            echo $this->wrtGenerateHtmlTags_obj->generateTextBox('Font size', $wrt_menu_font_size, 'wrt_menu_link_class', 'font-size');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Input </h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <label for="text-field">Background color</label>
                                    <br>
                                    <input type="text" id="wrt_input_box_background-color" name="wrt[wrt_input_box][background-color]" class="form-control demo"  data-classes="wrt_input_box" data-prop="background-color" value="<?php echo isset($user_style_sheet['wrt_input_box']['background-color'])?$user_style_sheet["wrt_input_box"]["background-color"]:'';?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Widget </h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <?php 
                            echo $this->wrtGenerateHtmlTags_obj->geterateColorBox('Widget title background color', $wrt_widget_title_background_color, 'widget-title', 'background-color');
                            echo $this->wrtGenerateHtmlTags_obj->geterateColorBox('Widget background color', $wrt_widget_background_color, 'widget', 'background-color');
                            echo $this->wrtGenerateHtmlTags_obj->generateTextBox('Widget border Width', $wrt_widget_border_width, 'widget', 'border-width');
                            echo $this->wrtGenerateHtmlTags_obj->generateSelectBox('Widget border Style', $wrt_widget_border_style, 'widget', 'border-style', BORDERSTYLE);
                            echo $this->wrtGenerateHtmlTags_obj->geterateColorBox('Widget border color', $wrt_widget_border_color, 'widget', 'border-color');
                            echo $this->wrtGenerateHtmlTags_obj->generateTextBox('Widget border radius', $wrt_widget_border_radius, 'widget', 'border-radius');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Header and Footer</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <label for="text-field">Header Background color</label>
                                    <br>
                                    <input type="text" id="wrt_header_background-color" name="wrt[wrt_header][background-color]" class="form-control demo"  data-classes="wrt_header" data-prop="background-color" value="<?php echo isset($user_style_sheet['wrt_header']['background-color'])?$user_style_sheet["wrt_header"]["background-color"]:'';?>">
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <label for="wrt_menu_class_border-color">Header Border color</label>
                                    <br>
                                    <input type="text" class="form-control demo" value="<?php echo isset($user_style_sheet['wrt_header']['border-color'])?$user_style_sheet["wrt_header"]["border-color"]:'';?>" id="wrt_header_border-color" name="wrt[wrt_header][border-color]" data-classes="wrt_header" data-prop="border-color">
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <label for="wrt_menu_class_border-radius">Header Border radius</label>
                                    <br>
                                        <input type="text" class="form-control text_field_css_prop" value="<?php echo isset($user_style_sheet['wrt_header']['border-radius'])?$user_style_sheet["wrt_header"]["border-radius"]:'';?>" id="wrt_header_border-radius" name="wrt[wrt_header][border-radius]" data-classes="wrt_header" data-prop="border-radius">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit">Save</button>
            </form>
        </div>
        <div class="col-lg-8 col-sm-8 col-xs-8">
            <iframe src=<?php echo get_permalink(get_page_by_path('wrt-demo-page')); ?> height="650px" width="800px" id="test-iframe" style="border: 1px solid #000000; position:fixed;"></iframe>
        </div>
    </div>
</div>