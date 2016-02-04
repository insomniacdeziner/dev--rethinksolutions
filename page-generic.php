<?php
/*
 Template Name: Generic
 */
?>
<?php get_header(); ?>

<main class="main" role="main" >
<?php get_template_part('partials/section', 'sub-banner'); ?> 
<div class="wrap">
	<?php get_template_part('partials/section', 'page-title'); ?> 
	<?php get_template_part('partials/section', 'content'); ?> 
</div>

</main>


<?php get_footer(); ?>
