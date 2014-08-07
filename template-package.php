<?php


/*


Template Name: Package


*/


?>





<?php include(TEMPLATEPATH . '/includes/pagecolor.php'); ?>





<?php get_header(); ?>





<div class="main-content clearfix">





<div class="grid-full clearfix">





<div class="col2-left">





<div class="main-carousel flexslider">





 <div class="slides">


    <?php include(TEMPLATEPATH . '/includes/slideshow.php'); ?>


  </div><!-- end slides -->


  


</div><!-- end home-carousel -->





</div><!-- end col2-left -->





<div class="col2-right">





  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


  <div class="entry">


  


    <h2 class="page-title"><?php 


		 $customTitle = get('custom_page_title');


            if ( ! empty ( $customTitle ) )


               echo $customTitle;


			 else echo the_title();


	   ?></h2>


    


   <?php the_content(); ?>





  </div><!-- end entry -->


  <?php endwhile; endif; ?>


  


</div><!-- end col2-right -->





</div><!-- end grid-full -->





<div class="grid-full clearfix">





<?php include(TEMPLATEPATH . '/includes/informationboxes.php'); ?>


  


  <div class="col2-left">


  


    <div class="package-features">


    <?php include(TEMPLATEPATH . '/includes/featurepods.php'); ?>


    </div>


    


    


    <h4 class="book-event"><?php echo get_option('ls_bookevent'); ?></h4>


    


  </div><!-- end col2-left -->


  


  <div class="col2-right">


  


    <div class="promo-box1">


      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


    


        <?php include(TEMPLATEPATH . '/includes/adbox.php'); ?>


    


      <?php endwhile; endif; ?>


    </div>


    


  </div><!-- end col2-left -->


  


</div><!-- end grid-full -->








</div><!-- end main-content -->





<?php get_footer(); ?>