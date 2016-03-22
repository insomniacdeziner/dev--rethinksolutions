<div class="blog--featured">
	
	 <?php $args = array(
			'posts_per_page' => 1,
			'post__in'  => get_option( 'sticky_posts' ),
			'ignore_sticky_posts' => 1
		);
		$query = new WP_Query( $args );
?>  
	<div class="blog--featured__image">  
			   <?php the_post_thumbnail( 'bones-thumb-featured' ); ?>
	</div>
	
	<div class="blog--featured__content">
		   <h2 class="entry-title">
		      <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		   </h2>
		   
		   	<section class="entry-content">
				<?php the_excerpt(); ?>
			</section>
	</div>
</div>