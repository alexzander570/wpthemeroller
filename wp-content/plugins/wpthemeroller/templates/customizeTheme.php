<?php $font_weight = unserialize(FONTWEIGHT);?>
<div class="page-header" style="text-align: center; margin-top: 10px;">
    <h1>Theme customizer <small>(WRT Theme customizer)</small></h1>
</div>
<div class="row">
    <div class="col-lg-3 col-sm-3 col-xs-3">
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
                                <input type="text" id="wrt_theme_body_background-color" name="wrt[wrt_theme_body][background-color]" class="form-control demo" value="" data-classes="wrt_theme_body" data-prop="background-color">
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <div class="form-group">
                                <label for="inline">Font type</label>
                                <br>
                                <div id="fontSelect" class="fontSelect" target_class="wrt_theme_body">
                                    <div class="arrow-down"></div>
                                </div>
                                <input type="hidden" id="wrt_theme_body" name="wrt[wrt_theme_body][font-family]"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Customize Page</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12">
                            <label for="inline">Font weight</label><br/>
                            <select class="selectpicker" data-style="btn-primary" >
                                <?php 
                                ?>
                            </select>
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
                                <label for="text-field">Background color</label>
                                <br>
                                <input type="text" id="text-field" class="form-control demo" value="" id="wrt_menu_class_background-color" name="wrt[wrt_menu_class][background-color]" data-classes="wrt_menu_class" data-prop="background-color">
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-12">
                            <label for="inline">Font weight</label><br/>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit">Save</button>
        </form>
    </div>
    <div class="col-lg-9 col-sm-9 col-xs-9" style="position: fixed;left: 36%;">
        <iframe src=<?php echo home_url(); ?> height="650px" width="800px" id="test-iframe" style="border: 1px solid #000000;"></iframe>
    </div>
</div>