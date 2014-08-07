<?php
/*
Template Name: Single Room
*/
?>

<?php include(TEMPLATEPATH . '/includes/pagecolor.php'); ?>

<?php get_header(); ?>

<div class="main-content clearfix">

<div class="grid-full clearfix">

<div class="col2-left">

<div class="main-carousel flexslider">

 <ul class="slides">
   <?php include(TEMPLATEPATH . '/includes/slideshow.php'); ?>
  </div><!-- end slides -->
  
</li><!-- end home-carousel -->

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
  
   <div class="single-room-features">
   <?php include(TEMPLATEPATH . '/includes/featurepods.php'); ?>
   </div>
    
    <div class="blog-entries rooms">
    
    <?php

     // get blog category to show from magic field
     $categoryShow = get_field('show_blog_category');

      if ($categoryShow) {
		  
      foreach($categoryShow as $category) {


         }
       }
  
    ?>
    
   <?php $the_query = new WP_Query( 'showposts=3&category_name='.$category.'' ); ?>

    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    
    <div class="summary clearfix">

        <div class="blog-img">
        <a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail($page->ID, 'post-thumbnail-home'); ?></a>
        </div>
        
        <div class="blog-summary-contents">
      
        <div class="title-tags clearfix">
        <h3 class="blog-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
        </div>
        
        <p class="blog-excerpt"><?php new_excerpt(250); ?></p>
        
        <a class="read-more clearfix" href="<?php the_permalink() ?>">Read full story »</a>


      </div><!-- end blog-summary-contents -->
      
    </div><!-- end sumary -->
    
    <?php endwhile;?>

    
    </div><!-- end blog-entries -->

</div><!-- end grid-full -->


</div><!-- end main-content -->

<?php get_footer(); ?>