<?php
/* Template Name: affilations */
?>
<?php get_header(); ?>
 <?php	$image=get_post_meta(9,"banner-inner",true);
		$thumb = wp_get_attachment_image_src($image, 'banner-inner' );
	  ?>
    <div class="banner banner-inner wow slideInUp" data-wow-duration="1s" style=" background-image: url(<?php echo $url = $thumb['0'];?>);">
        <div class="container">

            <div class="banner-text-cvr">
                <div class="banner-inner-text">
                    <!--<h1>About Us</h1>-->
                </div>
            </div>

        </div>
    </div>
    
    <div class="affilations-main">
        <div class="container">
            <h1>Affilations</h1>
            <div class="affilations-cvr">

            <div id="owl-demo-affi" class="owl-carousel owl-theme">
			<?php
			global $post;
$type = 'affilation';
$args=array(
  'post_type' => $type,
  'post_status' => 'publish'
  
  );


$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
  while ($my_query->have_posts()) : $my_query->the_post(); 

  ?>
  
                <div class="item wow zoomIn" data-wow-duration="1s">
					
   <?php $newpost = $post->ID;
				     $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id( $newpost ),'affilation-images' );
						$url = $image_attributes[0];
						?>
						<img src="<?php echo $url;?>">
   </div> <?php
  endwhile;
}
 // Restore global post data stomped by the_post().
?>
               
            </div>

            
        </div>
    

        </div>
    </div>
    
     

<?php get_footer(); ?>