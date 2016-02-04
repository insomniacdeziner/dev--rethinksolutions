<?php if( have_rows('navigation_tabs') ): ?>
<nav class="secondary--inner__nav" id="navBar">
	<ul>
		<?php while( have_rows('navigation_tabs') ): the_row(); ?>
		<li>
			<a href="#<?php the_sub_field('tab_anchor_name'); ?>">
				<?php the_sub_field('tab_name'); ?>
			</a>
		</li>
	<?php endwhile; ?>
</ul>
</nav>
	<?php endif; ?>
