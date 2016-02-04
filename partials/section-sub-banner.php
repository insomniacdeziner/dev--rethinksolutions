
<?php if( have_rows('sub_banner') ): ?>
		<section class="banner" id="post-<?php the_ID(); ?>">
			<?php while( have_rows('sub_banner') ): the_row(); 
				$sub_image = get_sub_field('sub_banner_image');
			?>
			<div class="wrap">
			<div class="site--banner__copy">
				<?php the_sub_field('sub_banner_content'); ?>
			</div>
			</div>
				<img class="background--image_partial" src="<?php echo $sub_image['url']; ?>" alt="<?php echo $sub_image['alt'] ?>" />
		<?php endwhile; ?>
		
	</section>
<?php endif; ?>
	
	
	
	
	
	
	
	
	
	
