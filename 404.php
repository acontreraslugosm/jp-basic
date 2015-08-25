<?php

$args = array(
		'response' => 404
);

wp_die( __( 'Page not found' ), __( 'Page not found' ), $args );
