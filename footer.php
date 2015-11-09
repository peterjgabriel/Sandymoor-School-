<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

?>

</section>

  <!-- MAP ############################################### -->
      
      <section class="mapcont">
          
          <!-- Header -->
          <div class="container" id="map"></div>
          <!-- /Header -->
          
          
      </section>
      
      <!-- /MAP ############################################### -->
      


<section class="social-footer">
	
	
	<div class="row">
		
				<div class="small-12 large-4 columns">
					
					<h2 class="homeheading">find<span> us</span></h2>
									
				</div>
				
				<div class="small-12 large-4 columns">
					<h6 class="blue-bottom-border">Our Address</h6>
						<p><strong>Sandymoor School</strong></p>
						
						<p>Wharford Lane, Sandymoor,<br>
						Cheshire. WA7 1QU</p>

<p><a href="mailto:info@sandymoorschool.org.uk">info@sandymoorschool.org.uk</a></p>

<p>Telephone - 01928 571217</p>		

<a href="https://www.google.co.uk/maps/dir//Sandymoor+School,+Wharford+Ln,+Sandymoor,+Cheshire+WA7+1QU,+United+Kingdom/@53.3445566,-2.6547646,17z/data=!4m12!1m3!3m2!1s0x0:0x9d5e1a915dbf472a!2sSandymoor+School!4m7!1m0!1m5!1m1!1s0x487afd460d0f2fcd:0x9d5e1a915dbf472a!2m2!1d-2.6547646!2d53.3445566" target="blank"><h3 class="blue-text">Get Directions</h3></div>
				
				<div class="small-12 large-4 columns">
					
						<div class="small-12 large-12 columns facebook-button">
							<a href="https://www.facebook.com/SandymoorSchool"><div class="social-button-cont">
								<h3 class="white-text"><i class="fa fa-fw fa-facebook"> </i> become a fan</h3>
							</div></a>	
			
			
				</div>
				
				
			<div class="small-12 large-12 columns twitter-button">
					<a href="https://twitter.com/sandymoorschool"><div class="social-button-cont">
						<h3 class="white-text"><i class="fa fa-fw fa-twitter"> </i> follow us</h3>
					</div></a>
			</div>
					
					
			
				</div>
				
				</div>

	
	
</section>

<section class="footer-contact-cont">

<footer class="row">
	<?php do_action( 'foundationpress_before_footer' ); ?>
	<?php dynamic_sidebar( 'footer-widgets' ); ?>
	<?php do_action( 'foundationpress_after_footer' ); ?>
</footer>

</section>


<a class="exit-off-canvas"></a>

	<?php do_action( 'foundationpress_layout_end' ); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>






</body>

	
		   <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.gmap.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>


  <script type="text/javascript">
        $(document).ready(function(){
                          $("#map").gMap({ controls: true,
                                         scrollwheel: false,
                                         draggable: true,
                                         markers: [{ latitude: 53.344557,
                                                   longitude: -2.654765,
                                                   icon: { image: "http://wearecreation.co.uk/sandymoorschool/wp-content/themes/sandymoorschool2016/assets/img/map-icon.png",
                                                   iconsize: [100, 100],
                                                   iconanchor: [52,100],
                                                   infowindowanchor: [12, 0] } }
                                                   ],
                                         icon: { image: "http://wearecreation.co.uk/sandymoorschool/wp-content/themes/sandymoorschool2016/assets/img/map-icon.png",
                                         iconsize: [100, 100],
                                         iconanchor: [52, 100],
                                         infowindowanchor: [12, 0] },
                                         latitude: 53.344557,
                                         longitude: -2.654765,
                                         zoom: 16 });
                          });
    </script>



</html>