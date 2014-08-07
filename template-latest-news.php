<?php
/*
Template Name: Latest News
*/
?>

<?php include(TEMPLATEPATH . '/includes/pagecolor.php'); ?>

<?php get_header(); ?>

<div class="main-content clearfix">

<div class="grid-full clearfix">

  <h2 class="page-title"><?php 
		 $customTitle = get('custom_page_title');
            if ( ! empty ( $customTitle ) )
               echo $customTitle;
			 else echo the_title();
	   ?></h2>
  
   <?php
   // display tags that appear in the category 'latest news' 
   $custom_query = new WP_Query('posts_per_page=-1&category_name=latest-news');
    if ($custom_query->have_posts()) :
	  while ($custom_query->have_posts()) : $custom_query->the_post();
		$posttags = get_the_tags();
		if ($posttags) {
			foreach($posttags as $tag) {
				$all_tags[] = $tag->term_id;
			}
		}
	   endwhile;
    endif;

   $tags_arr = array_unique($all_tags);
   $tags_str = implode(",", $tags_arr);

    $args = array(
    'smallest'  => 12,
    'largest'   => 12,
    'unit'      => 'px',
    'number'    => 0,
    'format'    => 'list',
    'include'   => $tags_str
     );
     wp_tag_cloud($args);
   ?>
  
  <div class="blog-entries blogs">
  
  <?php $the_query = new WP_Query( 'showposts=10&category_name=latest-news' ); ?>

    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    
    <div class="summary clearfix">

        <div class="blog-img">
        <a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail($post->ID, 'post-thumbnail-square'); ?></a>
        </div>
        
        <div class="blog-summary-contents">
      
        <div class="title-tags clearfix">
        <h3 class="blog-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
        <ul class="post-tags">
          <?php
            $posttags = get_the_tags();
              if ($posttags) {
                foreach($posttags as $tag) {
                echo '<li class="'.$tag->slug.'"><a class="ir" href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a></li>'; 
               }
              }
           ?>
        </ul>
        </div>

        <p class="blog-excerpt"><?php new_excerpt(350); ?></p>
        
        <a class="read-more clearfix" href="<?php the_permalink() ?>">Read full story »</a>

      </div><!-- end blog-summary-contents -->
      
    </div><!-- end sumary -->
    
    <?php endwhile;?>
    
  </div><!-- end blog entires -->

</div><!-- end grid-full -->

</div><!-- end main-content -->

<?php get_footer(); ?>