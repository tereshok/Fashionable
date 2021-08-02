<?php

add_action('wp_enqueue_scripts', function(){
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/styles/bootstrap.min.css');
  wp_enqueue_style('jquery-fancybox', get_template_directory_uri() . '/assets/styles/jquery.fancybox.min.css');
  wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/styles/slick.css');
  wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/styles/main.css');
  
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrap-bundle-min', get_template_directory_uri() . '/assets/scripts/bootstrap.bundle.min.js');
  wp_enqueue_script('jquery-fancybox', get_template_directory_uri() . '/assets/scripts/jquery.fancybox.min.js');
  wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/scripts/slick.min.js');
  wp_enqueue_script('map-js', get_template_directory_uri() . '/assets/scripts/map.js');
  wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/scripts/main.js');

});