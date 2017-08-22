<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
	<div class="search-wrapper clearfix">
		<input type="text" value="" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'pinfolio' ); ?>" name="s" id="searchbox" class="searchinput"/>
		<input type="submit" class="submitbutton" value="<?php echo esc_attr_x( 'Search', 'value', 'pinfolio' ); ?>" />
	</div>
</form>

