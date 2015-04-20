<?php get_template_part('templates/page', 'header');?>
<section class="hero-secondary" style="background:url(<?php echo esc_url(home_url());?>/wp-content/themes/fluid-yeti/assets/img/hero2.jpg)">
	<div class="quote-box">
		<div class="row">
			<div class="medium-12">
				<p>...this is a spot where you can put your own personalized quotes. The idea would be to pick a hero image that matches the quote text. I took this photo from your Facebook page, it could be about conquering your fears to experience something amazing and life changing...<span> - Coz Green</span></p>
			</div>
		</div>
	</div>
</section>
<section class="blog">
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