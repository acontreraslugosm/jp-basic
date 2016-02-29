<form class="navbar-form navbar-right" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ) ?>" itemscope itemtype="http://schema.org/SearchAction">
	<div class="input-group">
		<input type="text" class="form-control" placeholder="<?php _e( 'Search', TEXT_DOMAIN ) ?>" name="s" value="<?php echo get_search_query() ?>">
		<span class="input-group-btn">
			<button class="btn btn-default" type="button"><?php echo esc_attr_x( 'Search', 'submit button' ) ?></button>
		</span>
	</div>
</form>
