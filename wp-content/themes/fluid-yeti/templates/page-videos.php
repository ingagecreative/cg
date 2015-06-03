<section class="hero-secondary" style="background:url(<?php the_field('hero_background_image') ?>)">
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
		<div class="medium-12 columns">
			<h1><?php the_field('content_header'); ?></h1>
			<?php the_field('content_text') ?>
		</div>
	</div>
	<div class="row">
		<?php if(have_rows('videos_repeater')) : ?>
			<?php $count = 1; ?>
			<?php while(have_rows('videos_repeater')) : the_row(); ?>
				<div class="medium-4 columns">
					<a href="#" class="videos" data-reveal-id="vidModal-<?php echo $count ?>">
						<img src="<?php echo esc_url(home_url()); ?>/wp-content/themes/fluid-yeti/assets/img/play-standard.png" class="video-play">
						<img src="http://img.youtube.com/vi/<?php the_sub_field('video_id') ?>/0.jpg" alt="" class="video-thumb">
					</a>
					<h2 class="video-title"><?php the_sub_field('video_title') ?></h2>
					<p><?php the_sub_field('video_description') ?></p>

					<div id="vidModal-<?php echo $count ?>" class="reveal-modal medium" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
					  <div class="flex-video">
					  	<iframe src="https://www.youtube.com/embed/<?php the_sub_field('video_id') ?>?rel=0" frameborder="0" allowfullscreen></iframe>
					  </div>
					  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
					</div>
				</div>
				<?php $count++ ?>
			<?php endwhile; ?>
		<?php else: endif; ?>
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
