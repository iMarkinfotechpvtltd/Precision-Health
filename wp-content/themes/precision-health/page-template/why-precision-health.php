<?php
/* Template Name: why-precision-health */
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
	
	
	  <div class="why-main">
        <div class="container">
            <div class="why-main-text">
                <h1>Why Precision Health</h1>
                <p>When you become our patient you become our priority, we focus on your health and wellbeing. We have a unique treatment approach to healthcare that truly sets us apart. We understand that no two bodies are built alike and treatment that provides optimum results requires an understanding and educated approach.</p>
            </div>
            
            <div class="why-list-outer">
                <div class="row">
                <div class="col-md-4 col-sm-5 col-xs-12 make-va">   
                    <div class="why-img-left">
					<?php	$image=get_post_meta(125,"first-section-image",true);
							$thumb = wp_get_attachment_image_src($image, 'why-precision-images' );
						  ?>
                        <figure><img src="<?php echo $url = $thumb['0'];?>" class="img-responsive"></figure>
                    </div>                 
                </div>
                <div class="col-md-8 col-sm-7 col-xs-12 make-va">
                    <div class="why-list-text">
                         <h4><?php the_field('first-section-heading',125); ?></h4>
                    <ul>
                        <?php the_field('first-section-content',125); ?>
                    </ul>    
                    </div>
                </div>
            </div>
            </div>
            
            <div class="why-list-outer">
                <div class="row">
                
                <div class="col-md-8 col-sm-7 col-xs-12 make-va">
                    <div class="why-list-text">
                         <h4><?php the_field('second-section-heading',125); ?></h4>
                    <ul>
                        <?php the_field('second-section-content',125); ?>
                    </ul>    
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-5 col-xs-12 make-va">   
                    <div class="why-img-right">
					<?php	$image=get_post_meta(125,"second-section-image",true);
							$thumb = wp_get_attachment_image_src($image, 'why-precision-images' );
						  ?>
                        <figure><img src="<?php echo $url = $thumb['0'];?>" class="img-responsive"></figure>
                    </div>                 
                </div>
                
            </div>
            </div>
            
            <div class="why-list-outer">
                <div class="row">
                <div class="col-md-4 col-sm-5 col-xs-12 make-va">   
                    <div class="why-img-left">
					<?php	$image=get_post_meta(125,"third-section-image",true);
							$thumb = wp_get_attachment_image_src($image, 'why-precision-images' );
						  ?>
                        <figure><img src="<?php echo $url = $thumb['0'];?>" class="img-responsive"></figure>
                    </div>                 
                </div>
                <div class="col-md-8 col-sm-7 col-xs-12 make-va">
                    <div class="why-list-text">
                         <h4><?php the_field('third-section-heading',125); ?></h4>
                    <ul>
                        <?php the_field('third-section-content',125); ?>                       
                    </ul>  
                        
                        <div class="appt-time">
                            <p>*same day appointments do not apply on Sunday</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            </div>
            
        </div>
    </div>
 
	
	
	
	
	
<?php get_footer(); ?>