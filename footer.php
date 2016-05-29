		</div><!-- content end -->		
		
		<div class="clear"></div>

	</div><!-- container end -->

	<div id="footer-container">
		
		<div id="footer-quote-container">
			
			<div id="footer-quote">	

				<div class="quote"><?php include("frontend/inc/random-quotes.php"); ?></div>

			</div><!-- /#footer-quote -->		
			
		</div><!-- /#footer-quote-container -->

		<div id="footer-promo-container">
			
			<div id="footer-promo">	

				<div class="promo-info">

					<span class="promo-info-title"><a href="https://onepagelove.com/currl-bundle">The Personal Theme Bundle</a></span>

					<span class="promo-info-description"><a href="https://onepagelove.com/currl-bundle">3 minimal One Page WordPress themes to create a beautiful online presence.</a></span>

				</div>

				<div class="promo-image"><a href="https://onepagelove.com/currl-bundle"><img src="<?php echo get_template_directory_uri(); ?>/img/currl-bundle.jpg" alt="Personal Theme Bundle" /></a></div>

				<div class="promo-buttons"><a href="https://onepagelove.com/currl-bundle">View Demo</a>  <a href="https://onepagelove.com/currl-bundle">See Features</a></div>

			</div><!-- /#footer-promo -->		
			
		</div><!-- /#footer-top-container -->

		<div id="footer-bottom-container">

			<div id="footer-lists">

				<div class="footer-column">	

					<h3>Browse</h3>
					<?php include('frontend/inc/nav-browse.php'); ?>

				</div>	

				<div class="footer-column">	

					<h3>Information</h3>
					<?php include('frontend/inc/nav-info.php'); ?>

				</div>	

				<div class="footer-column" id="trending">

					<h3>Trending</h3>
					<?php include('frontend/inc/nav-popular.php'); ?>

				</div>

				<div class="footer-column">

					<h3>Resources</h3>
					<?php include('frontend/inc/nav-resources.php'); ?>

				</div>

				<div class="footer-column">

					<h3>Connect</h3>
					<?php include('frontend/inc/nav-subscribe.php'); ?>

				</div>

				<div class="clear"></div>

			</div><!-- #footer-lists -->

		</div><!-- #footer-bottom-container -->  

	</div><!-- #footer-container -->  

</div><!-- /#container-outer -->  

<?php do_action('wp_footer'); ?>

</body>
</html>