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
	<div class="first quarter left widget-area"><?php dynamic_sidebar( 'first-footer-widget-area' ); ?></div><!-- .first .widget-area -->
	<div class="second quarter widget-area"><?php dynamic_sidebar( 'second-footer-widget-area' ); ?></div><!-- .second .widget-area -->
	<div class="third quarter widget-area"><?php dynamic_sidebar( 'third-footer-widget-area' ); ?></div><!-- .third .widget-area -->
	<div class="fourth quarter right widget-area"><?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?></div><!-- .fourth .widget-area -->
	</aside>
	<!-- #fatfooter -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
