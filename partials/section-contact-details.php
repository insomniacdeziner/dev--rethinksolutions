<section class="contact--details">
	<div class="wrap">
			<div class="contact--details-copy">
			<?php the_field('contact_us_introduction'); ?></div>
	
			<div class="col contact--col-right">
					<div class="contact--title">Our Offices</div>
				<?php // open the WordPress loop
						if (have_posts()) : while (have_posts()) : the_post();
						
							// are there any rows within within our flexible content?
						if( have_rows('contact_us_details') ): 
					
							// loop through all the rows of flexible content
							while ( have_rows('contact_us_details') ) : the_row();
					
							if( get_row_layout() == 'contact_details_table' )
								get_template_part('partials/section', 'contact-list');
					
						endwhile; // close the loop of flexible content
						endif; // close flexible content conditional
					
					endwhile; endif; // close the WordPress loop ?>

			</div>
		<div class="col">
			<div class="contact--title">Get in Touch</div>
			<div class="contact--form">
				<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
			</div>
		</div>
	</div>
</section>