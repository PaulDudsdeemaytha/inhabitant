<?php
/** 
* 
*Template Name: About Page
*@package Inhabitant
*/


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                        <!-- *****************Create divs for this later**************** -->
                       
                        <?php echo CFS()->get( 'our_story' ); ?>
                        <?php echo CFS()->get( 'our_team' ); ?>
                            <?php the_content(); ?>
                            <?php
                                wp_link_pages( array(
                                    'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
                                    'after'  => '</div>',
                                ) );
                            ?>
                        </div><!-- .entry-content -->
                    </article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
