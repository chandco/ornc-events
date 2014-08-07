<?php

/*

Template Name: Single Page

*/

?>



<?php include(TEMPLATEPATH . '/includes/pagecolor.php'); ?>



<?php get_header(); ?>



<div class="main-content clearfix">



<div class="grid-full clearfix">



  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div class="entry">

  

  <h2 class="page-title"><?php 

		 $customTitle = get('custom_page_title');

            if ( ! empty ( $customTitle ) )

               echo $customTitle;

			 else echo the_title();

	   ?></h2>

  

  <div class="single-blog-entry">

   

   <!--<?php echo get_the_post_thumbnail($post->ID, 'post-thumbnail-square',  array('class' => 'single-blog-img')); ?>-->

   

   <?php the_content(); ?>

   

  </div><!-- end entry -->

  <?php endwhile; endif; ?>

    

  </div><!-- single-blog-entry -->



</div><!-- end grid-full -->



</div><!-- end main-content -->



<?php get_footer(); ?>