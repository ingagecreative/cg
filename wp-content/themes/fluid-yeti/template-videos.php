<?php
/*
Template Name: Videos
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'videos'); ?>
<?php endwhile; ?>
