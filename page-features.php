<?php
/*
 Template Name: Features 
 */
?>
<?php get_header(); ?>

<main class="main" role="main" >
<?php get_template_part('partials/section', 'banner'); ?> 
<div class="wrap">
	<?php get_template_part('partials/section', 'page-title'); ?> 
	<?php get_template_part('partials/section', 'content_area'); ?> 

<?php // open the WordPress loop
if (have_posts()) : while (have_posts()) : the_post();

	// are there any rows within within our flexible content?
	if( have_rows('feat_wrapper') ): 

		// loop through all the rows of flexible content
		while ( have_rows('feat_wrapper') ) : the_row();

		if( get_row_layout() == 'feat_content' )
			get_template_part('partials/section', 'features');
			
		endwhile; // close the loop of flexible content
	endif; // close flexible content conditional

endwhile; endif; // close the WordPress loop ?>
</section>

</div>

<?php get_template_part('partials/section', 'client-logos'); ?> 
<?php get_template_part('partials/section', 'request-demo'); ?> 	

</main>



<?php get_footer(); ?>
