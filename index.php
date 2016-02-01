<?php get_header(); ?>
<img class="background--image_partial" src="/wp-content/uploads/2016/01/banner-blog.jpg">
<main id="main" class="wrap blog" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">


<?php get_template_part('partials/section', 'page-title'); ?> 

<?php include(get_query_template('partials/section', 'banner')); ?>
<?php get_template_part('partials/section', 'section-nav-blog'); ?> 
<?php get_template_part('partials/section', 'featured-blog'); ?> 

<div class="blog--wrap">
	
	    
<?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>



<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

	<header class="article-header">
			<div class="blog--category">
				<?php printf( '<p class="footer-category">' . __('', 'bonestheme' ) . '%1$s</p>' , get_the_category_list(', ') ); ?>
			</div>
			<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
	
	</header>
	<section class="entry-content">
		<?php the_excerpt(); ?>
	</section>
	<footer class="article-footer">
			<?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
	</footer>
	<?php 
	endwhile;
	wp_reset_postdata();
	?>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   
	<?php endwhile; ?>
	</div>
	<?php get_sidebar(); ?>
	

		<?php bones_page_navi(); ?>

	<?php else : ?>

			<article id="post-not-found" class="hentry cf">
					<header class="article-header">
						<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
				</header>
					<section class="entry-content">
						<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
				</section>
				<footer class="article-footer">
						<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
				</footer>
			</article>

	<?php endif; ?>

</main>

<?php get_footer(); ?>
