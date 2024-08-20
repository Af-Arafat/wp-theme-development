<?php

function my_theme_support() {
    /** site title **/
	add_theme_support( 'title-tag' );

	/** HTML5 support **/
	add_theme_support( 'html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script', 'widgets' ) );

	/** custom header **/
	add_theme_support( 'custom-header');


	/** Post support **/
	add_theme_support('post-thumbnails');
	add_theme_support('post-formats', array('aside', 'image', 'video', 'link', 'quote', 'status', 'audio', 'chat'));

	/** automatic feed link **/
	add_theme_support('automatic-feed-links');

}
add_action( 'after_setup_theme', 'my_theme_support' );


add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


//for all script
include_once ('inc/common/script.php');

// theme Function
include_once ('inc/theme_functions.php');

// Kirki customizer.
if ( class_exists( 'Kirki' ) ) {
    include_once('inc/theme_kirki.php');
}
