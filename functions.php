<?php

add_action('wp_enqueue_scripts', function () {
	// Bootstrap
	wp_register_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css', array(), '3.3.2');
	wp_enqueue_style('bootstrap');
	wp_register_script('bootstrap', '//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js', array('jquery'), '3.3.2', true);
	wp_enqueue_script('bootstrap');

	// Bootstrap Theme
	wp_register_style('bootstrap-theme', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css', array('bootstrap'), '3.3.2');
	wp_enqueue_style('bootstrap-theme');

	// Animate.css
	wp_register_style('animate', '//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css', array('bootstrap'), '3.2.0');
	wp_enqueue_style('animate');

	// hover.css
	wp_register_style('hover', get_bloginfo('template_url') . '/css/hover-min.css', array('bootstrap', 'animate'), '2.0.1');
	wp_enqueue_style('hover');

	// Font Awesome
	wp_register_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array('bootstrap'), '4.3.0');
	wp_enqueue_style('font-awesome');

	// jQuery Form
	wp_enqueue_script('jquery-form');

	// Bootstrap complemetary text align
	wp_register_style('bs-text-align', get_bloginfo('template_url') . '/css/bootstrap-text-align.css', array('bootstrap'), '1.0');
	wp_enqueue_style('bs-text-align');

	// Wordpress Core
	wp_register_style('wordpress-core', get_bloginfo('template_url') . '/css/wordpress-core.css', array('bootstrap', 'bs-text-align'), '1.0');
	wp_enqueue_style('wordpress-core');

	// Theme
	wp_register_style('main-theme', get_bloginfo('template_url') . '/style.css', array(), '1.0');
	wp_enqueue_style('main-theme');

	if (is_child_theme()) {
		// Theme
		wp_register_style('theme', get_stylesheet_uri(), array('animate'), '1.0');
		wp_enqueue_style('theme');
	}
});

// Full theme supports
add_action('after_setup_theme', function () {

	// Add theme support for Automatic Feed Links
	add_theme_support('automatic-feed-links');

	// Add theme support for Post Formats
	add_theme_support('post-formats', array('status', 'quote', 'gallery', 'image', 'video', 'audio', 'link', 'aside', 'chat'));

	// Add theme support for Featured Images
	add_theme_support('post-thumbnails');

	// Add theme support for HTML5 Semantic Markup
	add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

	// Add theme support for document Title tag
	add_theme_support('title-tag');
});
