<?php include(TEMPLATEPATH . '/includes/pagecolor.php'); ?>

<?php get_header(); ?>

<div class="main-content clearfix">

<div class="grid-full clearfix">

  <?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle"><?php printf(__('Archive for the &#8216;%s&#8217; Category', 'ornc-events'), single_cat_title('', false)); ?></h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle"><?php printf(__('Posts Tagged &#8216;<span class="match">%s</span>&#8217;', 'ornc-events'), single_tag_title('', false) ); ?></h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle"><?php printf(_c('Archive for %s|Daily archive page', 'ornc-events'), get_the_time(__('F jS, Y', 'minimalism'))); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle"><?php printf(_c('Archive for %s|Monthly archive page', 'ornc-events'), get_the_time(__('F, Y', 'minimalism'))); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle"><?php printf(_c('Archive for %s|Yearly archive page', 'ornc-events'), get_the_time(__('Y', 'minimalism'))); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle"><?php _e('Author Archive', 'ornc-events'); ?></h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle"><?php _e('Blog Archives', 'ornc-events'); ?></h2>
 	  <?php } ?>
      
      
  
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
  
  <?php while (have_posts()) : the_post(); ?>
    
    <div class="summary clearfix">


<div class="blog-img">
        <a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail($post->ID, 'post-thumbnail-square'); ?></a>
        
        </div>


             
        <div class="blog-summary-contents">
      
        <div class="title-tags clearfix">
        <h3 class="blog-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
        <ul class="post-tags">
          <li class="weddings"></li>
          <li class="press"></li>
          <li class="restaurant"></li>
        </ul>
        </div>

        <?php the_excerpt(); ?>

      </div><!-- end blog-summary-contents -->
      
    </div><!-- end sumary -->
    
   <?php endwhile; ?>
   
    
    <?php endif; ?>
    
  </div><!-- end blog entires -->

</div><!-- end grid-full -->

</div><!-- end main-content -->

<?php get_footer(); ?>