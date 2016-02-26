<?php
/*
 Template Name: Leadership
 */
?>
<?php get_header(); ?>

<main class="main" role="main" >
<?php get_template_part('partials/section', 'sub-banner'); ?> 
<div class="wrap">
	<?php get_template_part('partials/section', 'page-title'); ?> 
	
	
	<?php // open the WordPress loop
		if (have_posts()) : while (have_posts()) : the_post();

	// are there any rows within within our flexible content?
	if( have_rows('leadership_wrapper') ): 

		// loop through all the rows of flexible content
		while ( have_rows('leadership_wrapper') ) : the_row();

		if( get_row_layout() == 'leadership_content' )
			get_template_part('partials/section', 'leadership');

		endwhile; // close the loop of flexible content
		endif; // close flexible content conditional

	endwhile; endif; // close the WordPress loop ?>

</div>

</main>


<?php get_footer(); ?>
