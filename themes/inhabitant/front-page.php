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
		<div class="storytitle">
			<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
		</div>
				</br>
		<!-- Link to each post-->
		<a class="readentry" href="<?php echo get_permalink(); ?>"> Read Entry</a>
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

<section>
	<div class="adventures-head">
	<h2>Latest Adventures<h2>
	</div>
	<div class="adven-flex">
		<div class="adven-1">
			<div class="adven-pic1">
				<img src="<?php echo get_template_directory_uri(); ?>/images/canoe-girl.jpg">
			</div>
		</div>
		<div class="adven-2">
			<div class="adven-pic2">
				<img src="<?php echo get_template_directory_uri(); ?>/images/beach-bonfire.jpg">
				

			</div>
			<div class="adven-3">
				<div class="adven-pic3">
					<img src="<?php echo get_template_directory_uri(); ?>/images/mountain-hikers.jpg">
					

				</div>
				<div class="adven-pic4">
					<img src="<?php echo get_template_directory_uri(); ?>/images/night-sky.jpg">
					

				</div>
			</div>
			</div>
		</div>

	</div>
	<a class="readentry" href="<?php echo get_permalink(); ?>"> Latest Adventures</a>
</section>

		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_footer(); ?>

