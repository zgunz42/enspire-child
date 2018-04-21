<?php

function alx_scripts() {
	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/jquery.flexslider.min.js', array( 'jquery' ),'', false );
	wp_enqueue_script( 'fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ),'', true );
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery' ),'', true );
	wp_enqueue_script( 'prism', get_stylesheet_directory_uri() . '/js/prism.js', true);
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ),'', true );
	if ( is_singular() ) { wp_enqueue_script( 'sharrre', get_template_directory_uri() . '/js/jquery.sharrre.min.js', array( 'jquery' ),'', true ); }
	if ( is_singular() && get_option( 'thread_comments' ) )	{ wp_enqueue_script( 'comment-reply' ); }
}  

function alx_styles() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	if ( !get_theme_mod('responsive') ) { wp_enqueue_style( 'responsive', get_template_directory_uri().'/responsive.css' ); }
	if ( get_theme_mod('custom') ) { wp_enqueue_style( 'custom', get_template_directory_uri().'/custom.css' ); }
	wp_enqueue_style('prism', get_stylesheet_directory_uri() . '/css/prism.css');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/fonts/font-awesome.min.css' );
}