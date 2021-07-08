<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>

<!------------------------ HERO ------------------------->
<section class="hero"><!--HERO-->
	<div class="container"><!--CONTAINER-->
		<h1><?php the_field('hero'); ?></h1>
		<button onclick="location.href='#projecten'" type="button"><?php the_field('hero-knop'); ?></button>

		<div class="hero-img"><!--HERO-IMG-->
			<img src="<?php THEMEDIR; ?>/wp-content/themes/designdew/dist/images/iPhone X.png" alt="">
		</div><!--HERO-IMG-->
	</div><!--CONTAINER-->
</section><!--HERO-->

<!-------------------- ONZE DIENSTEN -------------------->
<section class="onze-diensten"><!--ONZE-DIENSTEN-->
	<div class="container"><!--CONTAINER-->
		<h2><?php the_field('diensten_titel'); ?></h2>
		<div class="row"><!--ROW-->
			<div class="col-sm een"><!--COL-SM-1-->
				<div class="avatar website">
					<img src="<?php the_field('diensten_column_1_afbeelding') ?>" alt="" srcset="">
				</div>
				<h5><?php the_field('diensten_column_1_titel'); ?></h5>
				<div class="subtext">
					<p><?php the_field('diensten_column_1_samenvatting'); ?></p>
					<a src="<?php the_field('diensten_column_1_url'); ?>"><?php the_field('diensten_column_2_link'); ?></a>
				</div>
			</div><!--COL-SM-1-->
			<div class="col-sm twee"><!--COL-SM-2-->
				<div class="avatar webshop">
				<img src="<?php the_field('diensten_column_2_afbeelding') ?>" alt="" srcset="">
				</div>
				<h5><?php the_field('diensten_column_2_titel'); ?></h5>
				<div class="subtext">
				<p><?php the_field('diensten_column_2_samenvatting'); ?></p>
					<a src="<?php the_field('diensten_column_2_url'); ?>"><?php the_field('diensten_column_2_link'); ?></a>
				</div>
			</div><!--COL-SM-2-->
			<div class="col-sm drie"><!--COL-SM-3-->
			<div class="avatar seo">
			<img src="<?php the_field('diensten_column_3_afbeelding') ?>" alt="" srcset="">
			</div>
			<h5><?php the_field('diensten_column_3_titel'); ?></h5>
				<div class="subtext">
				<p><?php the_field('diensten_column_3_samenvatting'); ?></p>
					<a src="<?php the_field('diensten_column_3_url'); ?>"><?php the_field('diensten_column_3_link'); ?></a>
				</div>
			</div><!--COL-SM-3-->
		</div><!--ROW-->
	</div><!--CONTAINER-->
</section><!--ONZE-DIENSTEN-->

<!-------------------- RECENTE PROJECTEN -------------------->
	<section id="projecten" class="projecten"><!--PROJECTEN-->
  		<div class="container"><!--CONTAINER-->
    		<div class="grid"><!--GRID-->
			<div class="row"><!--ROW-->
					<h2><?php the_field('projecten_titel'); ?></h2>
					<div class="owl-project owl-carousel owl-theme">
					
					<?php
						$args = array(
								'post_type' => 'post', // This is the name of your post type - change this as required,
								'posts_per_page' => -1, // This is the amount of posts per page you want to show
								'category_name' => 'portfolio'
            		);

					$post_query = new WP_Query($args);
					if($post_query->have_posts() ) { ?>

					<?php
					while($post_query->have_posts() ) {
						$post_query->the_post();
                    ?>
                    <div class="item"><!--ITEM-->	
						<div class="col-sm"><!--COL-SM-1-->	
							<!-- <div class="news-item"> -->
							<figure class="img-container">
								<?php the_post_thumbnail('large'); ?>
							</figure>
								<div class="bericht">
									<?php //the_excerpt(); ?>
								</div>
								<h5><?php the_field('website_naam') ?></h5>
								<div class="subtitel">
									<p><?php the_field('soort_opdracht') ?></p>
								</div>
						</div><!--COL-SM-1-->
                    </div><!--ITEM-->	
                    <?php

                    } ?>

                	</div>
							<?php
							}
							wp_reset_query();
					?>
			</div><!--GRID-->
    	</div><!--CONTAINER-->
	</section><!--PROJECTEN-->

