<section class="container-big" style="background-image: url('<?php esc_url(the_field('contact_us_background')) ?>');">
  <div class="container-small">
    <?php if(get_field('contact_us_first_line')) : ?>
      <h5><?php esc_html(the_field('contact_us_first_line')) ?></h5>
    <?php endif; ?>
    <?php if(get_field('contact_us_second_line')) : ?>
      <h5><?php esc_html(the_field('contact_us_second_line')) ?></h5>
    <?php endif; ?>
    <?php if(get_field('contact_us_link_title')) : ?>
      <a href="#"><?php esc_html(the_field('contact_us_link_title')) ?></a>
    <?php endif; ?>
  </div>
</section>