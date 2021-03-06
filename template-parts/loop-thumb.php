<?php
/**
 * @package onepagelove
 * @version 6.11.69
 *
*/ 
?>

<div class="thumb">
	
	<?php 

		$siteprice = get_post_meta($post->ID, "site_price", true);

		if ( in_category(array("Free Templates"))) { 
			echo '<span class="thumb-label thumb-label-free"><span class="thumb-label-free-position">Free</span></span>'; 
		}
		elseif ( in_category(array("Most Loved"))) { 
			echo '<span class="thumb-label thumb-label-loved"><span class="thumb-label-loved-position">Most Loved</span></span>';  
		} 
		elseif ( in_category(array("Templates"))) { 
			echo '<span class="thumb-label thumb-label-template"><span class="thumb-label-template-position">$';   
			echo $siteprice;
			echo '</span></span>'; 
		}   		    
		else {
			echo '';   
		};

	?>

	<div class="thumb-image">

		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php 

			$seo_gallery_id = get_cat_ID('Inspiration');
			$seo_templates_id = get_cat_ID('Templates');

			if ( post_is_in_descendant_category( array($seo_gallery_id,$seo_templates_id) ) ) {
				$smallScreenshot = get_post_meta($post->ID, "screenshot_sm", true);    
				$postTitle = get_the_title();
				
				if ($smallScreenshot != '') {
				   	echo '<img src="' . $smallScreenshot . '" alt="' . $postTitle . '"/>';
				}
				else {
				    echo '<img src="' . get_template_directory_uri() . '/img/no-thumbnail-set.jpg" alt="No Thumbnail Set" />';
				};
			}

			else { 
				if ( has_post_thumbnail() ) {
				    the_post_thumbnail();
				}
				else {
				    echo '<img src="' . get_template_directory_uri() . '/img/no-thumbnail-set.jpg" alt="No Thumbnail Set" />';
				} 
			};

		?></a>

	</div>

	<div class="thumb-info">

		<div class="thumb-title">

	        <div class="thumb-name">

				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?> <?php  		

					if (in_category('PSD Templates')) {
		          		echo 'PSD Template';							
					}	
					elseif ((in_category('HTML Templates')) and (in_category('Multipurpose Templates'))) {
		          		echo 'Multipurpose HTML Template';							
					}					
					elseif (in_category('HTML Templates')) {
		          		echo 'HTML Template';							
					}
					elseif (in_category('Muse Templates')) {
		          		echo 'Muse Template';							
					}		
					elseif (in_category('Joomla Templates')) {
		          		echo 'Joomla Template';							
					}	
					elseif (in_category('Bundle Deals')) {
			        	echo '';              
			        } 	
			        elseif (in_category('FullSingle Layouts')) {
		          		echo 'WordPress Layout';							
					}	
					elseif ((in_category('WordPress Themes')) and (in_category('Multipurpose Templates'))) {
		          		echo 'Multipurpose WordPress Theme';							
					}														
					elseif (in_category('WordPress Themes')) {
		          		echo 'WordPress Theme';							
					}									
					else {
		          		echo '';							
					};

					?></a><?php 

				   	$siteurl = get_post_meta($post->ID, "site_url", true);

					   	if ( ( in_category('Templates') ) AND ( !is_user_logged_in() ) ) {

				          	echo '';	

				        } 	

						elseif ($siteurl != '') {

				 		    echo '<a href="';
				 		    echo $siteurl;
				 		    echo '" target="_blank" title="Launch Website" rel="nofollow"><svg class="thumb-launch-svg" height="20px" style="enable-background:new 0 0 512 512;" viewBox="0 0 512 512" width="20px" x="0px" xml:space="preserve" y="0px"><g><path d="M352,377.9H102.4V198.2h57.5c0,0,14.1-19.7,42.7-38.2H83.2c-10.6,0-19.2,8.5-19.2,19.1v217.9c0,10.5,8.6,19.1,19.2,19.1   h288c10.6,0,19.2-8.5,19.2-19.1V288L352,319.4V377.9z M320,224v63.9l128-95.5L320,96v59.7C165.2,155.7,160,320,160,320   C203.8,248.5,236,224,320,224z"/></g></svg></a>';
						}

						else {

					        echo '';

					    }

				?></h2>
								
			</div>

		    <div class="thumb-cat">

			    <?php

					$id = get_the_ID();
					$post_category = get_the_category($id);
					$ancestors = get_ancestors($post_category[0]->term_id, 'category');
					$root = end($ancestors);

					if ( $root==194 ) { // is a Template
						echo '<a href="' . get_bloginfo('url') . '/templates">';
						echo 'Templates';
						echo  '</a>';
					}	

					elseif ( $root>0 ) { // has a parent
						echo '<a href="' . get_bloginfo('url') . '/' . get_category($root)->slug . '">';
						echo get_cat_name($root);
						echo  '</a>';
						echo ': ';
						the_category(', ' );
					}

					else { // has no parents
						the_category(', ' );
					}

				?>

		    </div>

	  	</div>

	</div>

	<div class="clear"></div>
          
</div>