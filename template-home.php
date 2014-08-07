<?php
/*
Template Name: Home
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

  </ul><!-- end slides -->
  
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
  
  <div class="col2-left">
  
   <ul class="feature-pods">
   <?php
    $args = array('tag_slug__and' => array('home-feature'), 'posts_per_page' => 3, 'order' => 'DESC');
    $postslist = get_posts( $args );
    foreach ($postslist as $post) :  setup_postdata($post); ?>

		<li>
        <a href="<?php the_permalink() ?>">
          <?php echo get_the_post_thumbnail($post->ID, 'post-thumbnail-square'); ?>
          <span class="pod-title"><?php the_title(); ?></span>
        </a>
        </li>
        
   <?php endforeach; ?>

   </ul><!-- end home-feature-pods -->
    
    <div class="latest-posts">
    
      <h2 class="page-title">Latest Posts</h2>
    
    <div class="blog-entries home-latest">
    
    <?php $the_query = new WP_Query( 'cat=-9' ); ?>
    
    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    
    <div class="summary clearfix">

     

<div class="blog-img">
        <a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail($post->ID, 'post-thumbnail-home'); ?></a>
<?php if(has_tag("news")): ?>
<span class="news">NEWS</span>
<?php elseif (has_tag("case-studies")): ?>
<span class="case">CASE STUDY</span>
<?php else: ?>

<?php endif; ?>
</div>
        
        <div class="blog-summary-contents">
      
        <div class="title-tags clearfix">
        <h3 class="blog-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
        </div>
        
        <p><?php new_excerpt(440); ?></p>
        
        <a class="read-more clearfix" href="<?php the_permalink() ?>">Read full story »</a>

      </div><!-- end blog-summary-contents -->
      
    </div><!-- end sumary -->
    
    <?php endwhile;?>

    </div><!-- end blog-entries -->
     
    </div><!-- end latest-posts -->
    
  </div><!-- end col2-left -->
  
  <div class="col2-right">
  
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
      <?php include(TEMPLATEPATH . '/includes/adbox.php'); ?>
    
    <?php endwhile; endif; ?>
    
  </div><!-- end col2-left -->
  
</div><!-- end grid-full -->


</div><!-- end main-content -->

<?php get_footer(); ?>