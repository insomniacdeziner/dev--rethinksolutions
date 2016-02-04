<?php
/*
 Template Name: Case Study
 */
?>
<?php get_header(); ?>

<main class="main" role="main" >
<?php get_template_part('partials/section', 'sub-banner'); ?> 

<div class="wrap" id="casestudies">
<?php get_template_part('partials/section', 'page-title'); ?> 
<div class="casestudy--introduction">
		<?php the_field('case_study_introduction'); ?>
	</div>

<?php // open the WordPress loop
if (have_posts()) : while (have_posts()) : the_post();

	// are there any rows within within our flexible content?
	if( have_rows('case_study_wrapper') ): 

		// loop through all the rows of flexible content
		while ( have_rows('case_study_wrapper') ) : the_row();

		if( get_row_layout() == 'case_study' )
			get_template_part('partials/section', 'case_study');

	endwhile; // close the loop of flexible content
	endif; // close flexible content conditional

endwhile; endif; // close the WordPress loop ?>

</div>
<?php get_template_part('partials/section', 'client-logos'); ?> 
<?php get_template_part('partials/section', 'request-demo'); ?> 	

</main>



<?php get_footer(); ?>
