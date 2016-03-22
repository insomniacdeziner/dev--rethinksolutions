<?php get_header(); ?>

<img class="background--image_partial" src="/wp-content/uploads/2016/01/banner-blog.jpg">
<div class="wrap">
  <main id="main" class="blog" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

    <?php include(get_query_template('partials/section', 'banner')); ?>
      <?php get_template_part('partials/section', 'section-nav-blog'); ?>
    <?php get_template_part('partials/section', 'page-title'); ?>
 
    <?php get_template_part('partials/section', 'featured-blog'); ?>
    <div class="blog--wrap">
			<?php
			$query = new WP_Query( array( 'post__not_in' => get_option( 'sticky_posts' ) ) );
			if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
			?>

      <div class="blog--wrap__post">
        <header class="article-header">
          <h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
            <?php the_title(); ?>
            </a></h1>
        </header>
        <section class="entry-content">
          <?php the_excerpt(); ?>
        </section>
        <footer class="article-footer">
          <div class="blog--category"> <?php printf( '<p class="footer-category">' . __('', 'bonestheme' ) . '%1$s</p>' , get_the_category_list(', ') ); ?> </div>
        </footer>
      </div>
      <?php 
		endwhile;
		wp_reset_postdata();
		?>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php endwhile; ?>
      <?php bones_page_navi(); ?>
    </div>
    <?php get_sidebar(); ?>
    <?php else : ?>
    <article id="post-not-found" class="hentry cf">
      <header class="article-header">
        <h1>
          <?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?>
        </h1>
      </header>
      <section class="entry-content">
        <p>
          <?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?>
        </p>
      </section>
      <footer class="article-footer">
        <p>
          <?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?>
        </p>
      </footer>
    </article>
    <?php endif; ?>
  </main>
</div>
<?php get_footer(); ?>
