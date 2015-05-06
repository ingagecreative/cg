<section class="home-content">
  <div class="row">
  <?php while (have_posts()) : the_post(); ?>
    <div class="medium-12 columns">
      <div class="text-center">
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); }  ?>
      </div>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
   <?php endwhile; ?>
  </div>  
</section>