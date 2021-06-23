<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package designdew
 */

?>

	<aside class="footer" role="complementary">

	<div class="container">
		<div class="row">
			<div class="col-sm">
			<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
			</div>
			<div class="col-sm">
			<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
			</div>
			<div class="col-sm">
			<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
			</div>
			<div class="col-sm">
			<?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
			</div>
		</div>
	</div>

	</aside>
	<!-- #fatfooter -->
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
