<?php
/*
 Template Name: Whitepapers
  */
?>
<?php get_header(); ?>

<main class="main" role="main" >
<?php get_template_part('partials/section', 'sub-banner'); ?> 

<div class="wrap" id="whitepapers">
<?php get_template_part('partials/section', 'page-title'); ?> 

<div class="whitepaper--introduction">
		<?php the_field('page_introduction'); ?>
	</div>
</div>

<div class="wrap" id="whitepapers">

<?php // open the WordPress loop
if (have_posts()) : while (have_posts()) : the_post();

	// are there any rows within within our flexible content?
	if( have_rows('whitepaper_wrapper') ): 

		// loop through all the rows of flexible content
		while ( have_rows('whitepaper_wrapper') ) : the_row();

		if( get_row_layout() == 'whitepapers_items' )
			get_template_part('partials/section', 'whitepapers');

	endwhile; // close the loop of flexible content
	endif; // close flexible content conditional

endwhile; endif; // close the WordPress loop ?>

</div>
<?php get_template_part('partials/section', 'client-logos'); ?> 
<?php get_template_part('partials/section', 'request-demo'); ?> 	

</main>



<?php get_footer(); ?>
