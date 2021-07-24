<section class="container-big price-list" style="background-image: url('<?php esc_url(the_field('price_list_section_background')) ?>');">
  <div class="container-small">
    <div>
      <?php if(get_field('price_list_title')) : ?>
        <h3 class="price-list-title"><?php esc_html(the_field('price_list_title')) ?></h3>
      <?php endif; ?>
      <?php if(get_field('price_list_subtitle')) : ?>
        <h5 class="price-list-subtitle"><?php esc_html(the_field('price_list_subtitle')) ?></h5>
      <?php endif; ?>
      <?php if(get_field('price_list_subtext')) : ?>
        <div class="price-list-subtext"><?php esc_html(the_field('price_list_subtext')) ?></div>
      <?php endif; ?>
    </div>
    <div>
      <?php if(get_field('price_list_table_title')) : ?>
        <h3 class="price-list-table-title"><?php esc_html(the_field('price_list_table_title')) ?></h3>
      <?php endif; ?>
      <div>
        <div class="row price-list-table-head">
          <?php if( have_rows('price_list_table_head') ): ?>
            <?php while( have_rows('price_list_table_head') ) : the_row(); ?>
              <span class="col-2 table-head-text">
                <?php esc_html(the_sub_field('table_head_text')) ?>
              </span>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="row price-list-table">
          <?php if( have_rows('price_list_table') ): ?>
            <?php while( have_rows('price_list_table') ) : the_row(); ?>
              <div class="col-2 length">
                <?php esc_html(the_sub_field('length')) ?>
              </div>
              <div class="col-2">
                <?php esc_html(the_sub_field('first_price')) ?>
              </div>
              <div class="col-2">
                <?php esc_html(the_sub_field('second_price')) ?>
              </div>
              <div class="col-2">
                <?php esc_html(the_sub_field('third_price')) ?>
              </div>
              <div class="col-2">
                <?php esc_html(the_sub_field('fourth_price')) ?>
              </div>
              <div class="col-2">
                <?php esc_html(the_sub_field('fifth_price')) ?>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="price-list-after-table-text">
      <?php if(get_field('price_list_after_table_text')) : ?>
        <?php esc_html(the_field('price_list_after_table_text')) ?>
      <?php endif; ?>
    </div>
  </div>
</section>