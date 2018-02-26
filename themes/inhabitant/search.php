<?php
/**
 * The template for displaying search results pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main default-template-page" role="main">
			<div class="search-content-container">
				<?php if ( have_posts() ) : ?>

				
						<h2 class="page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
				

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'search' ); ?>
						<a class="readmore" href="<?php echo get_permalink(); ?>"> Read More &rarr;</a>
					<?php endwhile; ?>

					<?php red_starter_numbered_pagination(); ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>
					
				<?php endif; ?>
			</div>
			<div class="sidebar">
				<?php get_sidebar(); ?>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->


<?php get_footer(); ?>
