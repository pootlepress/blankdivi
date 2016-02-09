<?php
/*
	Divi Child Functions
*/
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function ppdc_enqueue_scripts() {
	$stylesheet = get_template_directory_uri() . '/style.css';
	wp_enqueue_style( 'divi-parent', $stylesheet );
}
add_action( 'wp_enqueue_scripts', 'ppdc_enqueue_scripts' );
