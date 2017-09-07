<div class="page-header" style="text-align: center; margin-top: 10px;">
    <h1>Theme customizer <small>(WRT Theme customizer)</small></h1>
</div>
<div class="row">
    <div class="col-lg-3 col-sm-3 col-xs-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Global</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="form-group">
                            <label for="inline">Font type</label>
                            <br>
                            <div id="fontSelect" class="fontSelect">
                                <div class="arrow-down"></div>
                            </div>
                            <input type="hidden" id="wrt[global][font-type]" name="wrt[global][font-type]"/>
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
                    <div class="col-lg-12 col-sm-12">
                        <div class="form-group">
                            <label for="text-field">Background color</label>
                            <br>
                            <input type="text" id="wrt[body][backgroundcolor]" name="wrt[body][backgroundcolor]" class="form-control demo" value="" data-classes="wrt_theme_body">
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 col-12">
                        <label for="inline">Font weight</label><br/>
                        <div class="dropdown">
                            <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown trigger
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dLabel">
                                <li>Normal</li>
                                <li>100</li>
                                <li>200</li>
                                <li>300</li>
                                <li>400</li>
                                <li>500</li>
                                <li>600</li>
                                <li>700</li>
                                <li>800</li>
                                <li>900</li>
                                <li>Bold</li>
                                <li>Bolder</li>
                                <li>Lighter</li>
                            </ul>
                            <input type="hidden" id="font-weight" name="font-weight"/>
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
                            <label for="text-field">Background color</label>
                            <br>
                            <input type="text" id="text-field" class="form-control demo" value="" data-classes="wrt_menu_class">
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12 col-12">
                        <label for="inline">Font weight</label><br/>
                        <div class="dropdown">
                            <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown trigger
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dLabel">
                                <li>Normal</li>
                                <li>100</li>
                                <li>200</li>
                                <li>300</li>
                                <li>400</li>
                                <li>500</li>
                                <li>600</li>
                                <li>700</li>
                                <li>800</li>
                                <li>900</li>
                                <li>Bold</li>
                                <li>Bolder</li>
                                <li>Lighter</li>
                            </ul>
                            <input type="hidden" id="font-weight" name="font-weight"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9 col-sm-9 col-xs-9" style="position: fixed;left: 36%;">
        <iframe src=”<?php echo site_url(); ?>” height="650px" width="800px" id="test-iframe" style="border: 1px solid #000000;"></iframe>
    </div>
</div>