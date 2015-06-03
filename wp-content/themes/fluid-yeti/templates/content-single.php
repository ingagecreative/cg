<section class="hero-secondary" style="background:url(<?php the_field('hero_background', get_option('page_for_posts')) ?>)">
  <div class="quote-box">
    <div class="row">
      <div class="medium-12">
        <p><?php the_field('quote_text', get_option('page_for_posts')) ?><span> - <?php the_field('quote_name', get_option('page_for_posts')) ?></span></p>
      </div>
    </div>
  </div>
</section>
<section class="home-content">
  <div class="row">
  <?php while (have_posts()) : the_post(); ?>
    <div class="medium-12 columns">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
   <?php endwhile; ?>
  </div>
  <div class="row">
    <div class="medium-12 columns">
      <?php comments_template('/templates/comments.php'); ?>
    </div>
  </div>  
</section>
<?php if (get_field('show_green_section', get_option('page_for_posts'))): ?>
<section class="home-green">
  <div class="row">
    <div class="medium-8 columns">
      <h2><?php the_field('green_section_header', get_option('page_for_posts')) ?></h2>
      <p><?php the_field('green_section_text', get_option('page_for_posts')) ?></p>
    </div>
    <div class="medium-4 columns text-center">
      <a href="<?php the_field('green_link', get_option('page_for_posts')) ?>" class="button-white"><?php the_field('green_button_text', get_option('page_for_posts')) ?></a>
    </div>
  </div>
</section>
<?php endif ?>