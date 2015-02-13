<!doctype html>
<html <?php language_attributes() ?>>
	<head>
		<meta charset="<?php bloginfo('charset') ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="<?php bloginfo('description') ?>" />

		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/favicon.ico" />
		<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri() ?>/apple-touch-icon.png" />

		<?php wp_head() ?>

	</head>

	<body <?php body_class() ?> itemscope itemtype="http://schema.org/WebPage">

		<?php
		get_template_part('templates/header');
