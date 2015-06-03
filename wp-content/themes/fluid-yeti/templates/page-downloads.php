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
				<?php echo do_shortcode("[download_cart]"); ?>
		</div>
	</div>
	<div class="row">
		<div class="medium-12 columns">
			<h1><?php the_field('headline'); ?></h1>
			<?php the_field('text') ?>
		</div>
	</div>
</section>
<section class="home-content">
	<div class="row">
		<?php		
			$args = array( 'post_type' => 'download', 'posts_per_page' => 15 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
		?>
			<div class="medium-4 columns downloads">
				<div class="download-image">
					<span class="icon"><i class="fa fa-music"></i></span>
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); }  ?>
				</div>
				<h2 class="text-left"><?php the_title(); ?></h2>
				<?php the_content(); ?>	
				<p class="text-center">
					<a href="<?php the_permalink(); ?>" class="button button-blue">View Item</a>
				</p>
			</div>
		<?php endwhile; wp_reset_query(); ?>
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



