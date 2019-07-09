<?php

/**
 * enqueue scripts and styles.
 */
function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style( 'font-awesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Work+Sans:300,400,500&display=swap');
    wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.3.1.slim.min.js');
    wp_enqueue_script( 'popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
    wp_enqueue_script( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
    wp_enqueue_script( 'portfolio', get_template_directory_uri() . '/js/portfolio.js', array ( 'jquery' ), 1.1, true);
   
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


/**
 * add theme support
 */

 function cpb_init() {
     add_theme_support( 'post-thumbnails' );
     add_theme_support( 'title-tag' );
     add_theme_support( 'html5', 
        array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) 
    );
 }
 add_action( 'after_setup_theme', 'cpb_init' );