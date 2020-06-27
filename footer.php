<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Branded
 * @since Branded
 */

?>
<!-- Footer Section Start -->
<footer class="footer-section">
	<div class="container">
		<div class="footer-wrap d-flex flex-wrap align-items-center justify-content-between">
			<?php wp_nav_menu(
							array
							(
								'menu'				=>	'header',
								'menu_class'		=>	'footer-nav d-flex flex-wrap text-center justify-content-center',
								'theme_location'    => 	'header',
							) 
						);
			echo do_shortcode('[sociallinks]'); ?>
		</div>
		<div class="copyright-wrap text-center">&copy; <?php echo date("Y"). ' Branded LLC  |  All Rights Reserved '; ?></div>
	</div>
</footer>
<!-- Footer Section End -->

<?php wp_footer();  ?>
</body>
</html>

			
