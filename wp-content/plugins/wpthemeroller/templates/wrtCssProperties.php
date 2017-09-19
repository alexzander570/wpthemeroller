<div class="clearfix"></div>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<div class="wrt-theme-settings-page">
    <div class="divider-40"></div>
    <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-3"></div>
        <div class="col-md-6 col-sm-6 col-xs-6 ">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon3" title="Customize site" data-placement="left"><?php echo site_url(); ?></span>
                <input type="text" class="form-control" id="page_name" aria-describedby="basic-addon3">
                <span class="input-group-btn">
                    <button class="btn btn-default reload_iframe" type="button">Go!</button>
                </span>
            </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3"></div>
    </div>
    <div class="divider-40"></div>
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-lg-10 col-sm-10 col-xs-10">
            <iframe src=<?php echo site_url(); ?> height="650px" width="100%" id="wrt-customizetheme-iframe" style="border: 1px solid #000000;resize: both;overflow: auto;" class="ui-widget-content"></iframe>
        </div>
        <div class="col-md-1">
        </div>
    </div>
</div>
<?php include_once('wrt-model-page.php') ?>