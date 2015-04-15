<footer role="contentinfo">
  <div class="row">
    <div class="medium-12 columns">
      <?php dynamic_sidebar('sidebar-footer'); ?>
    </div>
  </div>
  <div class="footer-info">
	  <div class="row">
	  	<div class="medium-8 columns">
	  		<?php dynamic_sidebar('sidebar-footernav'); ?>
	  	</div>
	  	<div class="medium-4 columns">
	  		<ul class="right">
	  			<?php if(have_rows('social_media', 'option')) : ?>
	  				<?php while(have_rows('social_media', 'option')) : the_row(); ?>
	  					<li><a href="<?php the_sub_field('social_link') ?>"><?php the_sub_field('social_icon') ?></a></li>
	  				<?php endwhile; ?>
	  			<?php else: endif; ?>
	  		</ul>
	  	</div>
	  </div>
  </div>
  <div class="row">
  	<div class="medium-12 columns text-center;">
  		<p class="legal">Copyright &copy; <?php echo date("Y") ?> Coz Green.</p>
  	</div>
  </div>
</footer>

<?php wp_footer(); ?>
