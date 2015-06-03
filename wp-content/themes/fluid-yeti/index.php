<?php get_template_part('templates/page', 'header');?>
<section class="hero-secondary" style="background:url(<?php the_field('hero_bg_blog', get_option('page_for_posts')) ?>)">
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
		<div class="medium-12 columns">
			<?php if (roots_display_sidebar()):?>
				<aside class="sidebar" role="complementary">
					<?php include roots_sidebar_path();?>
				</aside><!-- /.sidebar -->
			<?php endif;?>
		</div>
	</div>
	<div class="row">
		<div class="medium-12 columns">
			<?php if (!have_posts()):?>
				<p><?php _e('Sorry, no results were found.', 'roots');?></p>
				<?php get_search_form();?>
			<?php endif;?>

			<?php while (have_posts()):the_post();?>
				<?php get_template_part('templates/content', get_post_format());?>
			<?php endwhile;?>
		</div>
		<?php if ($wp_query->max_num_pages > 1):?>
			<?php echo roots_numbered_pagination();?>
		<?php endif;?>
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