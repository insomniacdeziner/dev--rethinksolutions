<section class="content--left">	
		<div class="leadership">
				<div class="leadership--image">
					   <?php $leadership_image = get_sub_field('leadership_image'); ?>
					   <img src="<?php echo $leadership_image['url']; ?>" alt="<?php echo $leadership_image['alt'] ?>" />
				</div>
				<div class="leadership--content">
					
					<div class="leadership--name">
						<h2>
							<span class="title--border"></span>	<?php the_sub_field('leadership_name'); ?>
						</h2>
						<span class="leadership--title"><?php the_sub_field('leadership_title'); ?>
					</div>
					<div class="leadership--description">
						
						<?php the_sub_field('leadership_description'); ?>
					</div>
			</div>
	</section>



