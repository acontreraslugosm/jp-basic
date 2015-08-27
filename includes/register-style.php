<?php

// Register styles
add_action( 'wp_enqueue_scripts', function () {
	wp_register_style( 'hover', '//cdnjs.cloudflare.com/ajax/libs/hover.css/2.0.2/css/hover-min.css', array(), '2.0.2', 'screen' );
	wp_register_style( 'animate', '//cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css', array(), '3.4.0', 'screen' );
	wp_register_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css', array(), '3.3.5' );
	wp_register_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array(), '4.4.0' );
	// Theme
	wp_register_style( 'main-theme', get_stylesheet_uri(), array( 'bootstrap' ), '1.0' );
} );