<!-------------------- OVER ONS -------------------->
<section id="over-ons" class="over-ons"><!--OVER ONS-->
	<div class="container"><!--CONTAINER-->
		<div class="row"><!--ROW-->
			<div class="col-sm fotos"><!--COL-SM-1-->
				<div class="top">
					<div class="afbeelding-1">
						<img src="/wp-content/themes/designdew/dist/images/Over-ons-linksboven.png" alt="">
					</div>
					<div class="afbeelding-2">
						<img src="/wp-content/themes/designdew/dist/images/Over-ons-rechtsboven.png" alt="">
					</div>
				</div>
				<div class="bottom">
					<div class="afbeelding-3">
						<img src="/wp-content/themes/designdew/dist/images/Over-ons-linksonder.png" alt="">
					</div>
					<div class="afbeelding-4">
						<img src="/wp-content/themes/designdew/dist/images/Over-ons-rechtsonder.png" alt="">
					</div>
				</div>
			</div><!--COL-SM-1-->
			<div class="col-sm voorstellen"><!--COL-SM-2-->
				<h2>Over ons</h2>
				<div class="avatar">
				<img src="/wp-content/themes/designdew/dist/images/Ruud-Slagers.png" alt="">
				</div>
				<h5>Amin Pašalić</h5>
				<div class="subtext">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed erat nibh tristique ipsum.</p>
					<a src="#">LinkedIn</a>
				</div>
				<div class="avatar">
				<img src="/wp-content/themes/designdew/dist/images/Ruud-Slagers.png" alt="">
				</div>
				<h5>Ruud Slagers</h5>
				<div class="subtext">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed erat nibh tristique ipsum.</p>
					<a src="#">LinkedIn</a>
				</div>
			</div><!--COL-SM-2-->
		</div><!--ROW-->
	</div><!--CONTAINER-->
</section><!--RECENTE PROJECTEN-->

<!-------------------- STATISTIEKEN -------------------->
<section class="statistieken"><!--STATISTIEKEN-->
	<div class="container"><!--CONTAINER-->
		<h2>Statistieken die er toe doen</h2>
		<p class="sub-text">Wat designdew al bereikt heeft.</p>
	<div class="row"><!--ROW-->
			<div class="col-sm"><!--COL-SM-1-->
				<h2>10+</h2>
				<p class="sub-text">Websites/webshops</p>
			</div><!--COL-SM-1-->
			<div class="col-sm"><!--COL-SM-2-->
			<h2>10+</h2>
				<p class="sub-text">Tevreden klanten</p>
			</div><!--COL-SM-2-->
			<div class="col-sm"><!--COL-SM-3-->
			<h2>4x</h2>
				<p class="sub-text">De gehele website vernieuwd</p>
			</div><!--COL-SM-3-->
			<div class="col-sm"><!--COL-SM-4-->
			<h2>3</h2>
				<p class="sub-text">Jaar bestaan we</p>
			</div><!--COL-SM-4-->
		</div><!--ROW-->
	</div><!--CONTAINER-->
</section><!--STATISTIEKEN-->

<!-------------------- ONZE WERKWIJZE -------------------->
<section id="werkwijze" class="werkwijze"><!--WERKWIJZE-->
	<div class="container"><!--CONTAINER-->
	<h2>Onze werkwijze</h2>
	<div class="row"><!--ROW-->
			<div class="col-sm"><!--COL-SM-1-->
				<div class="ronde-lijn">
				<div class="ronde">
				</div>
				<div class="lijn"></div>
				</div>
				<h6>Ontmoeting</h6>
				<p class="sub-text">Vrijblijvend en efficiënt. Stellen samen de doelen en wensen op.</p>
			</div><!--COL-SM-1-->
			<div class="col-sm"><!--COL-SM-2-->
			<div class="ronde-lijn">
				<div class="ronde">
				</div>
				<div class="lijn"></div>
				</div>
			<h6>Design</h6>
				<p class="sub-text">Wij gaan aan de slag om een passend ontwerp te maken. </p>
			</div><!--COL-SM-2-->
			<div class="col-sm"><!--COL-SM-3-->
			<div class="ronde-lijn">
				<div class="ronde">
				</div>
				<div class="lijn"></div>
				</div>
			<h6>Development</h6>
				<p class="sub-text">Design goedgekeurd? Dan gaan wij het omzetten naar een werkend product.</p>
			</div><!--COL-SM-3-->
			<div class="col-sm"><!--COL-SM-4-->
			<div class="ronde-lijn">
				<div class="ronde">
				</div>
				<div class="lijn"></div>
				</div>
			<h6>Live</h6>
				<p class="sub-text">Na de feedback rondes helemaal tevreden? Dan gaan we de website live zetten.</p>
			</div><!--COL-SM-4-->
		</div><!--ROW-->
	</div><!--CONTAINER-->
