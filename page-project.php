<?php /* Template Name: Project */ ?>
<?php get_header(); ?>
<div class="wrapper" data-barba='container' data-barba-namespace='project'><!--BARBA-->
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
            		if($post_query->have_posts() ) { 
        	?>
         <?php
            while($post_query->have_posts() ) {
            	$post_query->the_post();
            ?>
         <div class="featured-img"><!--featured-img-->
            <?php the_post_thumbnail('full'); ?>
         </div><!--featured-img-->
         <div class="row"><!--ROW-->
            <div class="col-sm project"><!--COL-SM-1-->
               <div class="bericht"><!--BERICHT-->
                  <?php //the_excerpt(); ?>
               </div><!--BERICHT-->
               <h3>Project title</h3>
               <h6>The tagline about the project goes here</h6>
               <a src="#">Bekijk website</a>
            </div><!--COL-SM-1-->
            <div class="col-sm uitleg"><!--COL-SM-2-->
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum diam orci pretium a pharetra, feugiat cursus. Dictumst risus, sem egestas odio cras adipiscing vulputate.</p>
               <a src="#">Bekijk website</a>
            </div><!--COL-SM-2-->
      </div><!--CONTAINER-->
		<?php
			} 
		?>

		<?php
			}
			wp_reset_query();
		?>
	</section><!--TOP-->


	<!------------------------ KLANTREVIEW ------------------------->
	<section class="review"><!--REVIEW-->
	<div class="container"><!--CONTAINER-->
		<div class="row"><!--ROW-->
			<div class="col-sm review"><!--COL-SM-1-REVIEW-->
				<div class="avatar"><!--AVATAR-->
					<img src="/wp-content/themes/designdew/dist/images/Ruud-Slagers.png" alt="">
				</div><!--AVATAR-->
				<div class="naam"><!--NAAM-->
					<h4>Karlijn Franken</h4>
					<p>Medeoprichtster - Los Pinos</p>
				</div><!--NAAM-->
				<div class="klantreview"><!--KLANTREVIEW-->
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Auctor neque sed imperdiet nibh lectus feugiat nunc sem.</p>
				</div><!--KLANTREVIEW-->
			</div><!--COL-SM-1-REVIEW-->
		</div><!--ROW-->
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
				<div class="owl-project owl-carousel owl-theme"><!--CAROUSEL-->
				<?php
					$args = array(
							'post_type' => 'post', // This is the name of your post type - change this as required,
							'posts_per_page' => -1, // This is the amount of posts per page you want to show
							'category_name' => 'portfolio'
					);
					
					$post_query = new WP_Query($args);
					if($post_query->have_posts() ) { ?>
				<div class="nieuws-uitgelicht"><!--UITGELICHT-->
					<?php
						while($post_query->have_posts() ) {
							$post_query->the_post();
						?>
					<div class="item"><!--ITEM-->
						<div class="col-sm"><!--COL-SM-1-->	
							<figure class="img-container"><!--AFBEELDING-->	
								<?php the_post_thumbnail('large'); ?>
							</figure><!--AFBEELDING-->	
							<div class="bericht"><!--BERICHT-->	
								<?php //the_excerpt(); ?>
							</div><!--BERICHT-->	
							<h5>Mea Interieurs</h5>
							<div class="subtitel"><!--SUBTITEL-->
								<p>Webshop</p>
							</div><!--SUBTITEL-->
						</div><!--COL-SM-1-->
					</div><!--ITEM-->
				</div><!--UITGELICHT-->
					<?php
						} ?>
			</div><!--CAROUSEL-->
				<?php
				}
				wp_reset_query();
				?>
			</div><!--ROW-->
		</div><!--GRID-->
	</div><!--CONTAINER-->
	</section><!--PROJECTEN-->
</div><!--BARBA-->

<?php
get_footer();