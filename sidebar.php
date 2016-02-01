<div id="sidebar1" class="sidebar" role="complementary">
	<?php get_template_part('partials/section', 'whitepaper-download'); ?> 	
	
	
	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar1' ); ?>

	<?php else : ?>

		<?php
			/*
			 * This content shows up if there are no widgets defined in the backend.
			*/
		?>

		<div class="no-widgets">
			<p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'bonestheme' );  ?></p>
		</div>

	<?php endif; ?>

</div>
