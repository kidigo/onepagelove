<?php
/**
 * @package onepagelove
 * @version 6.11.23
 *
*/ 
?>

<!-- Codeable Modal on Free WordPress Theme -->  
<div id="modal-content" data-download-url="<?php $downloadurl = get_post_meta($post->ID, "download_url", true); echo $downloadurl; ?>">

	<div class="modal-title">Your <?php the_title(); ?> download is being prepared...</div>

	<div class="modal-suggestion">
		
		<div class="modal-suggestion-left">
			
			<a href="https://onepagelove.com/go/codeable" title="Codeable can help with your WordPress theme" target="_blank">
				<img src="<?php echo get_template_directory_uri(); ?>/img/hustle/modals/codeable.png" alt="Codeable" width="180" height="150" />
			</a>

		</div>

		<div class="modal-suggestion-right">
			
			<div class="modal-deal-pitch">Need help with this WordPress theme?</div>

			<p><a href="https://onepagelove.com/go/codeable" title="Codeable can help with your WordPress theme" target="_blank">Codeable</a> offers a premium service setting up and editing WordPress themes. The developer team is over 300 and offer a 100% money-back guarantee.</p>

			<a href="https://onepagelove.com/go/codeable" title="Visit Codeable" class="modal-codeable-button button-fill" target="_blank">Visit Codeable &#62;</a>

		</div>

	</div>

</div>
