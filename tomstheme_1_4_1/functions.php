<?php

/* Every theme template is going to need this! */
function tricks_init() {
  wp_enqueue_style('style', get_stylesheet_uri());

  if (!is_admin()) {
    wp_deregister_script( 'jquery' );

    // Load the copy of jQuery that comes with WordPress
    // Load it in the footer for faster page loading
    wp_register_script( 'jquery', '/wp-includes/js/jquery/jquery.js', FALSE, '1.12.4', TRUE);
  }

  wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), NULL, TRUE);
}

add_action('wp_enqueue_scripts', 'tricks_init');

// Theme setup
function tricks_setup() {

  // Navigation Menus
  register_nav_menus(array(
    'primary' => __( 'Primary Menu'),
    'footer' => __( 'Footer Menu'),
  ));
}

add_action('after_setup_theme', 'tricks_setup');

 ?>
