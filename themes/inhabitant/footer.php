<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-blocks-container">
					<div class="footer-contact">
						<p>Contact Info</p>
						<ul>
							<li><i class="far fa-envelope"></i> info@inhabitant.com</li>
							<li><i class="fas fa-phone"></i> 778-456-7891</li>
							<li><i class="fab fa-facebook-square"></i> <i class="fab fa-twitter-square"></i> <i class="fab fa-google-plus-square"></i></li>
						</ul>
					</div>
					<div class="footer-hours">
						<p>Business Hours</p>
						<ul>
							<li><b>Monday-Friday:</b> 9am to 5pm</li>
							<li><b>Saturday:</b> 10am to 2am</li>
							<li><b>Sunday:</b> Closed</li>
						</ul>
					</div>
					<div class="footer-logo-container">
						<div class="footer-logo">
						<!-- get template directory uri retrieves the absolute path to the directory of the current theme. -->
							<a href="<?php echo get_site_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/images/inhabitent-logo-text.svg)"></a>
						</div>
					</div>
				</div>
				<div class="footer-info">
					<p>Copyright &copy; 2017 Inhabitant</p>
				</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>

