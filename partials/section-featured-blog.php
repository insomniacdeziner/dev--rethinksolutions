<div class="blog--featured">
	 <?php the_post(); //this will get the first post, and generate all the tags the_title(), the_permalink(),... ?>  
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