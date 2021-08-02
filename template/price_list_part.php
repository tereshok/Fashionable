<section id="priceListID" class="background price-list" style="background-image: url('<?php esc_url(the_field('price_list_section_background')) ?>');">
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
    <div class="table-section">
      <?php if(get_field('price_list_table_title')) : ?>
        <h3 class="price-list-table-title"><?php esc_html(the_field('price_list_table_title')) ?></h3>
      <?php endif; ?>
          <div class="price-list-table-head row">
            <?php if( have_rows('price_list_table_head') ): ?>
              <?php while( have_rows('price_list_table_head') ) : the_row(); ?>
                <div class="table-head-text col-2">
                  <span>
                    <?php esc_html(the_sub_field('table_head_text')) ?>
                  </span>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        <div class="price-list-table row">
          <?php $itr_number = 0; ?>
          <?php if( have_rows('price_list_table') ): ?>
            <?php while( have_rows('price_list_table') ) : the_row(); ?>
            <div class="table-line <?php if($itr_number == 0) echo 'line-first';  ?>">
              <div class="length col-2">
                <?php esc_html(the_sub_field('length')) ?>
              </div>
              <div class="col-2">
              <?php if($itr_number != 0) echo '€';  ?>
                <?php esc_html(the_sub_field('first_price')) ?>
              </div>
              <div class="col-2">
              <?php if($itr_number != 0) echo '€';  ?>
                <?php esc_html(the_sub_field('second_price')) ?>
              </div>
              <div class="col-2">
              <?php if($itr_number != 0) echo '€';  ?>
                <?php esc_html(the_sub_field('third_price')) ?>
              </div>
              <div class="col-2">
              <?php if($itr_number != 0) echo '€';  ?>
                <?php esc_html(the_sub_field('fourth_price')) ?>
              </div>
              <div class="col-2">
              <?php if($itr_number != 0) echo '€';  ?>
                <?php esc_html(the_sub_field('fifth_price')) ?>
              </div>
            </div>
            <?php $itr_number++; ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
    </div>
    <div class="price-list-after-table-text">
      <?php if(get_field('price_list_after_table_text')) : ?>
        <?php esc_html(the_field('price_list_after_table_text')) ?>
      <?php endif; ?>
    </div>
  </div>
</section>