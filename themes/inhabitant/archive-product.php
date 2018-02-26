<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="shop-nav-container">
			<h1>Shop Stuff</h1>
				<?php
					$terms = get_terms( array( 
							'taxonomy' => 'product_type',
							'hide_empty' => 0
					));
					if ( ! empty ($terms)):
						?>
							<?php foreach ($terms as $term): ?>
							
									<a href ="<?php echo get_term_link($term);?>" class="btn"><?php echo $term -> name; ?></a>
							
							
							<?php endforeach; ?>

				<?php endif ?>
			</div>


			<div class="product-flex">
					<?php if ( have_posts() ) : ?>
						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="product-box">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'large' ); ?>
								<?php endif; ?>
								<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
								<?php echo CFS()->get( 'Price' ); ?>
							</div>
						<?php endwhile; ?>

						<?php the_posts_navigation(); ?>

					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>




