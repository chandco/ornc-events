<?php 

// get slides from magic field values
$adimages = get_order_field('adbox_adbox_image');
 
  foreach($adimages as $adimage){
		  $adimageImg = get('adbox_adbox_image',1,$adimage);
          echo '<img alt="" src="'.$adimageImg.'" />';
  }

?>

