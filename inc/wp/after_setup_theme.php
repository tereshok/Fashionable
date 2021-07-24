<?php

add_action('after_setup_theme', function(){
  register_nav_menu('header', 'Primary menu');
});

add_action( 'after_setup_theme', function (){
  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
});
