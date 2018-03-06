<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<div class="nav-logo-container">
						<div class="logo-nav-box">
					<a href="<?php echo get_site_url();?>"><img src="<?php echo get_template_directory_uri();?>/images/inhabitent-logo-tent.svg"/></a>
						</div>
					</div>
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<button class="search-submit">
						<i class="fa fa-search"></i>

							</button>	
					<div class="menu-search">

					<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
						<fieldset>
							<label>
								<input type="search" class="search-field" placeholder="TYPE AND ENTER" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
							</label>

						</fieldset>
						<a href="#">
						</a>	
					</form>

					</div>
				</nav><!-- #site-navigation -->
							</header><!-- #masthead -->

			<div id="content" class="site-content">
