<section id="photoGalleryID" class="photo-gallery">
  <div>
    <?php if(get_field('gallery_title')) : ?>
      <h3 class="gallery-title"><?php esc_html(the_field('gallery_title')) ?></h3>
    <?php endif; ?>
  </div>
  <div class="gallery-image">
    <?php $images = get_field('gallery_image'); ?>  
      <?php if(get_field('gallery_image')) : ?>
        <?php foreach($images as $image) : ?>  
          <div class="image-item">
            <img src="<?php echo esc_url($image) ?>">
          </div>
        <?php endforeach; ?>  
      <?php endif; ?>    
  </div>
</section>