<div class="thumb">

	<?php 

		$thumbs  = array(
				'thumbs/themeforest.php', 											
				'thumbs/themeforest.php' // no comma on last one
			);

		$thumb = $thumbs[rand(0, count($thumbs) - 1)];

		include($thumb);

	?>
          
</div>		