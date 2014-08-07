<?php

/*

Template Name: Event Spaces

*/

?>



<?php include(TEMPLATEPATH . '/includes/pagecolor.php'); ?>



<?php get_header(); ?>



<div class="main-content clearfix">



<div class="grid-full clearfix">



<div class="col2-left">



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="entry">



   <h2 class="page-title"><?php 

		 $customTitle = get('custom_page_title');

            if ( ! empty ( $customTitle ) )

               echo $customTitle;

			 else echo the_title();

	   ?></h2>

  

  <ul class="event-info-boxes">

    <li class="wed"><a href="/venue/weddings/"><p>Weddings</p></a></li>

    <li class="xmas"><a href="/venue/christmas/"><p>Christmas</p></a></li>

    <li class="ddr"><a href="/venue/corporate/"><p>Corporate Events</p></a></li>

  </ul>

  

  <?php the_content(); ?>



</div><!-- end entry -->

<?php endwhile; endif; ?>



</div><!-- end col2-left -->



<div class="col2-right">



  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    

      <?php include(TEMPLATEPATH . '/includes/adbox.php'); ?>

    

  <?php endwhile; endif; ?>

  

</div><!-- end col2-right -->



</div><!-- end grid-full -->



<div class="grid-full clearfix">

  

  <ul class="event-rooms clearfix">



    <?php

	  $mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );



	  foreach( $mypages as $page ) {		

		$content = $page->post_content;

		if ( ! $content ) // Check for empty page

			continue;

		$content = apply_filters( 'the_content', $content );

		

	 ?>

        <li>

          <a href="<?php echo get_page_link( $page->ID ); ?>" class="room-img"><?php echo get_the_post_thumbnail($page->ID, 'post-thumbnail-room'); ?></a>

          <div class="event-rooms-excerpt">

           <h5><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h5>

           <p><?php echo wp_trim_words( $content, 40 ); ?></p>

          </div>

       </li>

	<?php }	?>

    

  </ul><!-- end event-rooms -->

  

</div><!-- end grid-full -->





</div><!-- end main-content -->



<?php get_footer(); ?>