<?php global $img_src; ?>

<div class="contain-to-grid">
  <header>
    <nav class="top-bar" data-topbar>
      <ul class="title-area">
        <li class="name"> <h1><a href="<?php echo esc_url(home_url()); ?>"><img src="<?php the_field('main_logo', 'options') ?>"></a></h1> </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>
      <section class="top-bar-section">
        <?php if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'right'));
        endif; ?>
      </section>
    </nav>
  </header>
  <section class="main-sub-nav show-for-large-up">
    <div class="row medium-collapse">
      <div class="medium-10 columns">
        <span class="subscribe-text">Subscribe to Coz's Email List</span>
        <?php echo do_shortcode("[constantcontactapi formid='1']"); ?>  
      </div>
      <div class="medium-2 columns social-container">
        <ul class="social-header">
          <?php if(have_rows('social_media', 'option')) : ?>
            <?php while(have_rows('social_media', 'option')) : the_row(); ?>
              <li><a href="<?php the_sub_field('social_link') ?>"><?php the_sub_field('social_icon') ?></a></li>
            <?php endwhile; ?>
          <?php else: endif; ?>
        </ul>
      </div>
    </div>      
  </section>
  <div class="clearfix"></div>
</div> <!-- contain-to-grid -->