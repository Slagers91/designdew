<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>

<div class="wrapper" data-barba='container' data-barba-namespace='home'>
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
<?php $kolom_links = get_field('diensten_1'); ?>
<?php $kolom_midden = get_field('diensten_2'); ?>
<?php $kolom_rechts = get_field('diensten_3'); ?>
<section class="onze-diensten"><!--ONZE-DIENSTEN-->
	<div class="container"><!--CONTAINER-->
		<h2><?php echo $kolom_links['diensten_titel']; ?></h2>
		<div class="row"><!--ROW-->
			<div class="col-sm een"><!--COL-SM-1-->
				<div class="avatar website">
					<img src="<?php echo $kolom_links['diensten_column_1_afbeelding']; ?>" alt="" srcset="">
				</div>
				<h5><?php echo $kolom_links['diensten_column_1_titel']; ?></h5>
				<div class="subtext">
					<p><?php echo $kolom_links['diensten_column_1_samenvatting']; ?></p>
					<a src="<?php echo $kolom_links['diensten_column_1_url']; ?>"><?php echo $kolom_links['diensten_column_1_link']; ?></a>
				</div>
			</div><!--COL-SM-1-->
			<div class="col-sm twee"><!--COL-SM-2-->
				<div class="avatar webshop">
				<img src="<?php echo $kolom_midden['diensten_column_2_afbeelding']; ?>" alt="" srcset="">
				</div>
				<h5><?php echo $kolom_midden['diensten_column_2_titel']; ?></h5>
				<div class="subtext">
				<p><?php echo $kolom_midden['diensten_column_2_samenvatting']; ?></p>
					<a src="<?php echo $kolom_midden['diensten_column_2_url']; ?>"><?php echo $kolom_midden['diensten_column_2_link']; ?></a>
				</div>
			</div><!--COL-SM-2-->
			<div class="col-sm drie"><!--COL-SM-3-->
			<div class="avatar seo">
			<img src="<?php echo $kolom_rechts['diensten_column_3_afbeelding']; ?>" alt="" srcset="">
			</div>
			<h5><?php echo $kolom_rechts['diensten_column_3_titel']; ?></h5>
				<div class="subtext">
				<p><?php echo $kolom_rechts['diensten_column_3_samenvatting']; ?></p>
					<a src="<?php echo $kolom_rechts['diensten_column_3_url']; ?>"><?php echo $kolom_rechts['diensten_column_3_link']; ?></a>
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
								'post_type' => 'project', // This is the name of your post type - change this as required,
								'posts_per_page' => 4 // This is the amount of posts per page you want to show
								// 'category_name' => 'portfolio'
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
						<img src="<?php the_field('over_ons_afb1_linksboven') ?>" alt="">
					</div>
					<div class="afbeelding-2">
						<img src="<?php the_field('over_ons_afb2_rechtsboven') ?>" alt="">
					</div>
				</div>
				<div class="bottom">
					<div class="afbeelding-3">
						<img src="<?php the_field('over_ons_afb3_linksonder') ?>" alt="">
					</div>
					<div class="afbeelding-4">
						<img src="<?php the_field('over_ons_afb4_rechtsonder') ?>" alt="">
					</div>
				</div>
			</div><!--COL-SM-1-->
			<div class="col-sm voorstellen"><!--COL-SM-2-->
				<h2><?php the_field('over_ons_titel') ?></h2>
				<div class="avatar">
				<img src="<?php the_field('over_ons_persoon_1_avatar') ?>" alt="">
				</div>
				<h5><?php the_field('over_ons_persoon_1_naam') ?></h5>
				<div class="subtext">
					<p><?php the_field('over_ons_persoon_1_samenvatting') ?></p>
					<a src="#"><?php the_field('over_ons_persoon_1_link') ?></a>
				</div>
				<div class="avatar">
				<img src="<?php the_field('over_ons_persoon_2_avatar') ?>" alt="">
				</div>
				<h5><?php the_field('over_ons_persoon_2_naam') ?></h5>
				<div class="subtext">
					<p><?php the_field('over_ons_persoon_2_samenvatting') ?></p>
					<a src="#"><?php the_field('over_ons_persoon_2_link') ?></a>
				</div>
			</div><!--COL-SM-2-->
		</div><!--ROW-->
	</div><!--CONTAINER-->
