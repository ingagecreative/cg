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
		<div class="medium-12 columns">
			<h1><?php the_field('secondary_header'); ?></h1>
			<?php the_field('secondary_text') ?>
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





