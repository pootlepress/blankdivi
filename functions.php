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

function ppdc_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Header Banner', 'Divi' ),
		'id' => 'header-banner',
		'before_widget' => '<div id="%1$s" class="et_pb_widget %2$s">',
		'after_widget' => '</div> <!-- end .et_pb_widget -->',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	) );
}
add_action( 'widgets_init', 'ppdc_widgets_init' );
