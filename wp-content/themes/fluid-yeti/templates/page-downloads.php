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
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>	
				<p class="text-center">
					<a href="<?php the_permalink(); ?>" class="button button-orange">View Item</a>
				</p>
			</div>
		<?php endwhile; ?>
	</div>
</section>





