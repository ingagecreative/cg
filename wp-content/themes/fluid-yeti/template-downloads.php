<?php
/*
Template Name: Downloads
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'downloads'); ?>
<?php endwhile; ?>
