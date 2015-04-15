<?php if(have_rows('hero_slider')) : ?>
	<?php while(have_rows('hero_slider')) : the_row(); ?>

		<section id="hero" class="hero" style="background:url(<?php the_sub_field('hero_background') ?>)" data-anchor-target="#hero" data-center-top="background-position:0 100%;" data-top-bottom="background-position:0 -50%;">
			<div class="row hero-vid-bg medium-collapse">
				<div class="medium-6 columns">
					<div class="flex-video">
					  	<iframe src="https://www.youtube.com/embed/<?php the_sub_field('hero_video') ?>?rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="medium-6 columns hero-vid-content">
					<h2><?php the_sub_field('video_header') ?></h2>
					<p><?php the_sub_field('video_excerpt') ?></p>
				</div>
			</div>
		</section>

	<?php endwhile; ?>
<?php else: endif; ?>

<section class="home-content">
	<div class="row">
		<div class="medium-12 columns">
			<h1><?php the_field('home_header'); ?></h1>
			<?php the_field('home_text') ?>
		</div>
		<div class="medium-12 columns text-center">
			<h2 class="cta"><?php the_field('call_to_action') ?></h2>
			<a href="<?php the_field('link_location') ?>" class="button"><?php the_field('button_text') ?></a>
		</div>
	</div>	
</section>
<section class="home-blue">
	<div class="row">
		<?php if(have_rows('box_section')) : ?>
			<?php while(have_rows('box_section')) : the_row(); ?>
				<div class="medium-4 columns">
					<div class="box-image"><img src="<?php the_sub_field('box_image') ?>"></div>
					<h3><?php the_sub_field('box_header') ?></h3>
					<?php the_sub_field('box_text') ?>
					<div class="clearfix"></div>
					<?php if (get_sub_field('link_to_internal_page')) { ?>
						<a href="<?php the_sub_field('box_link') ?>" class="button-white"><?php the_sub_field('button_text') ?></a>
					<?php } elseif (get_sub_field('link_to_video')) { ?>
						<a href="#" class="button-white" data-reveal-id="VideoModal"><?php the_sub_field('video_button_text') ?></a>
						<div id="VideoModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
						  <h2 id="modalTitle"><?php the_sub_field('video_title') ?></h2>
						  <p class="lead"><?php the_sub_field('video_description') ?></p>
						  <div class="flex-video">
						  	<iframe src="https://www.youtube.com/embed/<?php the_sub_field('youtube_video_url') ?>" frameborder="0" allowfullscreen></iframe>
						  </div>
						  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
						</div>
					<?php } ?>
					
				</div>
			<?php endwhile; ?>
		<?php else: endif; ?>
	</div>
</section>
<section class="twitter">
	<div class="row">
		<div class="medium-6 columns">
			<?php dynamic_sidebar('sidebar-home'); ?>
		</div>
		<div class="medium-6 columns">
			<?php dynamic_sidebar('sidebar-archive'); ?>
		</div>
	</div>
</section>
<?php if (get_field('show_green_section')): ?>
<section class="home-green">
	<div class="row">
		<div class="medium-8 columns">
			<h2><?php the_field('green_section_header') ?></h2>
			<p><?php the_field('green_section_text') ?></p>
		</div>
		<div class="medium-4 columns text-center">
			<a href="<?php the_field('green_link') ?>" class="button-white"><?php the_field('green_button_text') ?></a>
		</div>
	</div>
</section>
<?php endif ?>





