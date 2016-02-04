<div class="casestudy--content">
	<?php $case_study_image = get_sub_field('case_study_image'); ?>
	<img src="<?php echo $case_study_image['url']; ?>" alt="<?php echo $case_study_image['alt'] ?>" />

	<div class="copy">
	<span class="title--border"></span>
	<h2 class="product--title"><?php the_sub_field('case_study_title'); ?></h2>

		<?php the_sub_field('case_study_description'); ?>
	</div>
	<div class="case-study--form">
		<?php the_sub_field('case_study_form'); ?>
	</div>
</div>

		
		
		