</section><!--WERKWIJZE-->

<!-------------------- BLOG BERICHTEN -------------------->
<section class="blog"><!--BLOG-->
	<div class="container"><!--CONTAINER-->
	<div class="row"><!--ROW-1-->
			<div class="col-sm"><!--COL-SM-1-->
			<h2>De voordelen van een website</h2>
			</div>
			<div class="col-sm">
				<p class="sub-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Venenatis scelerisque at quam congue posuere libero in sit quam. Consequat, scelerisque non tincidunt sit lectus senectus.</p>
			</div><!--COL-SM-1-->
		</div><!--ROW-1-->
		<div class="row"><!--ROW-2-->
		<div class="col-sm featured-img">
		<img src="<?php THEMEDIR; ?>/wp-content/themes/designdew/dist/images/Cover-Voordelen-van-een-website-Blog.png" alt="">
		</div>
		</div><!--ROW-2-->
	</div><!--CONTAINER-->
</section><!--BLOG-->

<!-------------------- ONZE KLANTERVARINGEN -------------------->
<section class="klantervaringen"><!--ONZE-KLANTERVARINGEN-->
	<div class="container klantervaringen"><!--CONTAINER-->
		<div class="intro"><!--INTRO-->
			<h2>Onze klantervaringen</h2>
			<p>Laat de klanten voor ons spreken.</p>
		</div><!--INTRO-->
			<div class="row"><!--ROW-->
				<div class="owl-klanten owl-carousel owl-theme">
				<div class="item">
					<div class="col-sm"><!--COL-SM-1-->
						<div class="box">
							<h5>"Fijne samenwerking"</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Auctor neque sed imperdiet nibh lectus feugiat nunc sem.</p>
						</div>
						<div class="avatar">
						<img src="/wp-content/themes/designdew/dist/images/Ruud-Slagers.png" alt="">
						</div>
						<h4>Karlijn Franken</h4>
						<p>Medeoprichtster - Los Pinos</p>
					</div><!--COL-SM-1-->
				</div>
				<div class="item">
				<div class="col-sm"><!--COL-SM-2-->
				<div class="box">
						<h5>"Computermannen"</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Auctor neque sed imperdiet nibh lectus feugiat nunc sem.</p>
					</div>
					<div class="avatar">
					<img src="/wp-content/themes/designdew/dist/images/Ruud-Slagers.png" alt="">
					</div>
					<h4>Pieter Burgers</h4>
					<p>Oprichter - Allround Taxaties</p>
				</div><!--COL-SM-2-->
				</div>
				<div class="item">
				<div class="col-sm"><!--COL-SM-3-->
				<div class="box">
						<h5>"Wauw goed gemaakt"</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Auctor neque sed imperdiet nibh lectus feugiat nunc sem.</p>
					</div>
					<div class="avatar">
					<img src="/wp-content/themes/designdew/dist/images/Ruud-Slagers.png" alt="">
					</div>
					<h4>Merlijn Romano</h4>
					<p>Oprichtster - Mea-Interieurs</p>
				</div><!--COL-SM-3-->
				<div>
			</div><!--ROW-->
		</div>
	</div><!--CONTAINER-->
</section><!--ONZE-KLANTENERVARINGEN-->

<?php

get_footer();
