<?php
/**
 * @package onepagelove
 * @version 6.10.15
 *
*/ 
?>
<div class="review-meta-right-padding-hack">

	<?php 

		if (in_category('License Templates')) {
			get_template_part('template-parts/modal','license');             
		} 
		if (in_category('Pixelarity Templates')) {
			get_template_part('template-parts/modal','pixelarity');             
		} 		
		elseif (in_category('Free Templates')) {
			get_template_part('template-parts/modal','hosting'); 
		}
		else {
			echo '';
		};
	
	?>

	<div class="review-launch">

		<a href="<?php 

			$downloadurl = get_post_meta($post->ID, "download_url", true);
			$siteurl 	 = get_post_meta($post->ID, "site_url", 	true);

			if ($downloadurl != null) {
				echo 'javascript:void(0);" id="trigger';
			}
			else {
			    echo $siteurl;
			    echo '" target="_blank';
			}; 

			?>"><?php     

				$siteprice = get_post_meta($post->ID, "site_price", true);  

				if (in_category('Free Templates')) {
					echo 'Download Free';  
				}

				elseif (in_category('HTML Templates') || in_category('Muse Templates') || in_category('WordPress Themes') || in_category('Tumblr Themes') || in_category('PSD Templates') || in_category('Unbounce Templates') || in_category('Joomla Templates')  || in_category('Bundle Deals')) {
					echo 'Buy';  

					if (in_category('Bundle Deals')) {
						echo 'Bundle Deal';              
					}  
					elseif (in_category('HTML Templates')) {
						echo ' HTML Template';             
					}   
					elseif (in_category('Muse Templates')) {
						echo ' Muse Template';             
					}          
					elseif (in_category('WordPress Themes')) {
						echo ' WordPress Theme';             
					}   
					elseif (in_category('Tumblr Themes')) {
						echo ' Tumblr Theme';              
					}          
					elseif (in_category('PSD Templates')) {
						echo ' PSD Template';              
					}        
					elseif (in_category('Squarespace Templates')) {
						echo 'Get This Template';              
					}   
					elseif (in_category('Unbounce Templates')) {
						echo 'Unbounce Template';              
					}         
					elseif (in_category('Joomla Templates')) {
						echo 'Joomla Template';              
					};  

				}

				else {
					echo 'Launch Website';            
				};	                                                             
 
				$siteprice = get_post_meta($post->ID, "site_price", true); 

				if ($siteprice != null) {
					echo ' $'. $siteprice; 
				};
			
			?></a>

	</div>

	<?php 

		$demourl = get_post_meta($post->ID, "demo_url", true);

		if ($demourl != null) {
			echo '<div class="review-launch review-demo"><a href="' . $demourl . '" target="_blank">Launch Demo</a></div>';		
		}
		else {
		    echo '';
		}; 

	?>

	<?php 

		$licenseurl = get_post_meta($post->ID, "license_url", true);

		if (($licenseurl != null) and (in_category('Pixelarity Templates'))) {
			echo '<div class="review-launch review-license"><a href="' . $licenseurl . '" target="_blank">Visit Pixelarity To Remove Credit</a></div>';		
		}
		elseif ($licenseurl != null) {
			echo '<div class="review-launch review-license"><a href="' . $licenseurl . '" target="_blank">Buy $5 License To Remove Credit</a></div>';		
		}
		else {
		    echo '';
		}; 

	?>	

	<ul>

		<li class="hosting"><strong>Need Hosting?</strong> We highly recommend <a href="https://onepagelove.com/go/bluehost">Bluehost</a></li>

		<?php 

			$licenseurl = get_post_meta($post->ID, "license_url", true);

			if ($licenseurl != null) {
				echo '<li><strong>License?</strong> <a href="https://creativecommons.org/licenses/by/3.0/" title="Creative Commons 3.0 License">CC3.0</a> (<a href="' . $licenseurl . '">remove</a>)</li>';		
			}
			else {
			    echo '';
			}; 

		?>	

		<li><strong>Reviewed:</strong>  <?php echo get_the_date(); ?></li>

		<li>

			<strong>Template?</strong> 

			<?php      

				if (in_category('HTML Templates')) {
					echo 'Yes, this is an HTML template';             
				}   
				elseif (in_category('Muse Templates')) {
					echo 'Yes, this is an Adobe Muse Template';              
				} 
				elseif (in_category('WordPress Themes')) {
					echo 'Yes, this is a WordPress theme';              
				}     
				elseif (in_category('Tumblr Themes')) {
					echo 'Yes, this is a Tumblr theme';              
				}       
				elseif (in_category('PSD Templates')) {
					echo 'Yes, this is a PSD template';              
				}         
				elseif (in_category('Squarespace Templates')) {
					echo 'Yes, this is a Squarespace template';              
				}   
				elseif (in_category('Unbounce Templates')) {
					echo 'Yes, this is an Unbounce Template';              
				}   
				elseif (in_category('Joomla Templates')) {
					echo 'Yes, this is an Joomla Template';              
				}  
				elseif (in_category('Bundle Deals')) {
					echo 'Yes, this is a Bundle Deal';              
				}                  
				else {
					echo 'No, this is a custom built website';           
				};

			?>

		</li>

		<li>

			<?php

				$dev_name = get_post_meta($post->ID, "dev_name", true);
				$dev_url = get_post_meta($post->ID, "dev_url", true);

				if ($dev_name != '') {
					echo '<strong>Built by:</strong> <a href="';
					echo $dev_url;
					echo '" target="_blank">';
					echo $dev_name;
					echo '</a>';
				}
				else {
					echo '';
				};

			?>

		</li>

	</ul>

	<div class="review-slayer">

		<div class="review-slayer-holder">

			<div class="slayer">

				<?php 

					$ads  = array(
							'ads/coffee1.php', 
							'ads/coffee2.php', 															
							'ads/tips.php', 											
							'ads/woo.php' // no comma on last one
						);

					$adfile = $ads[rand(0, count($ads) - 1)];

					include($adfile);

				?>

			</div>

		</div>

	</div>

</div>
