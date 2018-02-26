<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="container">
						<div class="product-image-container">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'large' ); ?>
							<?php endif; ?>
						</div>

						<div class="product-info-container">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

						<div class="entry-content">
							<div class="price">
							<?php echo CFS()->get( 'Price' ); ?>
							</div>
								<?php the_content(); ?>
								<?php
									wp_link_pages( array(
										'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
										'after'  => '</div>',
									) );
								?>
						</div><!-- .entry-content -->
						<div class="social-container">
							<button type="button" class="social-button"><i class="fab fa-facebook-square"></i> Like</button>
							<button type="button" class="social-button"><i class="fab fa-twitter-square"></i> Tweet</button>
							<button type="button" class="social-button"><i class="fab fa-pinterest"></i> Pin</button>
						</div>
						</div>
					</div>
				</article><!-- #post-## -->


			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
