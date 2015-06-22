<?php

include_once __DIR__ . '/includes/register-script.php';
//include_once __DIR__ . '/includes/register-script-local.php';
include_once __DIR__ . '/includes/register-style.php';
//include_once __DIR__ . '/includes/register-style-local.php';
include_once __DIR__ . '/includes/register-sidebar.php';

if (!defined('THEME_URI')) {
	define('THEME_URI', get_template_directory_uri());
}

add_action('wp_enqueue_scripts', function () {

	/* Styles */
	wp_enqueue_style('animate');
	wp_enqueue_style('hover');

	/* Scripts */
	wp_enqueue_script('modernizr');
	wp_enqueue_script('jquery');
	wp_enqueue_script('jquery-form');

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

	// Add defer atribute
	do_action('defer_script', array('jquery-form', 'bootstrap-alerts'));

	// Bootstrap complemetary text align
	wp_register_style('bs-text-align', THEME_URI . '/css/bootstrap-text-align.min.css', array('bootstrap'), '1.0');
	wp_enqueue_style('bs-text-align');

	// Wordpress Core
	wp_register_style('wordpress-core', THEME_URI . '/css/wordpress-core.min.css', array('bootstrap', 'bs-text-align'), '1.0');
	wp_enqueue_style('wordpress-core');

	// Theme
	wp_register_style('main-theme', THEME_URI . '/style.css', array(), '1.0');
	wp_enqueue_style('main-theme');

	if (is_child_theme()) {
		// Theme
		wp_register_style('theme', get_stylesheet_uri(), array('animate'), '1.0');
		wp_enqueue_style('theme');
	}
});

include_once __DIR__ . '/includes/theme-features.php';
