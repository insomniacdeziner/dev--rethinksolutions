<section class="contact--details">
	
	<div class="wrap">
	
		<div class="large--heading blog--title">Our Information</div>
				<div class="col">
			<?php the_field('contact_us_details_right_column'); ?>
		</div>
		<div class="col">
			<img src="<?php the_field('contact_us_details'); ?>">
		</div>
		<div class="contact--form">
			<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
	</div>
	</div>
</section>