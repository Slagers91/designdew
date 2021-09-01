<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package designdew
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body data-barba="wrapper" <?php body_class(); ?>>

<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'dd' ); ?></a>

	<div class="header">
		<div class="container">
			<header id="masthead" class="site-header">

			<nav id="site-navigation" class="main-navigation">
				<div class="menu-btn">
					<button class="menu-toggle menu-btn__burger" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Menu'); ?></button>
				</div>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->

			<button type="button" class="menu-knop">Kom in contact</button> 
		</div>
	</div>
			</header><!-- #masthead -->
