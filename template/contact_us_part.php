<section class="container-big contact-us" style="background-image: url('<?php esc_url(the_field('contact_us_background')) ?>');">
  <div class="container-small contact-us-container">
    <?php if(get_field('contact_us_first_line')) : ?>
      <h5 class="contact-us-first-title"><?php esc_html(the_field('contact_us_first_line')) ?></h5>
    <?php endif; ?>
    <?php if(get_field('contact_us_second_line')) : ?>
      <h5 class="contact-us-second-title"><?php esc_html(the_field('contact_us_second_line')) ?></h5>
    <?php endif; ?>
    <?php if(get_field('contact_us_link_title')) : ?>
      <a href="#" class="contact-us-link"><?php esc_html(the_field('contact_us_link_title')) ?></a>
    <?php endif; ?>
  </div>
</section>