<section id="contactAuthorID" class="background contact-author" style="background-image: url('<?php esc_url(the_field('contact_section_background')) ?>');">
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
        <div class="col-lg-6 col-sm-12 contact-form-block">
          <?php if(get_field('contact_form')) : ?>
            <?php esc_html(the_field('contact_form'))?>
          <?php endif; ?>
          <div class="contact-phone-number">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/phone.png">
            <?php if(get_field('contact_phone_number')) : ?>
              <?php esc_html(the_field('contact_phone_number'))?>
            <?php endif; ?>
            </div>
            <div class="contact-email">  
            <img src="<?php echo get_template_directory_uri();?>/assets/images/email.png">
            <?php if(get_field('contact_email')) : ?>
              <?php esc_html(the_field('contact_email'))?>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12">
          <?php
          $location = get_field('contact_map');
          if( $location ): ?>
          <div class="acf-map" data-zoom="16">
            <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>">
          </div>
				</div>
			<?php endif; ?>
        <div class="contact-addres">
          <?php if(get_field('contact_addres')) : ?>
            <?php esc_html(the_field('contact_addres'))?>
          <?php endif; ?>
        </div>
        </div>
    </div>
  </div>
</section>