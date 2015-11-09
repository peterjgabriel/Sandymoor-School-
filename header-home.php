<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-precomposed.png">
		
		    
		
<link href='https://fonts.googleapis.com/css?family=Bitter:400,400italic,700|Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>		
		<?php wp_head(); ?>
	</head>
	<body class="blue-body" <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>
	
	<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">
	
	<?php do_action( 'foundationpress_layout_start' ); ?>
	
	<nav class="tab-bar">
		<section class="left-small">
			<a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
		</section>
		<section class="middle tab-bar-section">
			
		 <div class="logo">
                <h1><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/
assets/img/sandymoor-logo-small.png"></a></h1>
            </div>
		</section>
	</nav>

	<?php get_template_part( 'parts/off-canvas-menu' ); ?>

	<?php get_template_part( 'parts/top-bar-home' ); ?>
	
	
	
	<header id="sandymoor-homepage-hero" role="banner">
	
	
	<div class="row">
		<div class="small-12 large-12 columns">
			<div class="livelearnplay-cont">
				<h1>Live <span>Learn</span> Play</h1>
			</div>
		</div>
	</div>
			
			
			
<div class="row show-for-medium-up">
	
	
							
	<div class="small-3 large-2 columns">
		<a href="http://www.google.co.uk/url?sa=t&rct=j&q=&esrc=s&source=web&cd=4&cad=rja&uact=8&ved=0CDQQFjADahUKEwiVhbeEye_GAhVEWdsKHYdAAoc&url=http%3A%2F%2Freports.ofsted.gov.uk%2Findex.php%3Fq%3Dfiledownloading%2F%26id%3D2323631%26type%3D1%26refer%3D0&ei=GvyvVZWQKMSy7QaHgYm4CA&usg=AFQjCNFwiG8kxL7FfS5Lf-wMdzro0eHLfA" target="blank"><div class="live-box"></div></a>
	</div>
				
	<div class="small-3  large-2 columns">
		<a href="http://www.sandymoorschool.org.uk/prospectus"><div class="learn-box"></div></a>
	</div>
							
							
	<div class="small-3  large-2 columns end">
		<a href="http://www.sandymoorschool.org.uk/?page_id=985"><div class="play-box"></div></a>
	</div>
						
</div>
		

</header>

	</div>
	

<section class="container" role="document">
	<?php do_action( 'foundationpress_after_header' ); ?>
