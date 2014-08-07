<?php

/*

Template Name: Single Page With Blog

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

<div class="blog-entries rooms">
    
    <?php

     // get blog category to show from magic field
     $categoryShow = get_field('show_blog_category');

      if ($categoryShow) {
		  
      foreach($categoryShow as $category) {


         }
       }
  
    ?>
    
   <?php $the_query = new WP_Query( 'showposts=20&category_name='.$category.'' ); ?>

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
        
        <a class="read-more clearfix" href="<?php the_permalink() ?>">View Menu »</a>


      </div><!-- end blog-summary-contents -->
      
    </div><!-- end sumary -->
    
    <?php endwhile;?>

    
    </div><!-- end blog-entries -->



</div><!-- end grid-full -->



</div><!-- end main-content -->



<?php get_footer(); ?>