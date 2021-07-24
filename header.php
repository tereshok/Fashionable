<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="container-big">
        <div id="post-special-slider" class="slick-slider">
            <?php if( have_rows('hero_slider') ): ?>
                <?php while( have_rows('hero_slider') ) : the_row(); ?>
                    <div class="slick-slide">
                        <img src="<?php the_sub_field('slider_image') ?>">
                        <p><?php the_sub_field('slider_text') ?></p>
                    </div>
      
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <nav class="navbar navbar-expand-md navbar-light" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                wp_nav_menu( array(
                    'theme_location'    => 'header',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
                <div>
                    <?php get_search_form(); ?>
                </div>
            </div>
        </nav>
    </header>