			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">
					<div class="footer--column">
						<?php get_template_part('partials/footer', 'about'); ?> 
					</div>
					<div class="footer--column">
						<?php get_template_part('partials/footer', 'links'); ?> 
					</div>
					<div class="footer--column">		
						<?php get_template_part('partials/footer', 'address'); ?> 
					</div>
					<div class="footer--column footer__social">
						<?php get_template_part('partials/footer', 'social'); ?> 
					</div>
		
				</div>
				<div class="source-org">
					<p class="wrap copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
				</div>
			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
