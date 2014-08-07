<?php
/*
Template Name: Contact
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
       
   <?php the_content(); ?>
 
</div><!-- end entry -->
<?php endwhile; endif; ?>

</div><!-- end col2-left -->

<div class="col2-right">

  <div class="map">
    <iframe src="https://maps.google.co.uk/maps?ie=UTF8&amp;cid=6529517491497957253&amp;q=The+Birmingham+Botanical+Gardens+%26+Glasshouses&amp;gl=GB&amp;hl=en&amp;ll=52.466482,-1.929414&amp;spn=0.006295,0.006295&amp;t=m&amp;iwloc=A&amp;output=embed" height="350" width="425" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
<small><a style="color: #0000ff; text-align: left;" href="https://maps.google.co.uk/maps?ie=UTF8&amp;cid=6529517491497957253&amp;q=The+Birmingham+Botanical+Gardens+%26+Glasshouses&amp;gl=GB&amp;hl=en&amp;ll=52.466482,-1.929414&amp;spn=0.006295,0.006295&amp;t=m&amp;iwloc=A&amp;source=embed">View Larger Map</a></small>
  </div><!-- end map -->
  
</div><!-- end col2-right -->

</div><!-- end grid-full -->

<div class="grid-full clearfix">
  
 <!-- contact form to go here -->
  
</div><!-- end grid-full -->


</div><!-- end main-content -->

<?php get_footer(); ?>