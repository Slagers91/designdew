<?php /* Template Name: Project */ ?>
<?php get_header(); ?>

<main data-barba="container" data-barba-namespace="home">
    <!-- put here the content you wish to change
    between your pages, like your main content <h1> or <p> -->
<!------------------------ HERO ------------------------->
<section class="top"><!--TOP-->
	<div class="container"><!--CONTAINER-->
		<?php
						$args = array(
								'post_type' => 'post', // This is the name of your post type - change this as required,
								'posts_per_page' => 1, // This is the amount of posts per page you want to show
								'category_name' => 'project'
            		);

					$post_query = new WP_Query($args);
					if($post_query->have_posts() ) { ?>

					<?php
					while($post_query->have_posts() ) {
						$post_query->the_post();
                    ?>
                        <!-- <div class="news-item"> -->
						<div class="featured-img"><!--featured-img-->
                            <?php the_post_thumbnail('full'); ?>
						</div>
						<div class="row"><!--ROW-->
						<div class="col-sm project"><!--COL-SM-1-->
                            <div class="bericht">
                                <?php //the_excerpt(); ?>
                            </div>
								<h3>Project title</h3>
								<h6>The tagline about the project goes here</h6>
								<a src="#">Bekijk website</a>
							</div>
							<div class="col-sm uitleg"><!--COL-SM-2-->
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum diam orci pretium a pharetra, feugiat cursus. Dictumst risus, sem egestas odio cras adipiscing vulputate.</p>
								<a src="#">Bekijk website</a>
							</div>
						</div><!--COL-SM-1-->
						</div>
                        <!-- </div> -->
                    </div>
                    <?php

                    } ?>

                	</div>
							<?php
							}
							wp_reset_query();
					?>
		</div>
	</div><!--CONTAINER-->
</section><!--HERO-->

<!------------------------ KLANTREVIEW ------------------------->
<section class="review"><!--TOP-->
	<div class="container"><!--CONTAINER-->
		<div class="row"><!--ROW-->
			<div class="col-sm review"><!--COL-SM-1-->
				<div class="avatar">
					<img src="/wp-content/themes/designdew/dist/images/Ruud-Slagers.png" alt="">
				</div>
				<div class="naam">
					<h4>Karlijn Franken</h4>
					<p>Medeoprichtster - Los Pinos<p>
				</div>
				<div class="klantreview">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Auctor neque sed imperdiet nibh lectus feugiat nunc sem.</p>
				</div>
			</div>
		</div>
	</div><!--CONTAINER-->
</section><!--KLANTREVIEW-->

<!-------------------- BELANGRIJKE FEATURES -------------------->
<section id="features" class="features"><!--FEATURES-->
	<div class="container"><!--CONTAINER-->
	<h2>Belangrijke features</h2>
	<div class="row"><!--ROW-->
	<div class="col-sm een"><!--COL-SM-1-->
				<h6>Webshop</h6>
				<img src="/wp-content/themes/designdew/dist/images/webshop-icon.svg" alt="">
			</div><!--COL-SM-1-->
			<div class="col-sm twee"><!--COL-SM-2-->
			<h6>Makkelijk te beheren</h6>
				<img src="/wp-content/themes/designdew/dist/images/beheren-icon.svg" alt="">
			</div><!--COL-SM-2-->
			<div class="col-sm drie"><!--COL-SM-3-->
			<h6>Meerdere betaalmethodes</h6>
				<img src="/wp-content/themes/designdew/dist/images/betaalmethodes-icon.svg" alt="">
			</div><!--COL-SM-3-->
			<div class="col-sm vier"><!--COL-SM-4-->
			<h6>Mobile Responsive</h6>
				<img src="/wp-content/themes/designdew/dist/images/responsive-icon.svg" alt="">
			</div><!--COL-SM-4-->
		</div><!--ROW-->
	</div><!--CONTAINER-->
</section><!--WERKWIJZE-->

<!-------------------- RECENTE PROJECTEN -------------------->
<section id="projecten" class="projecten"><!--PROJECTEN-->
  		<div class="container"><!--CONTAINER-->
    		<div class="grid"><!--GRID-->
				<div class="row"><!--ROW-->
					<h2>Bekijk andere projecten</h2>
					<div class="owl-project owl-carousel owl-theme">
					
					<?php
						$args = array(
								'post_type' => 'post', // This is the name of your post type - change this as required,
								'posts_per_page' => -1, // This is the amount of posts per page you want to show
								'category_name' => 'portfolio'
            		);

					$post_query = new WP_Query($args);
					if($post_query->have_posts() ) { ?>
						<div class="nieuws-uitgelicht">

					<?php
					while($post_query->have_posts() ) {
						$post_query->the_post();
                    ?>
                    <div class="item">
					<div class="col-sm"><!--COL-SM-1-->	
                        <!-- <div class="news-item"> -->
						<figure class="img-container">
                            <?php the_post_thumbnail('large'); ?>
						</figure>
                            <div class="bericht">
                                <?php //the_excerpt(); ?>
                            </div>
							<h5>Mea Interieurs</h5>
							<div class="subtitel">
								<p>Webshop</p>
							</div>
						</div><!--COL-SM-1-->
						</div>
                        <!-- </div> -->
                    </div>
                    <?php

                    } ?>

                	</div>
							<?php
							}
							wp_reset_query();
					?>
				</div><!--ROW-->
			</div><!--GRID-->
    	</div><!--CONTAINER-->
	</section><!--PROJECTEN-->
	</main>


<?php

get_footer();
