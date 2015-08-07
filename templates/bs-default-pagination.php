<nav class="text-center" itemscope itemtype="http://schema.org/SiteNavigationElement">
	<?php
	$args = array(
			'type' => 'list',
	);
	$paginate = paginate_links($args);
	$search = array(
			"<ul class='page-numbers'>",
			"<li><span class='page-numbers current'>"
	);
	$replace = array(
			"<ul class='page-numbers pagination'>",
			"<li class='active'><span class='page-numbers current'>"
	);
	echo str_replace($search, $replace, $paginate)
	?>
</nav>
