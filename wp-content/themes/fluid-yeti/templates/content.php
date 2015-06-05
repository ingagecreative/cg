<div class="medium-4 columns downloads">
	<div class="download-image">
		<span class="icon"><i class="fa fa-newspaper-o"></i></span>
		<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); }  ?>
	</div>
	<h2 class="text-left"><?php the_title(); ?></h2>
	<?php the_excerpt();?>
	<p class="text-center button-p">
		<a href="<?php the_permalink(); ?>" class="button button-blue">Read More</a>
	</p>
</div>