<?php 

// get feature pods from magic field values
$elements = get_group('adbox');

if ($elements)  {
	
echo '<div class="promo-box">';

foreach($elements as $key => $element) {  
                                    
$images = get_order_field('adbox_adbox_image',$key);
foreach($images as $image) {

if( get('adbox_adbox_image', $key ,$image = true) ) {
    echo '<a href="'.$element['adbox_adbox_link'][1].'"><img alt="" src="' . get('adbox_adbox_image', $key ,$image) .'"></a>';
 }

   }


$htmls = get_field('adbox_adbox_html');
 foreach($htmls as $html) {


    echo "<div>" . $html . "</div>";
 
   

  } 

echo '</div>';
  
}

}
?>

