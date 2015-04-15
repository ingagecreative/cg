<?php
/*
Template Name: Secondary
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'secondary'); ?>
<?php endwhile; ?>
