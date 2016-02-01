<?php if( have_rows('navigation_tabs') ): ?>
	<nav class="secondary--inner__nav">
			<ul>
<?php while( have_rows('navigation_tabs') ): the_row(); ?>
	 
		 	<li>
				<a href="#<?php the_sub_field('tab_anchor_name'); ?>">
					<?php the_sub_field('tab_name'); ?>
				</a>
			</li>
		<?php endwhile; ?>
	<?php endif; ?>
	</ul>
</nav>

	
