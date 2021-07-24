<section class="container-big" style="background-image: url('<?php esc_url(the_field('price_list_section_background')) ?>');">
  <div class="container-small">
    <div>
      <?php if(get_field('price_list_title')) : ?>
        <h3><?php esc_html(the_field('price_list_title')) ?></h3>
      <?php endif; ?>
      <?php if(get_field('price_list_subtitle')) : ?>
        <h5><?php esc_html(the_field('price_list_subtitle')) ?></h5>
      <?php endif; ?>
      <?php if(get_field('price_list_subtext')) : ?>
        <p><?php esc_html(the_field('price_list_subtext')) ?></p>
      <?php endif; ?>
    </div>
    <div>
      <?php if(get_field('price_list_table_title')) : ?>
        <h3><?php esc_html(the_field('price_list_table_title')) ?></h3>
      <?php endif; ?>
      <div>
        <div class="row">
          <?php if( have_rows('price_list_table_head') ): ?>
            <?php while( have_rows('price_list_table_head') ) : the_row(); ?>
              <div class="col-2">
                <p><?php esc_html(the_sub_field('table_head_text')) ?></p>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="row">
          <?php if( have_rows('price_list_table') ): ?>
            <?php while( have_rows('price_list_table') ) : the_row(); ?>
              <div class="col-2">
                <p><?php esc_html(the_sub_field('length')) ?></p>
              </div>
              <div class="col-2">
                <p><?php esc_html(the_sub_field('first_price')) ?></p>
              </div>
              <div class="col-2">
                <p><?php esc_html(the_sub_field('second_price')) ?></p>
              </div>
              <div class="col-2">
                <p><?php esc_html(the_sub_field('third_price')) ?></p>
              </div>
              <div class="col-2">
                <p><?php esc_html(the_sub_field('fourth_price')) ?></p>
              </div>
              <div class="col-2">
                <p><?php esc_html(the_sub_field('fifth_price')) ?></p>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div>
      <?php if(get_field('price_list_after_table_text')) : ?>
        <?php esc_html(the_field('price_list_after_table_text')) ?>
      <?php endif; ?>
    </div>
  </div>
</section>