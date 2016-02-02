<?php
/*
 Template Name: About 
 */
?>
<?php get_header(); ?>

<main class="main" role="main">
<?php get_template_part('partials/section', 'banner'); ?> 
<div class="wrap">
	<?php get_template_part('partials/section', 'page-title'); ?> 
</div>
<?php get_template_part('partials/section', 'content'); ?> 
<?php get_template_part('partials/section', 'client-logos'); ?> 
<?php get_template_part('partials/section', 'request-demo'); ?> 	

</main>


<?php get_footer(); ?>
