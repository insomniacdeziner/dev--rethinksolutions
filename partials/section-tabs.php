
<?php if( have_rows('nav_tab_sections') ): ?>
	
	<?php while( have_rows('nav_tab_sections') ): the_row(); ?>
	
		<?php if(get_row_layout() == 'tab_sections' ): ?>
	
				<div class="product--wrap product--image__right">
						<div class="product--image">
							<?php $tab_image = get_sub_field('tab_image'); ?>
						   <img src="<?php echo $tab_image['url']; ?>" alt="<?php echo $tab_image['alt'] ?>" />
						</div>
						<div class="wrap">
							<div class="product--content">
								<a name="<?php the_sub_field('anchor_name'); ?>"></a>
								<span class="title--border"></span>
								<h2 class="product--title"><?php the_sub_field('tab_title'); ?></h2>
								<div class="copy"><?php the_sub_field('tab_content'); ?></div>
							</div>
						</div>
				</div>

		<?php elseif(get_row_layout() == 'left_tab_sections' ): ?>
				<div class="product--wrap product--image__left">
						<div class="product--image">
							<?php $left_tab_image = get_sub_field('left_tab_image'); ?>
						   <img src="<?php echo $left_tab_image['url']; ?>" alt="<?php echo $left_tab_image['alt'] ?>" />
						</div>
						<div class="wrap">
							<div class="product--content">
								<a name="<?php the_sub_field('left_anchor_name'); ?>"></a>
								<span class="title--border"></span>
								<h2 class="product--title"><?php the_sub_field('left_tab_title'); ?></h2>
								<div class="copy"><?php the_sub_field('left_tab_content'); ?></div>
							</div>
						</div>
				</div>					
			<?php ?>

		<?php endif; ?>	

	<?php endwhile; ?>
	
<?php endif; ?>	
	
