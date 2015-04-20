<?php
$src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(5600, 1000), false, '');
?>
<article class="medium-4 columns article-snippet">
	<div class="article-bg" style="background: url(<?php echo $src[0];?> );">
		<div class="overlay">
			<h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
			<?php the_excerpt();?>
		</div>
	</div>    
</article>
