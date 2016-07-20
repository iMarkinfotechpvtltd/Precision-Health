 <?php 
 /* Template Name: contact*/
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
    
    <div class="contact-main">
        <div class="container">
            <h1 class="wow fadeIn" data-wow-duration="2s">How To Get In Touch</h1>
            <div class="row">
                <div class="col-md-9 col-sm-8 col-xs-12 wow slideInLeft" data-wow-duration="1s">
                   
				   <?php echo do_shortcode('[contact-form-7 id="13" title="Contact-us"]'); ?>
				   
				   <!-- <form>
                        <div class="form-group name-in">
                            <input type="name" placeholder="Your Full Name" class="form-control">
                        </div>
                        
                        <div class="form-group form-group-half email-in">
                            <input type="email" placeholder="Your Email" class="form-control">
                        </div>
                        
                        <div class="form-group form-group-half no-mar phone-in">
                            <input type="tel" placeholder="555-555-5555" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <textarea placeholder="Message" class="form-control"></textarea>
                        </div>
                        
                        <button type="submit" class="contact-btn"> Send</button>
                        
                    </form> -->
               
			   </div>
                
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="contact-info">
                        <div class="contact-info-list addr-sec wow slideInUp"  data-wow-duration="1s">
                            <h4>Our Adress</h4>
                            <p><?php the_field('address',11); ?></p>
                        </div>
                        <div class="contact-info-list phn-sec wow slideInUp"  data-wow-duration="1s">
                            <h4>Phone</h4>
                            <a href="tel:<?php the_field('phone',11); ?>"><?php the_field('phone',11); ?></a>
                        </div>
                        <div class="contact-info-list hours-sec wow slideInUp"  data-wow-duration="1s">
                            <h4>Open Hours</h4>
                            <ul>
                                <?php the_field('open-hours',11); ?>
                            </ul>
                        </div>
                        <div class="contact-info-list email-sec wow slideInUp"  data-wow-duration="1s">
                            <h4>Email</h4>
                            <a href="emailto:<?php the_field('reception-email',11); ?>"><?php the_field('reception-email',11); ?></a>
                        </div>
                        
                        <div class="contact-info-list web-sec wow slideInUp"  data-wow-duration="1s">
                            <h4>Email</h4>
                            <a href="http://www.precisionhealthclinics.com.au"  target="_blank"><?php the_field('email',11); ?></a>
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
        
        <div class="contact-map">
            <iframe src="<?php the_field('map-src',11); ?>" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        
    </div>
	
	<?php get_footer(); ?>