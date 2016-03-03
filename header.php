<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ) ?>" />
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="<?php bloginfo( 'description' ) ?>" />

		<?php wp_head() ?>

	</head>

	<body <?php body_class() ?> itemscope itemtype="http://schema.org/WebPage">

		<?php
		do_action( 'before_main_content' );
		get_template_part( 'components/bs-main-navbar' );
		?>

		<header itemscope itemprop="http://www.schema.org/WPHeader" class="page-header">

		</header>
