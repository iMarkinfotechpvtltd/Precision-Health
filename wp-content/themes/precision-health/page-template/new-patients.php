 <?php //Template Name: New Patients 
 
 get_header();
 
 ?>
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
    
    

    <div class="affilations-main new-patient-main">
        <div class="container">
            <h1>NEW PATIENTS</h1>
            
            <div class="who-we-see-cvr">
                <h4>who we see</h4>
                <ul class="wws-list">
                    <?php the_field('who_we_see',335); ?>
                </ul>
            </div>
            
            <div class="what-we-do-cvr">
                <h4>What We Do</h4>
                 <div class="what-we-do-in">
                <article>
                    <figure>
					<?php	$image=get_post_meta(335,"what_we_do_section_1_image",true);
						$thumb = wp_get_attachment_image_src($image, 'full' );
					  ?>
                        <img src="<?php echo $url = $thumb['0'];?>" class="img-responsive">
                    </figure>
                    
                    <h4><?php the_field('what_we_do_section_1_title',335); ?></h4>
                    <p><?php the_field('what_we_do_section_1_content',335); ?></p>
                    
                
                </article>
                
                 <article>
                    <figure>
					<?php	$image=get_post_meta(335,"what_we_do_section_2_image",true);
						$thumb = wp_get_attachment_image_src($image, 'full' );
					  ?>
                        <img src="<?php echo $url = $thumb['0'];?>" class="img-responsive">
                    </figure>
                    
                    <h4><?php the_field('what_we_do_section_2_title',335); ?></h4>
                    <p><?php the_field('what_we_do_section_2_content',335); ?>
</p>
                    
                
                </article>
                
                 <article>
                    <figure>
					<?php	$image=get_post_meta(335,"what_we_do_section_3_image",true);
						$thumb = wp_get_attachment_image_src($image, 'full' );
					  ?>
                        <img src="<?php echo $url = $thumb['0'];?>" class="img-responsive">
                    </figure>
                    
                    <h4><?php the_field('what_we_do_section_3_title',335); ?></h4>
                    <p><?php the_field('what_we_do_section_3_content',335); ?></p>
                    
                
                </article>
                </div>
                <a href="<?php echo get_site_url(); ?>/why-precision-health/" class="wps-btn">Why People See Us</a>
                
                
            </div>
                

        </div>
    </div>

<?php get_footer(); ?>