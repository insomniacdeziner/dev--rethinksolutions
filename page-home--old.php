<?php
/*
 Template Name: Homer
*/
?>
<?php get_header(); ?>
<main id="main" class="content home" role="main"  itemscope itemtype="http://schema.org/Corporation">

	<?php if( have_rows('home_carousel_image_boxes_wrap') ): ?>
	<?php while( have_rows('home_carousel_image_boxes_wrap') ): the_row(); ?>

		<?php if( get_row_layout() == 'home_inner' ): 

				$banner_image = get_sub_field('banner_background_image');
			  	$image_01 = get_sub_field('banner_box_one_image');
			  	$image_02 = get_sub_field('banner_box_two_image');
			  	$image_03 = get_sub_field('banner_box_three_image'); 

		?>
		   <section class="marketing marketing--banner">	
		
					<div class="marketing--banner__copy">
						<h1><?php the_sub_field('banner_title'); ?></h1>
						<h2><?php the_sub_field('banner_sub_title'); ?></h2>
					</div>

			   <img class="background-image" src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt'] ?>" />	
			
			</section>	
			<section class="marketing marketing--boxes">	
				<div class="wrap">
					<figure>
						<img src="<?php echo $image_01['url']; ?>" alt="<?php echo $image_01['alt'] ?>" />
						<figcaption>
							<?php the_sub_field('banner_box_one_text'); ?>
						</figcaption>
						<div class="marketing--boxes__btn">
							<button class="btn btn__green-border" href="<?php the_sub_field('banner_box_one_link'); ?>">Learn More</button>
                        </div>
					</figure>
					
					<figure>
						<img src="<?php echo $image_02['url']; ?>" alt="<?php echo $image_02['alt'] ?>" />
						<figcaption>
							<?php the_sub_field('banner_box_two_text'); ?>
							
						</figcaption>
						<div class="marketing--boxes__btn">
							<button class="btn btn__green-border" href="<?php the_sub_field('banner_box_two_link'); ?>">Learn More</button>
						</div>
					</figure>
					
					<figure>
						<img src="<?php echo $image_03['url']; ?>" alt="<?php echo $image_03['alt'] ?>" />
						<figcaption>
							<?php the_sub_field('banner_box_three_text'); ?>
						</figcaption>
						<div class="marketing--boxes__btn">
							<button class="btn btn__green-border" href="<?php the_sub_field('banner_box_three_link'); ?>">Learn More</button>
						</div>
					</figure>
			</div>
            
		</section>
		<?php elseif(get_row_layout() == 'request_a_demo_block' ): ?>
			<section class="marketing marketing--request-demo">	
				<div class="wrap">
					<?php the_sub_field('request_a_demo_copy'); ?>
				</div>
			</section>

			<?php elseif(get_row_layout() == 'product_block' ): 
				$product_bg = get_sub_field('product_background_image');
				 $product_image = get_sub_field('product_image');
			?>
			<section class="marketing marketing--product">
				<div class="wrap">
				<div class="marketing--product__copy">
					<div class="product--title"><?php the_sub_field('product_title'); ?></div>
					<div class="product--title__subtitle"><?php the_sub_field('product_sub_title'); ?></div>
					<div class="product--title__description"><?php the_sub_field('product_description'); ?></div>
				</div>
					<div class="marketing--product__image">
						<img src="<?php echo $product_image['url']; ?>" alt="<?php echo $product_image['alt'] ?>" />
					</div>
				</div>
				</div>
			</section>
			
			<?php elseif(get_row_layout() == 'market_feature_one' ): 
				$market_box_imageLeft = get_sub_field('left_image');
			?>
			<div class="marketing--feature feature--left">
					<img src="<?php echo $market_box_imageLeft['url']; ?>" alt="<?php echo $market_box_imageLeft['alt'] ?>" />
					
				<div class="marketing-feature__desc">
						<div class="product--title">
							<span class="title--border"></span>
							<?php the_sub_field('market_feature_title'); ?>
						</div>
						<div class="copy">
							<?php the_sub_field('left_image_copy'); ?>
						</div>
						<a class="btn btn__green-border" href="<?php the_sub_field('feature_button_link'); ?>">Learn More</a>
				</div>
			</div>	
			
			<?php elseif(get_row_layout() == 'market_feature_two' ): 
				$market_box_imageRight = get_sub_field('right_image');
			?>
			
			<div class="marketing--feature feature--right">
				
				<img src="<?php echo $market_box_imageRight['url']; ?>" alt="<?php echo $market_box_imageRight['alt'] ?>" />
			<div class="marketing-feature__desc">
				<div class="product--title">
					<span class="title--border"></span>
					<?php the_sub_field('market_feature_title_right'); ?>
				</div>
				<div class="copy">
					<?php the_sub_field('right_image_copy'); ?>
				</div>
				<a class="btn btn__green-border" href="<?php the_sub_field('feature_button_link_right'); ?>">Learn More</a>
			</div>
			</div>
			
			<?php elseif(get_row_layout() == 'market_feature_three' ): 
				$market_box_imageLast = get_sub_field('featured_last');
			?>
			<div class="marketing--feature feature--left">
				<img src="<?php echo $market_box_imageLast['url']; ?>" alt="<?php echo $market_box_imageLast['alt'] ?>" />
				
			<div class="marketing-feature__desc">					
				<div class="product--title">
					<span class="title--border"></span>
						<?php the_sub_field('feature_title_last'); ?>
					</div>
					<div class="copy">
						<?php the_sub_field('feature_image_copy'); ?>

					</div>
					<a class="btn btn__green-border" href="<?php the_sub_field('feature_button_link'); ?>">Learn More</a>
			</div>
			</div>

			<?php endif; ?>	

	<?php endwhile; ?>
	
<?php endif; ?>	

					
<section class="marketing blog">
	<div class="wrap">
		
		<div class="large--heading blog--title">News & Resources</div>

	<?php // display 5 random posts
	$args = array('posts_per_page' => 3	);
	$rand_posts = get_posts($args);
	foreach ($rand_posts as $post) : setup_postdata($post); ?>
	
	<div class="blog--post">
		<div class="blog--post__img">
			<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
		</div>
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


  </main>

<?php get_footer(); ?>
