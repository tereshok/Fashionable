<section id="aboutSiteID" class="background about-site" style="background-image: url('<?php esc_url(the_field('site_section_background')) ?>');">
  <div class="container-small">
    <?php if(get_field('site_title')) : ?>
      <h1 class="site-title"><?php esc_html(the_field('site_title')) ?></h1>
    <?php endif; ?>
    <?php if(get_field('site_subtitle')) : ?>
      <h5 class="site-subtitle"><?php esc_html(the_field('site_subtitle')) ?></h5>
    <?php endif; ?>
    <div class="site-content">
    <?php if(get_field('site_avatar')) : ?>
        <img src="<?php esc_url(the_field('site_avatar')) ?>" class="site-avatar">
      <?php endif; ?>
      <?php if(get_field('site_text')) : ?>
        <div class="site-text"><?php esc_html(the_field('site_text')) ?></div>
      <?php endif; ?>
    </div>
    <div>
      <?php if(get_field('site_subtext')) : ?>
        <div class="site-subtext"><?php esc_html(the_field('site_subtext')) ?></div>
      <?php endif; ?>
    </div>
    <div class="site-autograph">
      <?php if(get_field('site_autograph_first_part')) : ?>
        <div class="site-autograph-first"><?php esc_html(the_field('site_autograph_first_part')) ?></div>
      <?php endif; ?>
      <?php if(get_field('site_autograph_second_part')) : ?>
        <div class="site-autograph-second"><?php esc_html(the_field('site_autograph_second_part')) ?></div>
      <?php endif; ?>
    </div>
  </div>
</section>