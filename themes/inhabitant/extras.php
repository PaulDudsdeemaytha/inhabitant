<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitant_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}
	return $classes;
}
add_filter( 'body_class', 'inhabitant_body_classes' );

//this function changes the logo to our inhabitant logo
function inhabitant_logo() { ?>
	<style type="text/css">
        #login h1 a, .login h1 a {
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/inhabitent-logo-text-dark.svg);
		height:65px;
		width:320px;
		background-size: 320px 65px;
		background-repeat: no-repeat;
		padding-bottom: 30px;
	
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'inhabitant_logo' );

// this function changes the link of our inhabitant website
function inhabitant_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'inhabitant_logo_url' );

function inhabitant_logo_url_title() {
    return 'Inhabitant Camping Supply Co.';
}
add_filter( 'login_headertitle', 'inhabitant_logo_url_title' );

//about page changes **** make hanges to make this more clear
function about_page_hero() {
        if( is_page_template('page-templates/about.php')){
			return;}

			$img = CFS () -> get( 'background_image' ); 
			if (!$img) {return;}

			$custom_css = ".page-template-about .entry-header{
							background: 
							linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%),
							url({$img}) no-repeat center bottom; 
							background-size:cover, cover;
							height:100vh;
						}";
			wp_add_inline_style( 'inhabitant-style', $custom_css );
} 
add_action( 'wp_enqueue_scripts', 'about_page_hero' );

