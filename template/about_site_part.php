<section class="container-big" style="background-image: url('<?php esc_url(the_field('site_section_background')) ?>');">
  <div class="container-small">
    <?php if(get_field('site_title')) : ?>
      <h1><?php esc_html(the_field('site_title')) ?></h1>
    <?php endif; ?>
    <?php if(get_field('site_subtitle')) : ?>
      <h5><?php esc_html(the_field('site_subtitle')) ?></h5>
    <?php endif; ?>
    <div>
    <?php if(get_field('site_avatar')) : ?>
        <img src="<?php esc_url(the_field('site_avatar')) ?>">
      <?php endif; ?>
      <?php if(get_field('site_text')) : ?>
        <p><?php esc_html(the_field('site_text')) ?></p>
      <?php endif; ?>
    </div>
    <div>
      <?php if(get_field('site_autograph_first_part')) : ?>
        <p><?php esc_html(the_field('site_autograph_first_part')) ?></p>
      <?php endif; ?>
      <?php if(get_field('site_autograph_second_part')) : ?>
        <p><?php esc_html(the_field('site_autograph_second_part')) ?></p>
      <?php endif; ?>
    </div>
  </div>
</section>