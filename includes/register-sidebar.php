<?php
// Register Sidebar
add_action( 'widgets_init', function () {

	$args = array(
		'id'            => 'main-sidebar',
		'name'          => __( 'Main Sidebar', 'jp-basic' ),
		'description'   => __( 'Main Sidebar', 'jp-basic' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );
});
