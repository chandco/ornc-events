<?php

// get page color from page value and set $template_color variable to use on body class
$pagecolors = get_field('page_color');

  if ($pagecolors) {
  foreach($pagecolors as $pagecolor) {

    $template_color = $pagecolor;

    }
  }
  else {
	  $template_color = "green";
  }
  
?>