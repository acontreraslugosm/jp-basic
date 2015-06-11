<?php

// Register Script
add_action('wp_enqueue_scripts', function () {

	// jQuery
	wp_deregister_script('jquery');
	wp_register_script('jquery', '/js/jquery.min.js', array(), '2.1.4', false);
	// Modernizr
	wp_register_script('modernizr', '/js/modernizr.min.js', array(), '2.8.3', false);
});
