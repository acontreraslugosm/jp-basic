<form action="<?php echo esc_url(home_url('/')) ?>" class="search-form" method="get"  role="search">
	<div class="input-group">
		<input type="text" class="form-control" name="s" value="<?php echo get_search_query() ?>" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder') ?>">
		<span class="input-group-btn">
			<button class="btn btn-default" type="button"><?php echo esc_attr_x('Search', 'submit button') ?></button>
		</span>
	</div>
</form>