<section class="container-big contact-author" style="background-image: url('<?php esc_url(the_field('contact_section_background')) ?>');">
  <div class="container-small">
    <div>
      <?php if(get_field('contact_author_title')) : ?>
        <h3 class="contact-author-title"><?php esc_html(the_field('contact_author_title'))?></h3>
      <?php endif; ?>
      <?php if(get_field('contact_author_subtitle')) : ?>
        <h3 class="contact-author-subtitle"><?php esc_html(the_field('contact_author_subtitle'))?></h3>
      <?php endif; ?>
    </div>
    <div class="row contact-block">
        <div class="col-6">
          <?php if(get_field('contact_form_shortcode')) : ?>
            <?php esc_html(the_field('contact_form_shortcode'))?>
          <?php endif; ?>
        </div>
        <div class="col-6">
          <?php
        $location = get_field('contact_map');
        if( $location ): ?>
          <div class="acf-map" data-zoom="16">
              <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
          </div>
        <?php endif; ?>
        </div>
        <div class="col-6">
          <?php if(get_field('contact_phone_number')) : ?>
            <p><?php esc_html(the_field('contact_phone_number'))?></p>
          <?php endif; ?>
          <?php if(get_field('contact_email')) : ?>
            <p><?php esc_html(the_field('contact_email'))?></p>
          <?php endif; ?>
        </div>
        <div class="col-6">
          <?php if(get_field('contact_addres')) : ?>
            <p><?php esc_html(the_field('contact_addres'))?></p>
          <?php endif; ?>
        </div>
    </div>
   
  </div>
</section>