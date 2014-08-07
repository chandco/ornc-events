<?php 

// get information boxes from magic field values
$elements = get_group('information_boxes');

if ($elements)  {

echo '<ul class="room-info-boxes clearfix">';

foreach($elements as $key => $element) {  
                                    
echo '<li>';

$informationtexts = get_order_field('information_boxes_information_text',$key);
foreach($informationtexts as $informationtext) {

if( get('information_boxes_information_text', true) ) {
    echo '<a href="'.$element['information_boxes_information_link'][1].'">'.$element['information_boxes_information_text'][1].'</a>'; 
}
echo '</li>';

  }

 } 
 
 echo '</ul><!-- end room-info-boxes -->';

} 

?>