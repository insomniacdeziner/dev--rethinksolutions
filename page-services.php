<?php
/*
 Template Name: Services 
 */
?>
<?php get_header(); ?>

<main class="main" role="main">

<?php get_template_part('partials/section', 'banner'); ?> 
<div class="wrap">
	<?php get_template_part('partials/section', 'page-title'); ?> 
	<?php get_template_part('partials/nav'); ?>
</div> 
<div class="services">
	<?php get_template_part('partials/section-tabs'); ?> 
</div>
<?php get_template_part('partials/section', 'clients'); ?> 	
<?php get_template_part('partials/section', 'request-demo'); ?> 	

</main>


<?php get_footer(); ?>