</section><!--RECENTE PROJECTEN-->

<!-------------------- STATISTIEKEN -------------------->
<section class="statistieken"><!--STATISTIEKEN-->
	<div class="container"><!--CONTAINER-->
		<h2><?php the_field('statistieken_titel') ?></h2>
		<p class="sub-text"><?php the_field('statistieken_subtitel') ?></p>
	<div class="row"><!--ROW-->
			<div class="col-sm"><!--COL-SM-1-->
				<h2><?php the_field('statistieken_column_1_cijfer') ?></h2>
				<p class="sub-text"><?php the_field('statistieken_column_1_onderwerp') ?></p>
			</div><!--COL-SM-1-->
			<div class="col-sm"><!--COL-SM-2-->
			<h2><?php the_field('statistieken_column_2_cijfer') ?></h2>
				<p class="sub-text"><?php the_field('statistieken_column_2_onderwerp') ?></p>
			</div><!--COL-SM-2-->
			<div class="col-sm"><!--COL-SM-3-->
			<h2><?php the_field('statistieken_column_3_cijfer') ?></h2>
				<p class="sub-text"><?php the_field('statistieken_column_3_onderwerp') ?></p>
			</div><!--COL-SM-3-->
			<div class="col-sm"><!--COL-SM-4-->
			<h2><?php the_field('statistieken_column_4_cijfer') ?></h2>
				<p class="sub-text"><?php the_field('statistieken_column_4_onderwerp') ?></p>
			</div><!--COL-SM-4-->
		</div><!--ROW-->
	</div><!--CONTAINER-->
</section><!--STATISTIEKEN-->

<!-------------------- ONZE WERKWIJZE -------------------->
<section id="werkwijze" class="werkwijze"><!--WERKWIJZE-->
	<div class="container"><!--CONTAINER-->
	<h2><?php the_field('werkwijze_titel') ?></h2>
	<div class="row"><!--ROW-->
			<div class="col-sm"><!--COL-SM-1-->
				<div class="ronde-lijn">
				<div class="ronde">
				</div>
				<div class="lijn"></div>
				</div>
				<h6><?php the_field('werkwijze_column_1_onderwerp') ?></h6>
				<p class="sub-text"><?php the_field('werkwijze_column_1_samenvatting') ?></p>
			</div><!--COL-SM-1-->
			<div class="col-sm"><!--COL-SM-2-->
			<div class="ronde-lijn">
				<div class="ronde">
				</div>
				<div class="lijn"></div>
				</div>
			<h6><?php the_field('werkwijze_column_2_onderwerp') ?></h6>
				<p class="sub-text"><?php the_field('werkwijze_column_2_samenvatting') ?></p>
			</div><!--COL-SM-2-->
			<div class="col-sm"><!--COL-SM-3-->
			<div class="ronde-lijn">
				<div class="ronde">
				</div>
				<div class="lijn"></div>
				</div>
			<h6><?php the_field('werkwijze_column_3_onderwerp') ?></h6>
				<p class="sub-text"><?php the_field('werkwijze_column_3_samenvatting') ?></p>
			</div><!--COL-SM-3-->
			<div class="col-sm"><!--COL-SM-4-->
			<div class="ronde-lijn">
				<div class="ronde">
				</div>
				<div class="lijn"></div>
				</div>
			<h6><?php the_field('werkwijze_column_4_onderwerp') ?></h6>
				<p class="sub-text"><?php the_field('werkwijze_column_4_samenvatting') ?></p>
			</div><!--COL-SM-4-->
		</div><!--ROW-->
	</div><!--CONTAINER-->
</section><!--WERKWIJZE-->

