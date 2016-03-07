 <?php 
	 $label = get_sub_field('image_position'); 
	 $one_image = get_sub_field('featured_image');
?>
<section class="feature">
	<div class="wrap">
		
		<div class="featured--image--<?php echo $label; ?>">
		   <img src="<?php echo $one_image['url']; ?>" alt="<?php echo $one_image['alt'] ?>" />
		</div>
		<div class="featured--item_content">
			<a name="section1"></a>
			<span class="title--border"></span>
			<h2 class="product--title"><?php the_sub_field('feature_content_title'); ?></h2>
			<div class="copy">
				<?php the_sub_field('featured_copy'); ?>
		</div>
	</div>
</section>

		
		
