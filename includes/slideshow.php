<?php
      
	  // get slides from magic field values
      $slides = get_order_field('slideshow_images_slide_image');
 
      foreach($slides as $slide){
		  $slideImg = get('slideshow_images_slide_image',1,$slide);
          echo '<li><a href="'.$slideImg.'" class="fancybox" data-fancybox-group="gallery1"><img alt="" src="'.$slideImg.'" /></a></li>';
      }
	  
?>