<?php
/*
 Template Name: Products 
 */
?>
<?php get_header(); ?>

<main class="main" role="main" >
<?php get_template_part('partials/section', 'banner'); ?> 
<div class="wrap">
	<?php get_template_part('partials/section', 'page-title'); ?> 
</div>
<?php // open the WordPress loop
if (have_posts()) : while (have_posts()) : the_post();

	// are there any rows within within our flexible content?
	if( have_rows('product_page_content') ): 

		// loop through all the rows of flexible content
		while ( have_rows('product_page_content') ) : the_row();

		if( get_row_layout() == 'banner' )
			get_template_part('partials/stripe', 'banner');

		if( get_row_layout() == 'secondary_nav' )

			get_template_part('partials/section', 'products');


		endwhile; // close the loop of flexible content
	endif; // close flexible content conditional

endwhile; endif; // close the WordPress loop ?>


<?php get_template_part('partials/section', 'client-logos'); ?> 
<?php get_template_part('partials/section', 'request-demo'); ?> 	

</main>


<?php get_footer(); ?>
