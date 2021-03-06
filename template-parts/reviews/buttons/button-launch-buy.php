<?php
/**
 * @package onepagelove
 * @version 6.11.52
 *
*/ 
?>
<div class="review-launch <?php if ( in_category('Buy Templates') ) { echo 'buy-button'; }; ?>">

	<?php 

		#-------------------------------------------------------------
		# Open Link
		#-------------------------------------------------------------

		echo '<a href="';
		$siteurl 	 = get_post_meta($post->ID, "site_url", true);
		$buyurl 	 = get_post_meta($post->ID, "buy_url", true);

		// If there is a Buy URL
		if ($buyurl != null) {
			echo $buyurl;
			echo '" rel="nofollow">';
		}

		// If a Free Template
		elseif (( in_category('Free Templates')) ) {
		    echo 'javascript:void(0);" id="trigger" rel="nofollow">';
		}	

		// everything else	
		else {
			echo $siteurl;
			echo '" rel="nofollow" target="_blank">';
		};  

		#-------------------------------------------------------------
		# Link Text
		#-------------------------------------------------------------

		// free download or category to buy
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

		#-------------------------------------------------------------
		# Close Link
		#-------------------------------------------------------------

		echo '</a>'; 
		
	?>
	
</div>