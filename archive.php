<?php get_header(); ?>


						<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<div class="wrap">
								<div class="blog--wrap">
									
									<?php
									the_archive_title( '<h2 class="page-title">', '</h2>' );
									the_archive_description( '<div class="taxonomy-description">', '</div>' );
									?>
							<?php get_template_part('partials/section', 'page-title'); ?> 
							
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article role="article">

								<div class="blog--wrap__post">
									<header class="article-header">
											<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									</header>
									
									<section class="entry-content">
										<?php the_excerpt(); ?>
									</section>
									
									<footer class="article-footer">
										<div class="blog--category">
											<?php printf( '<p class="footer-category">' . __('', 'bonestheme' ) . '%1$s</p>' , get_the_category_list(', ') ); ?>
											</div>
									</footer>
									
								</div>


							</article>

							<?php endwhile; ?>

									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>
							</div>
							<?php get_sidebar(); ?>
	</div>
						</main>

					


<?php get_footer(); ?>
