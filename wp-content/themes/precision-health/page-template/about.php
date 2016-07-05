<?php 
 /* Template Name: about */
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
    
    <div class="about-main  wow fadeInUp" data-wow-duration="2s">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="about-main-text">
                        <h1>ABOUT US</h1>
                        <h5><?php the_field('heading-after-aboutus',83); ?></h5>
                        <p><?php the_field('content-after-heading',83); ?></p>
                        <div class="about-tag-line">
                            <p><?php the_field('last-blue-color-text',83); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
   
 
 
 
 
 
 
 <?php get_footer(); ?>