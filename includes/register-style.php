<?php

// Register Script
add_action('wp_enqueue_scripts', function () {

	wp_register_style('hover', '//cdnjs.cloudflare.com/ajax/libs/hover.css/2.0.2/css/hover-min.css', array(), '2.0.2', 'screen');
	wp_register_style('animate', '//cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.min.css', array(), '3.3.0', 'screen');
});
