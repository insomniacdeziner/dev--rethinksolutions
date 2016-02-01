<?php
/*
 Template Name: Contact
 */
?>
<?php get_header(); ?>

<main class="main contact-us" role="main">
	
	<?php get_template_part('partials/section', 'banner'); ?> 
	<div style="text-align: center; font-size: 30px; color: red;">[ don't look at the layout...it needs some work]</div>
	<div class="wrap">
		<?php get_template_part('partials/section', 'page-title'); ?> 
		<?php get_template_part('partials/section', 'map'); ?> 
		<?php get_template_part('partials/section', 'contact-details'); ?> 
		<?php get_template_part('partials/section', 'clients'); ?> 
		</div>

</main>


<?php get_footer(); ?>
