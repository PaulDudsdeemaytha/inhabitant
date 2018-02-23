<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	<!-- home hero banner -->
	<section class="home-hero">
		<img src="<?php echo get_template_directory_uri(); ?>/images/inhabitent-logo-full.svg">
	</section>

	<section class="product-type-container">
		<h2>Shop Stuff</h2>
		
			<?php
				$terms = get_terms( array( 
						'taxonomy' => 'product_type',
						'hide_empty' => 0
				));
				if ( ! empty ($terms)):
					?>
					<div class ="product-type-box">

						<?php foreach ($terms as $term): ?>
							<div class= "product-type-box-wrapper">
								<img src = "<?php echo get_template_directory_uri() . 
								'/images/' . $term ->slug; ?>.svg"
									alt = "<?php echo $term -> name; ?>"/>
								<p><?php echo $term -> description;?></p>
								<p>
								<a href ="<?php echo get_term_link($term);?>" class="btn"><?php echo $term -> name; ?> Stuff</a>
								</p>
							</div>
						<?php endforeach; ?>

			<?php endif ?>
		</div>
	</section>

<!-- // Define our WP Query Parameters -->
<div class="journal">
	<h2>Inhabitant Journal</h2>
	<div class="container">
	<?php $journalpost = new WP_Query( 'posts_per_page=3' ); ?>
	
		<!-- // Start our WP Query -->
		<?php while ($journalpost -> have_posts()) : $journalpost -> the_post(); ?>
		<div class="journal-block">
		<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
				<?php endif; ?>
				<!-- // Display the Post Title with Hyperlink -->
	<div class="journal-info">
		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
		</div><!-- .entry-meta -->
		<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
				</br>
		<!-- Link to each post-->
		<a href="<?php echo get_permalink(); ?>"> Read Entry</a>
		</br>
		</div>
	</div>
	<!-- // Repeat the process and reset once it hits the limit -->
	<?php 
	endwhile;
	wp_reset_postdata();
	?>
	</div>
</div>

		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_footer(); ?>

