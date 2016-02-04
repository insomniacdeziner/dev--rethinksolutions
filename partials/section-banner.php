<?php if( have_rows('banner') ): ?>
		<section class="banner" id="post-<?php the_ID(); ?>">
			<?php while( have_rows('banner') ): the_row(); 
				$banner_image = get_sub_field('banner_image');
			?>
			<div class="wrap">
			<div class="site--banner__copy">
				<?php the_sub_field('banner_copy'); ?>
			</div>
			</div>
				<img class="background--image_partial" src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt'] ?>" />
		<?php endwhile; ?>
		
	</section>
<?php endif; ?>
	
	
	
	
	
	
	
	
	
	
