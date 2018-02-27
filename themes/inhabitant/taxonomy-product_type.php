<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitant
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


		<?php if ( have_posts() ) : ?>
		<div class="shop-nav-container">

			<header class="page-header">
				
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
				
			</header><!-- .page-header -->
</div>

			<?php /* Start the Loop */ ?>
			<div class="product-flex">
			<?php while ( have_posts() ) : the_post(); ?>


									
									<?php if ( has_post_thumbnail() ) : ?>
									<div class="product-box">
										<a href="<?php the_permalink() ?>">
											<?php the_post_thumbnail( 'large' ); ?>
										</a>
										<?php endif; ?>
										<div class="box-content">
											<div>
												<?php the_title( '<p>', '</p>' ); ?>
											</div>
											<div>
												<?php echo CFS()->get( 'Price' ); ?>
											</div>
										</div>
									
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
