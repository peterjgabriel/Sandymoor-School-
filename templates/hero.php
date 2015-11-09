<?php
/*
Template Name: Hero
*/
get_header(); ?>




<section class="socialheader">


<div class="row white-wrapper">
	
		<div class="small-12 medium-12 large-9 columns">
			
									
						<div class="small-12 medium-6 large-6 show-for-medium-up columns date-container">
								
								<h3 class="blue-text">Twitter</h3>
								 <div class="small-3 large-3 columns date-home-page">
										<h4 class="green-text"><i class="fa fa-twitter"></i></h4></div>
						
						
						<div class="small-9 large-9 columns event-desc-home">
							
	<?php if(function_exists('ditty_news_ticker')){ditty_news_ticker(904);} ?>							
						</div>
						
						</div>

						
					
					
					
							<div class="small-12 medium-6 large-6 columns date-container">
								
								<h3 class="blue-text">Next Event</h3>
								
									<div class="small-3 large-3 columns date-home-page">
										<h4 class="green-text"><i class="fa fa-calendar"></i></h4></div>

									
						<div class="small-9 large-9 columns event-desc-home">	
							
							<h3><?php the_field('next_event_title'); ?></h3>						
							<p class="grey-text"><?php the_field('next_event_text'); ?></p>
							
									<p class="grey-text"><a href="<?php the_field('event_link'); ?>">Learn More </a>|<a href="https://outlook.office365.com/owa/calendar/6d8832bb736f4564ac8cd022878dd3bd@sandymoorschoolorg.onmicrosoft.com/1bd0e296411944418f4c3e41d9e4f6368746054215709008353/calendar.html" target="blank"> View Calendar</a></p>
						</div>
							</div>

			

				</div>
				
				<div class="large-3 columns hide-for-medium video-tour">
					<a href="http://www.sandymoorschool.org.uk/?page_id=990"><h3 class="white-text picture-gallery-title"><i class="fa fa-picture-o"></i> Picture Gallery</h3></a>
				</div>


</div>


</section>



	<div class="row">
		<div class="small-12 large-9 columns" role="main">

		<?php do_action( 'foundationpress_before_content' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
				
				<header>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>
				
				
				<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				
						</article>
			
				<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>


		</div>
		
	
	
		<?php get_sidebar('home'); ?>







<?php get_footer(); ?>
