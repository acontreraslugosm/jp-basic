<?php

// Register Script
add_action('wp_enqueue_scripts', function () {

	wp_register_style('hover', '/css/hover-min.css', array(), '2.0.2', 'screen');
	wp_register_style('animate', '/css/animate.min.css', array(), '3.3.0', 'screen');
});