<!-------------------- BLOG BERICHTEN -------------------->
<section class="blog"><!--BLOG-->
	<div class="container"><!--CONTAINER-->
		<div class="row"><!--ROW-1-->
				<div class="col-sm"><!--COL-SM-1-->
					<?php
						$args = array(
							'post_type' => 'post', // This is the name of your post type - change this as required,
							'posts_per_page' => 1, // This is the amount of posts per page you want to show
							'category_name' => 'blog'
						);

						$post_query = new WP_Query($args);
						if($post_query->have_posts() ) { ?>

						<?php
							while($post_query->have_posts() ) {
							$post_query->the_post();
						?>
						<!--BLOG TITEL-->
						<h2><?php the_field('blog_titel') ?></h2>
				</div><!--COL-SM-1-->


				<div class="col-sm"><!--COL-SM-2-->
					<!--BLOG SAMENVATTING-->
					<p class="sub-text"><?php the_field('blog_samenvatting') ?></p>
				</div><!--COL-SM-2-->

		</div><!--ROW-1-->

			<div class="row"><!--ROW-2-->
				<div class="col-sm"><!--COL-SM-2-->
					<!--BLOG AFBEELDING-->
					<div class="col-sm featured-img">
						<img src="<?php the_field('blog_afbeelding') ?>" alt="">
					</div>
				</div>
			</div><!--ROW-2-->
	</div><!--CONTAINER-->
	<?php
						} ?>
	<?php
		}
		wp_reset_query();
	?>
</section><!--BLOG-->

<!-------------------- ONZE KLANTERVARINGEN -------------------->
<section class="klantervaringen"><!--ONZE-KLANTERVARINGEN-->
	<div class="container klantervaringen"><!--CONTAINER-->
		<div class="intro"><!--INTRO-->
			<h2><?php the_field('klantervaring_titel') ?></h2>
			<p><?php the_field('klantervaring_subtitel') ?></p>
		</div><!--INTRO-->
			<div class="row"><!--ROW-->
				<div class="owl-klanten owl-carousel owl-theme">
				<div class="item">
					<div class="col-sm"><!--COL-SM-1-->
						<div class="box">
							<h5><?php the_field('klantervaring_column_1_titel_quote') ?></h5>
							<p><?php the_field('klantervaring_column_1_samenvatting') ?></p>
						</div>
						<div class="avatar">
						<img src="<?php the_field('klantervaring_1_avatar') ?>" alt="">
						</div>
						<h4><?php the_field('klantervaring_column_1_naam') ?></h4>
						<p><?php the_field('klantervaring_column_1_functie') ?></p>
					</div><!--COL-SM-1-->
				</div>
				<div class="item">
				<div class="col-sm"><!--COL-SM-2-->
				<div class="box">
						<h5><?php the_field('klantervaring_column_2_titel_quote') ?></h5>
						<p><?php the_field('klantervaring_column_2_samenvatting') ?></p>
					</div>
					<div class="avatar">
					<img src="<?php the_field('klantervaring_2_avatar') ?>" alt="">
					</div>
					<h4><?php the_field('klantervaring_column_2_naam') ?></h4>
					<p><?php the_field('klantervaring_column_2_functie') ?></p>
				</div><!--COL-SM-2-->
				</div>
				<div class="item">
				<div class="col-sm"><!--COL-SM-3-->
				<div class="box">
						<h5><?php the_field('klantervaring_column_3_titel_quote') ?></h5>
						<p><?php the_field('klantervaring_column_3_samenvatting') ?></p>
					</div>
					<div class="avatar">
					<img src="<?php the_field('klantervaring_3_avatar') ?>" alt="">
					</div>
					<h4><?php the_field('klantervaring_column_3_naam') ?></h4>
					<p><?php the_field('klantervaring_column_3_functie') ?></p>
				</div><!--COL-SM-3-->
				<div>
			</div><!--ROW-->
		</div>
	</div><!--CONTAINER-->
</section><!--ONZE-KLANTENERVARINGEN-->
</div>
<?php

get_footer();
