<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wandervale
 */

?>


<div class="footer-container">

	<footer id="footer-main" class="footer-main">

	<section class="footer-body  container">
		
		<div class="row">
		

			<article class="img-box col-md-12 col-lg-12">

				<aside id="text-2" class="widget-footer-container widget_text">

					<?php 
						if ( ! is_active_sidebar( 'footer-sidebar-1' ) ) {
							return;
						}

						dynamic_sidebar( 'footer-sidebar-1' ); 

					?>

			   	</aside>

			</article>

	</div> <!-- TOP 2 FOOTER WIDGET CONTAINER -->
	<hr>
	<div id="footer-menu" class="row">
					<article class="img-box col-md-12">

			    <aside id="recent-posts-2" class="widget-footer-container widget_recent_entries">

			    	<?php 

						if ( ! is_active_sidebar( 'footer-sidebar-3' ) ) {
							return;
						}

						dynamic_sidebar( 'footer-sidebar-3' ); 

					?>
			      
			   	</aside>
			
			</article>
	</div> <!-- FOOTER MENU ENDS -->

	</section> <!-- FOOTER BODY ENDS -->
	<div id="copyright" class="copyright">
		<p class="text-center">All Rights Reserved Dan Netting &copy; <?php echo date('Y'); ?>. </p>
	</div>

</footer>
</div> <!-- FOOTER CONTAINER ENDED -->

	</div> <!-- End of id="content" class="site-content" -->
</div> <!-- End of id="page" class="site" -->

<?php wp_footer(); ?>
</body>
</html>