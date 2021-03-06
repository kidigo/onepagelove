<?php
/**
 * @package onepagelove
 * @version 6.11.7
 *
*/ 
?>

<div class="review-note">

	<div class="note-image">
	    
	    <a href="<?php print get_home_url(); ?>/screenshots" title="Learn more about Screenshot Concierge"><?php 

	    $smallScreenshot = get_post_meta($post->ID, "screenshot_sm", true); 

	    if ($smallScreenshot != '') {
	    	echo '<img src="' . $smallScreenshot . '" class="concierge" alt="Screenshot Concierge"/>';
	    }
	    else {
	    	echo '';
	    };
	    ?></a>

	</div>

	<div class="note-info">

	    <p class="note-name">Impressed by this Retina-Optimized Screenshot?</p>
	    
	    <p class="note-bio"><a href="<?php print get_home_url(); ?>/screenshots" title="Learn more about Screenshot Concierge">Screenshot Concierge</a> delivers beautiful screenshots of your Landing Page in multiple resolutions and devices - perfect for a website launch.</p>

	</div>

</div>