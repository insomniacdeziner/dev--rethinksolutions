<?php
/*
 Template Name: Contact
 */
?>
<?php get_header(); ?>

<main class="main contact-us" role="main">

	<div class="wrap">
		<?php get_template_part('partials/section', 'page-title'); ?> 
		<?php get_template_part('partials/section', 'map'); ?> 
		<?php get_template_part('partials/section', 'contact-details'); ?> 
		<?php get_template_part('partials/section', 'clients'); ?> 
	</div>
		<?php get_template_part('partials/section', 'request-demo'); ?> 	


</main>


<?php get_footer(); ?>
