<?php 

// get feature pods from magic field values
$elements = get_group('feature_pods');

if ($elements)  {

echo '<ul class="slides">';

foreach($elements as $key => $element) {  
                                    
echo '<li>';

$images = get_order_field('feature_pods_feature_pod_title',$key);
foreach($images as $image) {

if( get('feature_pods_feature_pod_image', $key ,$image = true) ) {
    echo '<img class="resize" alt="'.$element['feature_pods_feature_pod_title'][1].'" src="' . get('feature_pods_feature_pod_image', $key ,$image) .'">';
   }
   
if( get('feature_pods_feature_pod_title', true) ) {
    echo '<span class="pod-title">'.$element['feature_pods_feature_pod_title'][1].'</span>'; 
}
echo '</li>';

   } 

  } 
  
  echo '</ul><!-- end home-feature-pods -->';
  
}

?>

