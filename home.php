<?php
/**
 * The main template file.
 * Template Name: Blog Template
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

// $client_designation = get_field( 'client_designation' );

get_header(); ?>

<section class="above-blog-block-1">
	
	<!-- <img class="img-responsive wow lightSpeedIn" src="/wp-content/uploads/2016/06/TianaMediaBlock.jpg" data-wow-duration="1s" data-wow-delay="0s" alt=""> -->
	<!-- <img class="img-responsive wow zoomInUp center-block" src="/wp-content/uploads/2016/06/TianaNEWJuneTextBlock1.png" data-wow-duration="1s" data-wow-delay="0s" alt=""> -->
	
</section>

<section class="above-blog-block-2">

	<div class="wrapper container">
		
		<h2 class="text-center">
			GET INTO ACTION </br>
			CLICK ON AN OPTION BELOW
		</h2>

		<!-- <h3>
			It's time to learn HOW to set up your OWN online systems.<br>
			From WordPress to Lead Pages to Newsletters. No more <br>
			guessing or paying thousands to get it done.
		</h3>
 -->
		<div class="icon-content">

			<figure class="col-sm-4 col-md-4 col-md-lg">
				<a href="#" target="_blank">
					<img class="img-responsive wow zoomIn center-block" src="/wp-content/uploads/2016/07/LifeatleanFreeGuide.png" data-wow-duration="1.5s" data-wow-delay="0s" alt="">
				</a>

			</figure>
			<figure class="col-sm-4 col-md-4 col-md-lg">

				<a href="#" target="_blank">
					<img class="img-responsive wow zoomIn center-block" src="/wp-content/uploads/2016/07/Lifeatleantrainingresources.png" data-wow-duration="2s" data-wow-delay="0s" alt="">
				</a>

			</figure>
			<figure class="col-sm-4 col-md-4 col-md-lg">

				<a href="#" target="_blank">
					<img class="img-responsive wow zoomIn center-block" src="/wp-content/uploads/2016/07/LifeatleanJoinCommunity.png" data-wow-duration="1.5s" data-wow-delay="0s" alt="">
				</a>

			</figure>						

		</div>

	</div>
	
</section>

<!-- BLOG BLOCK -->

<section class="container">

	<div id="primary" class="content-area col-md-8 col-lg-8">
		<main id="main" class="site-main" role="main">
		<!-- <h1><?php echo $client_designation; ?></h1>		 -->

		<?php
		if ( have_posts() ) :

			// if ( is_home() && ! is_front_page() ) : ?>
				<!-- <header> -->
					<!-- <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1> -->
				<!-- </header> -->

			<?php
			// endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="sidebar col-md-4 col-md-4">

		<?php get_sidebar();  ?>
		
	</div>

</section>

<section class="below-blog-block-1 hide">

	<div class="wrapper container-fluid">
		
		<h2>Learn the Exact Step By Step Systems behind</h2>
		<h2>creating your own profitable online marketing funnel.</h2>
		<br><br>
		<div class="icon-content">

			<figure class="col-sm-12 col-md-12 col-12">
				<!-- <img class="center-block img-responsive wow zoomIn" src="/wp-content/uploads/2016/06/TianaBullseyeImage.png" data-wow-duration="2s" data-wow-delay="0s" alt=""> -->
				<!-- <iframe src="https://player.vimeo.com/video/171235632" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->

					<div class="col-md-2 col-lg-2"></div>
						<div class="col-md-8 col-lg-8">
							<div class="embed-responsive embed-responsive-16by9">
							  <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/171235632"></iframe>
							</div>
						</div>	
					<div class="col-md-2 col-lg-2"></div>


			</figure>
			<!-- 16:9 aspect ratio -->

		</div>

		<h1>HEY DREAM ARCHER - TIME TO FOLLOW YOUR ARROW!</h1>

	</div>


</section>

<section class="below-blog-block-2">

		<div class="wrapper container-fluid">
		
		<h2> WORK WITH ME </h2>

		<div class="icon-content">

			<figure class="col-sm-3 col-md-3 col-lg-3 left-img">
				<a href="#" target="_blank">
					<img class="img-responsive center-block wow bounceInLeft" src="/wp-content/uploads/2016/07/LifeatLeanEssentialRidingSkills-650.png" data-wow-duration="1s" data-wow-delay="0s" alt="">
				</a>
				
			</figure>
			<figure class="col-sm-6 col-md-6 col-lg-6 center-img">
				<a href="#" target="_blank">
					<img class="img-responsive center-block wow zoomInDown" src="/wp-content/uploads/2016/07/LifeatleanTrackRiderTraining-650.png" data-wow-duration="2s" data-wow-delay="s" alt="">
				</a>
			</figure>
			<figure class="col-sm-3 col-md-3 col-lg-3 right-img">
				<a href="#" target="_blank">
					<img class="img-responsive center-block wow bounceInRight" src="/wp-content/uploads/2016/07/LifeAtLeanOneonOneConsulting-650.png" data-wow-duration="1s" data-wow-delay="0s" alt="">
				</a>
			</figure>						

		</div>

	</div>
	
</section>
<?php

get_footer();
