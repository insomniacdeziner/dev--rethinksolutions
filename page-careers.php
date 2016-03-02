<?php
/*
 Template Name: Careers
 */
?>
<?php get_header(); ?>

<main class="main" role="main" >
<?php get_template_part('partials/section', 'sub-banner'); ?> 
<div class="wrap">
	<?php get_template_part('partials/section', 'page-title'); ?> 
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
	
	<?php // open the WordPress loop
		if (have_posts()) : while (have_posts()) : the_post();

	// are there any rows within within our flexible content?
	if( have_rows('careers_wrapper') ): 

		// loop through all the rows of flexible content
		while ( have_rows('careers_wrapper') ) : the_row();

		if( get_row_layout() == 'career_content' )
			get_template_part('partials/section', 'careers');

		endwhile; // close the loop of flexible content
		endif; // close flexible content conditional

	endwhile; endif; // close the WordPress loop ?>

</div>

</main>


<?php get_footer(); ?>
