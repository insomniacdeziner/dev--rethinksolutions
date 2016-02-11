
<section class="secondary--menu">
		<ul class="nav-tabs">
			<li class="nav--left active"><a href="#0"><?php the_sub_field('main_nav_left'); ?></a></li>
			<li class="nav--right"><a href="#0"><?php the_sub_field('main_nav_right'); ?></a></li>
		</ul>
</section>		

		<section class="content--left">	
			<div class="wrap">
				<div class="secondary--inner__nav">
						<ul>
							<li class="active"><a href="#section1"><?php the_sub_field('section_one'); ?></a></li>
							<li><a href="#section2"><?php the_sub_field('section_two'); ?></a></li> 
							<li><a href="#section3"><?php the_sub_field('section_three'); ?></a></li>
							<li><a href="#section4"><?php the_sub_field('section_four'); ?></a></li>
						</ul>
					</div> 
			</div>
					<div class="product--wrap product--image__right">
					
					<div class="product--image">
						   <?php $one_image = get_sub_field('section_one_image'); ?>
						   <img src="<?php echo $one_image['url']; ?>" alt="<?php echo $one_image['alt'] ?>" />
					</div>
						<div class="wrap">
							<div class="product--content">
								<a name="section1"></a>
								<span class="title--border"></span>
								<h2 class="product--title"><?php the_sub_field('section_one'); ?></h2>
								<div class="copy">
									<?php the_sub_field('section_one_content'); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="product--wrap product--image__left">
						<div class="product--image">
							<?php $two_image = get_sub_field('section_two_image'); ?>
						   <img src="<?php echo $two_image['url']; ?>" alt="<?php echo $two_image['alt'] ?>" />
						</div>
						<div class="wrap">
							<div class="product--content">
								<a name="section2"></a>
								<span class="title--border"></span>
								<h2 class="product--title"><?php the_sub_field('section_two'); ?></h2>
								<div class="copy">
									<?php the_sub_field('section_two_content'); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="product--wrap product--image__right">
				
						<div class="wrap">	
							<div class="product--content">
								<a name="section3"></a>
								<span class="title--border"></span>
								<h2 class="product--title"><?php the_sub_field('section_three'); ?></h2>
								<div class="copy">
									<?php the_sub_field('section_three_content'); ?>
								</div>
							</div>
						</div>
						
						<div class="product--image">
							<?php $three_image = get_sub_field('section_three_image'); ?>
						   <img src="<?php echo $three_image['url']; ?>" alt="<?php echo $three_image['alt'] ?>" />
						</div>
					</div>
					<div class="product--wrap product--image__left">	
						<div class="product--image">
							<?php $four_image = get_sub_field('section_four_image'); ?>
						   <img src="<?php echo $four_image['url']; ?>" alt="<?php echo $four_image['alt'] ?>" />
						</div>
						<div class="wrap">
							<div class="product--content">
								<a name="section4"></a>
								<span class="title--border"></span>
								<h2 class="product--title"><?php the_sub_field('section_four'); ?></h2>
								<div class="copy">
									<?php the_sub_field('section_four_content'); ?>
								</div>
							</div>
						</div>
					</div>
			</div>
		</section>
		
		<section class="content--right">
			<div class="wrap">
				<div  class="secondary--inner__nav">
					<ul>
						<li><a href="#section5"><?php the_sub_field('section_one_right'); ?></a></li>
						<li><a href="#section6"><?php the_sub_field('section_two_right'); ?></a></li>
						<li><a href="#section7"><?php the_sub_field('section_three_right'); ?></a></li>
						<li><a href="#section8"><?php the_sub_field('section_four_right'); ?></a></li>
					</ul>
				</div> 
			</div>
				<div class="product--wrap product--image__right">
					<div class="product--image">
							<?php $five_image = get_sub_field('right_side_section_one_image'); ?>
						   <img src="<?php echo $five_image['url']; ?>" alt="<?php echo $five_image['alt'] ?>" />
						</div>
					<div class="wrap">
						<div class="product--content">
							<a name="section5"></a>
							<span class="title--border"></span>
							<h2 class="product--title"><?php the_sub_field('section_one_right'); ?></h2>
							<div class="copy">
								<?php the_sub_field('right_side_section_one_content'); ?>
							</div>
						</div>
					</div>
				</div>
				
					<div class="product--wrap product--image__left">
						<div class="product--image">
							<?php $six_image = get_sub_field('right_side_section_two_image'); ?>
						   <img src="<?php echo $six_image['url']; ?>" alt="<?php echo $six_image['alt'] ?>" />
						</div>
						<div class="wrap">
							<div class="product--content">
								<a name="section6"></a>
								<span class="title--border"></span>
								<h2 class="product--title"><?php the_sub_field('section_two_right'); ?></h2>
								<div class="copy">
									<?php the_sub_field('right_side_section_two_content'); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="product--wrap product--image__right">
						<div class="product--image">
							<?php $seven_image = get_sub_field('right_side_section_three_image'); ?>
						   <img src="<?php echo $two_image['url']; ?>" alt="<?php echo $two_image['alt'] ?>" />
						</div>
						<div class="wrap">
							<div class="product--content">
								<a name="section7"></a>
								<span class="title--border"></span>
								<h2 class="product--title"><?php the_sub_field('section_three_right'); ?></h2>
								<div class="copy">
									<?php the_sub_field('right_side_section_three_content'); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="product--wrap product--image__left">
						<div class="product--image">
							<?php $seven_image = get_sub_field('right_side_section_four_image'); ?>
						   <img src="<?php echo $seven_image['url']; ?>" alt="<?php echo $seven_image['alt'] ?>" />
						</div>
						<div class="wrap">
							<div class="product--content">
								<a name="section8"></a>
								<span class="title--border"></span>
								<h2 class="product--title"><?php the_sub_field('section_four_right'); ?></h2>
								<div class="copy">
									<?php the_sub_field('right_side_section_four_content'); ?>
								</div>
							</div>
						</div>
					</div>
			</div>
		</section>
		
		
