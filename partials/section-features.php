 <?php 
	 $label = get_sub_field('image_position'); 
	 $one_image = get_sub_field('featured_image');
?>

<div class="featured--item_content">
	<h2 class="product--title"><span class="title--border"></span><?php the_sub_field('feat_title'); ?></h2>
	<div class="copy">
		<?php the_sub_field('feat_copy'); ?>
	</div>
	
	<div class="icons">
		<?php the_sub_field('icon_wrapper'); ?>
	</div>		
</div>

		
		
