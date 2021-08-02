<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header id="homeID" class="container-big header-section">
        <?php if(get_field('hero_logo_image')) : ?>
            <img src="<?php esc_url(the_field('hero_logo_image')) ?>" alt="<?php bloginfo('name') ?>" class="hero-img">
        <?php endif; ?>
        <?php if( have_rows('hero_slider') ): ?>
            <div id="special-slider" class="slick-slider">
            <?php while( have_rows('hero_slider') ) : the_row(); ?>
            <div class="slick-slide">
                <?php if(get_sub_field('slider_image')) : ?>
                    <img src="<?php esc_url(the_sub_field('slider_image')) ?>"> 
                <?php endif; ?>
                <?php if(get_sub_field('slider_text')) : ?>
                    <div class="slider-text slider-caption"><?php esc_html(the_sub_field('slider_text')) ?></div>
                <?php endif; ?>
            </div>   
            <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <div id="my-arrow-next">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/arrow-left.png">
        </div>
        <div id="my-arrow-prev">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/arrow-right.png">
        </div>
       <div class="navigation-section">
           <div>
                <?php if(get_field('theme_logo', 'option')) : ?>
                    <a href="<?php echo esc_url(home_url()) ?>">
                        <img src="<?php esc_url(the_field('theme_logo', 'option')) ?>" alt="<?php bloginfo('name') ?>">
                    </a>
                <?php endif; ?>
           </div>
           <div class="nav-section">
               <div class="nav-item">
                   <?php if(get_field('home_anchor', 'option')) : ?>
                    <a href="#homeID">
                        <?php esc_html(the_field('home_anchor', 'option')) ?>
                    </a>
                   <?php endif; ?>
               </div>
               <div class="nav-item">
                   <?php if(get_field('about_site_anchor', 'option')) : ?>
                    <a href="#aboutSiteID">
                        <?php esc_html(the_field('about_site_anchor', 'option')) ?>
                    </a>
                   <?php endif; ?>
               </div>
               <div class="nav-item">
                   <?php if(get_field('price_list_anchor', 'option')) : ?>
                    <a href="#priceListID">
                        <?php esc_html(the_field('price_list_anchor', 'option')) ?>
                    </a>
                   <?php endif; ?>
               </div>
               <div class="nav-item">
                   <?php if(get_field('photo_gallery_anchor', 'option')) : ?>
                    <a href="#photoGalleryID">
                        <?php esc_html(the_field('photo_gallery_anchor', 'option')) ?>
                    </a>
                   <?php endif; ?>
               </div>
               <div class="nav-item">
                   <?php if(get_field('contact_author_anchor', 'option')) : ?>
                    <a href="#contactAuthorID">
                        <?php esc_html(the_field('contact_author_anchor', 'option')) ?>
                    </a>
                   <?php endif; ?>
               </div>
           </div>
           <div class="nav-button">
               <span>&#8213;</span>
               <span>&#8213;</span>      
           </div>
           <div class="mob-menu hide">
                <div class="nav-item">
                   <?php if(get_field('home_anchor', 'option')) : ?>
                    <a href="#homeID">
                        <?php esc_html(the_field('home_anchor', 'option')) ?>
                    </a>
                   <?php endif; ?>
               </div>
               <div class="nav-item">
                   <?php if(get_field('about_site_anchor', 'option')) : ?>
                    <a href="#aboutSiteID">
                        <?php esc_html(the_field('about_site_anchor', 'option')) ?>
                    </a>
                   <?php endif; ?>
               </div>
               <div class="nav-item">
                   <?php if(get_field('price_list_anchor', 'option')) : ?>
                    <a href="#priceListID">
                        <?php esc_html(the_field('price_list_anchor', 'option')) ?>
                    </a>
                   <?php endif; ?>
               </div>
               <div class="nav-item">
                   <?php if(get_field('photo_gallery_anchor', 'option')) : ?>
                    <a href="#photoGalleryID">
                        <?php esc_html(the_field('photo_gallery_anchor', 'option')) ?>
                    </a>
                   <?php endif; ?>
               </div>
               <div class="nav-item">
                   <?php if(get_field('contact_author_anchor', 'option')) : ?>
                    <a href="#contactAuthorID">
                        <?php esc_html(the_field('contact_author_anchor', 'option')) ?>
                    </a>
                   <?php endif; ?>
               </div>         
           </div>
        </div>
    </header>