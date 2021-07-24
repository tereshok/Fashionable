<section class="container-big">
  <div>
    <?php if(get_field('gallery_title')) : ?>
      <h3><?php esc_html(the_field('gallery_title')) ?></h3>
    <?php endif; ?>
  </div>
  <div>
    <?php $images = get_field('gallery_image'); ?>  
      <?php if(get_field('gallery_image')) : ?>
        <?php foreach($images as $image) : ?>  
          <div>
            <img src="<?php echo esc_url($image) ?>">
          </div>
        <?php endforeach; ?>  
      <?php endif; ?>    
  </div>
</section>