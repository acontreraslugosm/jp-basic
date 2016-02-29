<form class="navbar-form navbar-right" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ) ?>" itemscope itemtype="http://schema.org/SearchAction">
	<div class="form-group">
		<input type="text" class="form-control" placeholder="<?php _e( 'Search', TEXT_DOMAIN ) ?>" name="s" value="<?php echo get_search_query() ?>">
	</div>
	<button type="submit" class="btn btn-default"><?php _e( 'Submit', TEXT_DOMAIN ) ?></button>
</form>