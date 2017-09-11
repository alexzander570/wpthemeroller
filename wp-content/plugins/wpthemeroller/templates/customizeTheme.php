<?php //echo '<pre>';print_r($user_style_sheet);die;?>
<div class="wrt-theme-settings-page" style="margin">
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
                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <label for="text-field">Background color</label>
                                    <br>
                                    <input type="text" id="wrt_theme_body_background-color" name="wrt[wrt_theme_body][background-color]" class="form-control demo"  data-classes="wrt_theme_body" data-prop="background-color" value="<?php echo isset($user_style_sheet['wrt_theme_body']['background-color'])?$user_style_sheet["wrt_theme_body"]["background-color"]:'';?>">
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <label for="inline">Font type</label>
                                    <br/>
                                    <span>(Current: <?php echo isset($user_style_sheet['wrt_theme_body']['font-family'])? stripcslashes($user_style_sheet["wrt_theme_body"]["font-family"]):'';?>)</span>
                                    <br/>
                                    <div id="fontSelect" class="fontSelect" target_class="wrt_theme_body" data-font-family="<?php echo isset($user_style_sheet['wrt_theme_body']['font-family'])? stripcslashes($user_style_sheet["wrt_theme_body"]["font-family"]):'';?>">
                                        <div class="arrow-down"></div>
                                    </div>
                                    <input type="hidden" id="wrt_theme_body" name="wrt[wrt_theme_body][font-family]" value='<?php echo isset($user_style_sheet['wrt_theme_body']['font-family'])? stripcslashes($user_style_sheet["wrt_theme_body"]["font-family"]):'';?>'/>
                                </div>
                            </div>
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
                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <label for="wrt_menu_class_background-color">Background color</label>
                                    <br>
                                    <input type="text" id="text-field" class="form-control demo" value="<?php echo isset($user_style_sheet['wrt_menu_class']['background-color'])?$user_style_sheet["wrt_menu_class"]["background-color"]:'';?>" id="wrt_menu_class_background-color" name="wrt[wrt_menu_class][background-color]" data-classes="wrt_menu_class" data-prop="background-color">
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <label for="wrt_menu_class_background-color">Background color on hover</label>
                                    <br>
                                    <input type="text" class="form-control demo" value="<?php echo isset($user_style_sheet['wrt_menu_class:hover']['background-color'])?$user_style_sheet["wrt_menu_class:hover"]["background-color"]:'';?>" id="wrt_menu_class_background-color-hover" name="wrt[wrt_menu_class:hover][background-color]" data-classes="wrt_menu_class:hover" data-prop="background-color">
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <label for="wrt_current_menu_class_background-color">Active menu item background color</label>
                                    <br>
                                    <input type="text" class="form-control demo" value="<?php echo isset($user_style_sheet['wrt_current_menu_class']['background-color'])?$user_style_sheet["wrt_current_menu_class"]["background-color"]:'';?>" id="wrt_current_menu_class_background-color-hover" name="wrt[wrt_current_menu_class][background-color]" data-classes="wrt_current_menu_class" data-prop="background-color">
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <label for="wrt_menu_class_background-color">Active menu item background color on hover</label>
                                    <br>
                                    <input type="text" class="form-control demo" value="<?php echo isset($user_style_sheet['wrt_current_menu_class:hover']['background-color'])?$user_style_sheet["wrt_current_menu_class:hover"]["background-color"]:'';?>" id="wrt_current_menu_class_background-color-hover" name="wrt[wrt_current_menu_class:hover][background-color]" data-classes="wrt_current_menu_class:hover" data-prop="background-color">
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <label for="text-field">Border Width</label>
                                    <br>
                                        <input type="text" class="form-control text_field_css_prop" value="<?php echo isset($user_style_sheet['wrt_menu_class']['border-width'])?$user_style_sheet["wrt_menu_class"]["border-width"]:'';?>" id="wrt_menu_class_border-width" name="wrt[wrt_menu_class][border-width]" data-classes="wrt_menu_class" data-prop="border-width">
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <label for="text-field">Border Width on hover</label>
                                    <br>
                                        <input type="text" class="form-control text_field_css_prop" value="<?php echo isset($user_style_sheet['wrt_menu_class:hover']['border-width'])?$user_style_sheet["wrt_menu_class:hover"]["border-width"]:'';?>" id="wrt_menu_class_border-width-hover" name="wrt[wrt_menu_class:hover][border-width]" data-classes="wrt_menu_class:hover" data-prop="border-width">
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <label for="text-field">Border style</label>
                                    <br>
                                        <input type="text" class="form-control text_field_css_prop" value="<?php echo isset($user_style_sheet['wrt_menu_class']['border-style'])?$user_style_sheet["wrt_menu_class"]["border-style"]:'';?>" id="wrt_menu_class_border-style" name="wrt[wrt_menu_class][border-style]" data-classes="wrt_menu_class" data-prop="border-style">
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <label for="wrt_menu_class_border-color">Border color</label>
                                    <br>
                                    <input type="text" class="form-control demo" value="<?php echo isset($user_style_sheet['wrt_menu_class']['border-color'])?$user_style_sheet["wrt_menu_class"]["border-color"]:'';?>" id="wrt_menu_class_border-color" name="wrt[wrt_menu_class][border-color]" data-classes="wrt_menu_class" data-prop="border-color">
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <label for="wrt_menu_class_background-color">Border color on hover</label>
                                    <br>
                                    <input type="text" class="form-control demo" value="<?php echo isset($user_style_sheet['wrt_menu_class:hover']['border-color'])?$user_style_sheet["wrt_menu_class:hover"]["border-color"]:'';?>" id="wrt_menu_class_border-color-hover" name="wrt[wrt_menu_class:hover][border-color]" data-classes="wrt_menu_class:hover" data-prop="border-color">
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <label for="wrt_menu_class_border-radius">Border radius</label>
                                    <br>
                                        <input type="text" class="form-control text_field_css_prop" value="<?php echo isset($user_style_sheet['wrt_menu_class']['border-radius'])?$user_style_sheet["wrt_menu_class"]["border-radius"]:'';?>" id="wrt_menu_class_border-radius" name="wrt[wrt_menu_class][border-radius]" data-classes="wrt_menu_class" data-prop="border-radius">
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <label for="wrt_menu_link_class-color">Font color</label>
                                    <br>
                                    <input type="text" class="form-control demo" value="<?php echo isset($user_style_sheet['wrt_menu_link_class']['color'])?$user_style_sheet["wrt_menu_link_class"]["color"]:'';?>" id="wrt_menu_link_class-color" name="wrt[wrt_menu_link_class][color]" data-classes="wrt_menu_link_class" data-prop="color">
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-12">
                                <label for="wrt_menu_class_font-size">Font size</label><br/>
                                <input type="text" class="form-control text_field_css_prop" value="<?php echo isset($user_style_sheet['wrt_menu_link_class']['font-size'])?$user_style_sheet["wrt_menu_link_class"]["font-size"]:'';?>" id="wrt_menu_link_class_font-size" name="wrt[wrt_menu_link_class][font-size]" data-classes="wrt_menu_link_class" data-prop="font-size">
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <label for="text-field">Font size on hover</label>
                                    <br>
                                        <input type="text" class="form-control text_field_css_prop" value="<?php echo isset($user_style_sheet['wrt_menu_link_class:hover']['font-size'])?$user_style_sheet["wrt_menu_link_class:hover"]["font-size"]:'';?>" id="wrt_menu_link_class_font-size-hover" name="wrt[wrt_menu_link_class:hover][font-size]" data-classes="wrt_menu_link_class:hover" data-prop="font-size">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit">Save</button>
            </form>
        </div>
        <div class="col-lg-8 col-sm-8 col-xs-8">
            <iframe src=<?php echo home_url(); ?> height="650px" width="800px" id="test-iframe" style="border: 1px solid #000000; position:fixed;"></iframe>
        </div>
    </div>
</div>