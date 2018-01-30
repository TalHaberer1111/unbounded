<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?>
	<footer role="contentinfo" id="site-footer">
		<!-- <div class="footer-top-bar">
			<div class="container">
				<div class="row">
					<div class="col columnOne">

					</div>

					<div class="col columnTwo">

					</div>

					<div class="col columnThree">

					</div>
				</div>

			</div>

		</div> -->
		<div class="container" id="footer-inner">
			<!-- <nav id="footer-nav-container" class="nav-container">
			 	<?php wp_nav_menu( array( "theme_location" => "footernav", "container" => false, "menu_id" => "footer-nav" ) ); ?>
			</nav>
			<div class="copyright">&copy; <?php echo date('Y'); ?></div> -->

		<div class="row row-top">
			<div class="col-12 col-md-6 col-lg-4">
				<p class="tagline-footer">
					Help the Unbounded Souls Mission to change the future of humanity.
				</p>
			</div>

			<div class="col-12 col-md-6 col-lg-4">
				<!-- <img class="footerLogo mx-auto float-center" src="<?php echo get_stylesheet_directory_uri(); ?>/images/elephant-head.svg" alt=""> -->
			</div>

			<div class="col-12 col-md-6 col-lg-4">
				<div class="contact-form-wrapper">
				 <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
				</div>
			</div>
		</div>
		</div>
	</footer>
<?php wp_footer(); ?>
</div>
</body>
</html>
