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

	<aside class="footer" role="designdewary">

	<div class="container">
		<div class="row">
			<div class="col-sm dd">
			<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
			</div>
			<div class="col-sm menu">
			<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
			</div>
			<div class="col-sm portfolio">
			<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
			</div>
			<div class="col-sm">
			<?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
			</div>
		</div>
		<div class="row coloform">
		<div class="col-sm">
		&copy; 2017 - <?php echo date("Y"); ?>  designdew
			</div>
			<div class="col-sm disclaimer">
			<?php
			wp_nav_menu(
				array(
					'menu' => 'footer-2'
				)
			);
			?>
			</div>
		
		</div>
	</div>

	</aside>
	<!-- #fatfooter -->
</div>
</div><!-- #page -->



<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script type="text/javascript">
var owl = $('.owl-klanten');
owl.owlCarousel({
    items:3,
    loop:true,
    margin:40,
    autoplay:true,
    autoplayTimeout:60000,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
            loop:false
        }
    }
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[4000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})

$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});

$('.owl-project').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
})
</script>
</body>
</html>
