<div class="modal fade  bd-example-modal-lg" id="wrtModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Customize theme<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button></h5>
            </div>
            <div class="modal-body wrt-modal-body">
                <input type="hidden" id="wrt_class"/>
                <form method="post" id="wrt_cutomizetheme_form" action="">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">Background properties</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <?php echo $this->wrtGenerateHtmlTags_obj->geterateColorBox('Background color', 'background-color'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">Font properties</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <?php echo $this->wrtGenerateHtmlTags_obj->geterateColorBox('Font color', 'color'); ?>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <?php echo $this->wrtGenerateHtmlTags_obj->generateTextBox('Font size', 'font-size'); ?>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <?php echo $this->wrtGenerateHtmlTags_obj->generateSelectBox('Font family', 'font-family', FONTFAMILY); ?>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <?php echo $this->wrtGenerateHtmlTags_obj->generateSelectBox('Font weight', 'font-weight', FONTWEIGHT); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">Border properties</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <?php echo $this->wrtGenerateHtmlTags_obj->generateSelectBox('Border style', 'border-style', BORDERSTYLE); ?>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <?php echo $this->wrtGenerateHtmlTags_obj->geterateColorBox('Border color', 'border-color'); ?>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <?php echo $this->wrtGenerateHtmlTags_obj->generateTextBox('Border width', 'border-width'); ?>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <?php echo $this->wrtGenerateHtmlTags_obj->generateTextBox('Border radius', 'border-radius'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">Box properties</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <?php echo $this->wrtGenerateHtmlTags_obj->generateTextBox('Height', 'height'); ?>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <?php echo $this->wrtGenerateHtmlTags_obj->generateTextBox('Width', 'width'); ?>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <?php echo $this->wrtGenerateHtmlTags_obj->generateSelectBox('Float', 'float', FLOAT); ?>
                                    </div>
                                    <?php if(is_admin()){?>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <?php echo $this->wrtGenerateHtmlTags_obj->generateTextBox('Margin top', 'margin-top'); ?>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <?php echo $this->wrtGenerateHtmlTags_obj->generateTextBox('Margin right', 'margin-right'); ?>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <?php echo $this->wrtGenerateHtmlTags_obj->generateTextBox('Margin bottom', 'margin-bottom'); ?>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <?php echo $this->wrtGenerateHtmlTags_obj->generateTextBox('Margin left', 'margin-left'); ?>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <?php echo $this->wrtGenerateHtmlTags_obj->generateTextBox('Padding top', 'padding-top'); ?>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <?php echo $this->wrtGenerateHtmlTags_obj->generateTextBox('Padding right', 'padding-right'); ?>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <?php echo $this->wrtGenerateHtmlTags_obj->generateTextBox('Padding bottom', 'padding-bottom'); ?>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <?php echo $this->wrtGenerateHtmlTags_obj->generateTextBox('Padding left', 'padding-left'); ?>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">Text properties</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <?php echo $this->wrtGenerateHtmlTags_obj->generateSelectBox('Text align', 'text-align', TEXTALIGN); ?>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <?php echo $this->wrtGenerateHtmlTags_obj->generateSelectBox('Text decoration', 'text-decoration', TEXTDECORATION); ?>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <?php echo $this->wrtGenerateHtmlTags_obj->generateSelectBox('Text transform', 'text-transform', TEXTTRANSFORM); ?>
                                    </div>                          
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">On hover properties</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <?php echo $this->wrtGenerateHtmlTags_obj->geterateColorBox('Background color', 'background-color', 'hover'); ?>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <?php echo $this->wrtGenerateHtmlTags_obj->generateSelectBox('Text decoration', 'text-decoration', TEXTDECORATION, 'hover'); ?>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <?php echo $this->wrtGenerateHtmlTags_obj->geterateColorBox('Font color', 'font-color', 'hover'); ?>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <?php echo $this->wrtGenerateHtmlTags_obj->generateSelectBox('Border style', 'border-style', BORDERSTYLE, 'hover'); ?>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <?php echo $this->wrtGenerateHtmlTags_obj->geterateColorBox('Border color', 'border-color', 'hover'); ?>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <?php echo $this->wrtGenerateHtmlTags_obj->generateTextBox('Border width', 'border-width', 'hover'); ?>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <?php echo $this->wrtGenerateHtmlTags_obj->generateTextBox('Border radius', 'border-radius', 'hover'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary wrttheme_save_style">Save</button>
            </div>
        </div>
    </div>
</div>