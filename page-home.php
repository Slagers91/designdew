<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package designdew
 */

get_header();
?>

<section class="hero">
	<div class="container">
		<h1>Brengt ideeën tot leven en laat ze groeien op het web.</h1>
		<button>Bekijk projecten</button>

		<div class="hero-img">
			<img src="<?php THEMEDIR; ?>/wp-content/themes/designdew/dist/images/iPhone X.png" alt="">
		</div>
	</div>
</section>

<section class="onze-diensten">
	<div class="container">
		<h2>Onze Diensten</h2>
		<div class="row">
			<div class="col-sm">
				One of three columns
			</div>
			<div class="col-sm">
				One of three columns
			</div>
			<div class="col-sm">
				One of three columns
			</div>
		</div>
	</div>
</section>

<?php

get_footer();
