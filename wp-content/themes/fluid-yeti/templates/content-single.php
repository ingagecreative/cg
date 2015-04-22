<section class="hero-secondary" style="background:url(<?php the_field('hero_background') ?>)">
  <div class="quote-box">
    <div class="row">
      <div class="medium-12">
        <p><?php the_field('quote_text') ?><span> - <?php the_field('quote_name') ?></span></p>
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
</section>