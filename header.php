<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset') ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="<?php bloginfo('description') ?>" />

		<?php wp_head() ?>

	</head>

	<body <?php body_class() ?> itemscope itemtype="http://schema.org/WebPage">

		<?php
		get_template_part('templates/header');
