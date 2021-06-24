<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>

<!------------------------ HERO ------------------------->
<section class="hero">
	<div class="container">
		<h1>Brengt ideeën tot leven en laat ze groeien op het web.</h1>
		<button>Bekijk projecten</button>

		<div class="hero-img">
			<img src="<?php THEMEDIR; ?>/wp-content/themes/designdew/dist/images/iPhone X.png" alt="">
		</div>
	</div>
</section>

<!-------------------- ONZE DIENSTEN -------------------->
<section class="onze-diensten">
	<div class="container">
		<h2>Onze Diensten</h2>
		<div class="row">
			<div class="col-sm">
				<div class="avatar">
				<img src="/wp-content/themes/designdew/dist/images/Ruud-Slagers.png" alt="">
				</div>
				<h5>Websites</h5>
				<div class="subtext">
					<p>Wij ontwerpen en bouwen goed uitziende en prettig werkende websites die bijdragen aan zakelijk succes. Centraal hierbij staan het doel, de uitstraling en de boodschap van jouw organisatie.</p>
					<a src="#">Kom meer te weten</a>
				</div>
			</div>
			<div class="col-sm">
				<div class="avatar">
				<img src="/wp-content/themes/designdew/dist/images/Ruud-Slagers.png" alt="">
				</div>
				<h5>Webshops</h5>
				<div class="subtext">
					<p>Wij ontwerpen aantrekkelijke webshops. De vormgeving ervan wekt vertrouwen en is inspirerend; de manier van navigeren is juist simpel. Zo helpen we jouw bezoekers om snel en eenvoudig de juiste informatie te vinden en neemt de kans op een bestelling toe.</p>
					<a src="#">Kom meer te weten</a>
				</div>
			</div>
			<div class="col-sm">
			<div class="avatar">
			<img src="/wp-content/themes/designdew/dist/images/Ruud-Slagers.png" alt="">
			</div>
				<h5>SEO/SEA</h5>
				<div class="subtext">
					<p>Zoekmachineoptimalisatie (SEO) is een doorlopend proces, want er zijn altijd nieuwe potentiële kansen en veranderingen in de markt. Met een op maat gemaakte SEO strategie brengen wij jouw website naar organische topposities.</p>
					<a src="#">Kom meer te weten</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-------------------- STATISTIEKEN -------------------->
<section class="statistieken">
	<div class="container">
	<h2>Statistieken die er toe doen</h2>
	<p class="sub-text">Wat designdew al bereikt heeft.</p>
	<div class="row">
			<div class="col-sm">
				<h2>10+</h2>
				<p class="sub-text">Websites/webshops</p>
			</div>
			<div class="col-sm">
			<h2>10+</h2>
				<p class="sub-text">Tevreden klanten</p>
			</div>
			<div class="col-sm">
			<h2>4x</h2>
				<p class="sub-text">De gehele website vernieuwd</p>
			</div>
			<div class="col-sm">
			<h2>3</h2>
				<p class="sub-text">Jaar bestaan we</p>
			</div>
		</div>

	</div>
</section>

<!-------------------- BLOG BERICHTEN -------------------->
<section class="blog">
	<div class="container">
	<div class="row">
			<div class="col-sm">
			<h2>De voordelen van een website</h2>
			</div>
			<div class="col-sm">
				<p class="sub-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Venenatis scelerisque at quam congue posuere libero in sit quam. Consequat, scelerisque non tincidunt sit lectus senectus.</p>
			</div>
		</div>
		<div class="row">
		<div class="col-sm featured-img">
		<img src="<?php THEMEDIR; ?>/wp-content/themes/designdew/dist/images/Cover-Voordelen-van-een-website-Blog.png" alt="">
		</div>
		</div>
	</div>
</section>

<?php

get_footer();
