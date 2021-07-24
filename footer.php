<div class="container-big">
  <div>
    <?php if(get_field('theme_logo', 'option')) : ?>
      <a href="<?php echo esc_url(home_url()) ?>">
        <img src="<?php esc_url(the_field('theme_logo', 'option')) ?>" alt="<?php bloginfo('name') ?>">
      </a>
    <?php endif; ?>
  </div>
  <div>
    <p>
      <?php if(get_field('copyright_before_text', 'option')) : ?>
        <?php esc_html(the_field('copyright_before_text', 'option'))?>
      <?php endif; ?>
    </p>
    <p>
      <?php echo date("Y") ?>
    </p>
    <p>
      <?php if(get_field('copyright_after_text', 'option')) : ?>
        <?php esc_html(the_field('copyright_after_text', 'option'))?>
      <?php endif; ?>  
    </p>
    <p>      
      <?php if(get_field('copyright_link', 'option')) : ?>
        <a href="<?php esc_url(the_field('copyright_link', 'option')) ?>">
          <?php esc_html(the_field('copyright_link_title', 'option')) ?>
        </a>
      <?php endif; ?>    
    </p>
  </div>
</div>
<?php wp_footer();?>
  </body>
</html>