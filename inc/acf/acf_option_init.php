<?php

add_action('acf/init', function() {

  if( function_exists('acf_add_options_page') ) {

    $option_page = acf_add_options_page([
        'page_title'    => __('Theme General Settings'),
        'menu_title'    => __('Theme Settings'),
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ]);
  }  
});