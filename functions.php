<?php

if (!defined($name)) {
	define('THEME_URI', get_template_directory_uri());
}

add_action('wp_enqueue_scripts', function () {

	/* Styles */
	// Animate.css
	wp_register_style('animate', apply_filters('css_cdn_uri', THEME_URI . '/css/animate.min.css', 'animate'));
	wp_enqueue_style('animate');
	// Hover.css
	wp_register_style('hover', apply_filters('css_cdn_uri', THEME_URI . '/css/hover-min.css', 'hover'));
	wp_enqueue_style('hover');


	/* Scripts */
	// Modernizr
	wp_register_script('modernizr', apply_filters('js_cdn_uri', THEME_URI . '/js/modernizr.min.js', 'modernizr'));
	wp_enqueue_script('modernizr');
	// Bootstrap
	wp_register_script('bootstrap', apply_filters('js_cdn_uri', THEME_URI . '/js/bootstrap.min.js', 'bootstrap'), array('jquery'), NULL, TRUE);
	wp_enqueue_script('bootstrap');
	// Bootstrap Alerts
	wp_register_script('bootstrap-alerts', apply_filters('js_cdn_uri', THEME_URI . '/js/bootstrap-alerts.min.js', 'bootstrap-alerts'), array('jquery', 'bootstrap'), NULL, TRUE);
	wp_enqueue_script('bootstrap-alerts');

	/**
	 * TODO: Importar y ajustar las actualizaciones
	 */

	// Bootstrap
	wp_register_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css', array(), '3.3.4');
	wp_enqueue_style('bootstrap');

	// Bootstrap Theme
	wp_register_style('bootstrap-theme', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css', array('bootstrap'), '3.3.4');
	wp_enqueue_style('bootstrap-theme');

	// Font Awesome
	wp_register_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array('bootstrap'), '4.3.0');
	wp_enqueue_style('font-awesome');

	// jQuery Form
	wp_enqueue_script('jquery-form');

	// Add defer atribute
	do_action('defer_script', array('jquery-form', 'bootstrap-alerts'));

	// Bootstrap complemetary text align
	wp_register_style('bs-text-align', get_template_directory_uri() . '/css/bootstrap-text-align.css', array('bootstrap'), '1.0');
	wp_enqueue_style('bs-text-align');

	// Wordpress Core
	wp_register_style('wordpress-core', get_template_directory_uri() . '/css/wordpress-core.css', array('bootstrap', 'bs-text-align'), '1.0');
	wp_enqueue_style('wordpress-core');

	// Theme
	wp_register_style('main-theme', get_template_directory_uri() . '/style.css', array(), '1.0');
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
