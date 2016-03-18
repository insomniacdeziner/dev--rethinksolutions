<div class="whitepaper--content">
	<?php $whitepaper_image = get_sub_field('whitepaper_image'); ?>
	<img src="<?php echo $whitepaper_image['url']; ?>" alt="<?php echo $whitepaper_image['alt'] ?>" />

	<div class="copy">
	<span class="title--border"></span>
	<h2 class="product--title"><?php the_sub_field('whitepaper_title'); ?></h2>
		<?php the_sub_field('whitepaper_description'); ?>
	</div>
	<div class="whitepaper--button">
		<a href="<?php the_sub_field('whitepaper_download_link'); ?>" target="_blank" class="whitepaper--btn">Download</a>
	</div>
</div>

		
		
		
