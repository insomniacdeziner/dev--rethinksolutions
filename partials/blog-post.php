<section class="marketing blog">
	<div class="wrap">
		<div class="large--heading blog--title">News & Resources</div>
	</div>
	<div class="wrap">
	<?php 
			$args = array('posts_per_page' => 3, 'ignore_sticky_posts' => 1);
			$rand_posts = get_posts($args);
			foreach ($rand_posts as $post) : setup_postdata($post); ?>
		
		<div class="blog--post">
			<?php the_post_thumbnail( 'bones-thumb-360' ); ?>
			
			<div class="blog--post__title">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</div>
			<div class="blog--post__desc">	
				<?php the_excerpt(); ?>
			</div>
		</div>
	
	<?php endforeach;
	wp_reset_postdata(); ?>

	</div>
</section>


