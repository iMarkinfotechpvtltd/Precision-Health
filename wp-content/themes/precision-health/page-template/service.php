<?php
/* Template Name: service */
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
    
    <div class="services-main">
        <div class="container">
            <div class="services-main-text">
                <h1>SERVICES</h1>
				 <?php
				$include = get_pages('include=196');
				$content = apply_filters('the_content',$include[0]->post_content);
				?>
                <p><?php echo $content; ?></p>
            </div>
            
            <div class="row">
			<?php
				$args = array(
					'type'                     => 'faq',
					'orderby'                  => 'term_id',
					'taxonomy'                 => 'service-catagory',
					);
				$categories = get_categories( $args );
				foreach ( $categories as $category ) {	
				?>
                <div class="col-md-4 col-sm-6 col-xs-12 wow bounceInUp" data-wow-duration="1.2s">
                    <div class="service-list">
                        <div class="service-img">
						<img class="img-responsive" src="<?php echo z_taxonomy_image_url($category->term_id); ?>"> 
                        </div>
                        <div class="service-text">
                            <h4><?php echo $name = $category->name ?></h4>
							<ul>
							<?php 
                               $posts=get_posts(array(
										   'showposts' => -1,
										   'post_type' => 'service',
										   'tax_query' => array(
											   array(
											   'taxonomy' => 'service-catagory',
											   'field' => 'name',
											   'terms' => array($name))
										   ),
										   'orderby' => 'title',
										   'order' => 'DESC')
										);
										$count=1;
										foreach($posts as $post)
										{ ?>
                            
                                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
										<?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>

				<?php } ?>	
            </div>
            
            
        </div>
        
        
        <div class="container modalti-cvr">
            <div class="services-main-text ">
                <h1>modality</h1>
                <p><?php the_field('modality_content',196); ?></p>
            </div>
            
            <div class="row">
			
			<?php 
			   $posts1=get_posts(array(
					   'showposts' => -1,
					   'post_type' => 'modality',
					   'order' => 'ASC')
					);
					
					foreach($posts1 as $post)
					{ ?>
                <div class="col-md-4 col-sm-6 col-xs-12 wow bounceInUp" data-wow-duration="1.2s">
                    <div class="service-list">
                        <div class="service-img">
						<?php    $newpost = $post->ID;
					 $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id( $newpost ),'modality-images' );
						$url = $image_attributes[0];?>
                            <img src="<?php echo $url ?>" class="img-responsive">
                        </div>
                        <div class="service-text">
                            <h4><?php the_title(); ?></h4>
                            <p><?php echo $post->post_content; ?></p>
                        </div>
                    </div>
                </div>
				
					<?php } ?>
            </div>
            
            
        </div>
        
        
        
        
    </div>
    
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<?php get_footer(); ?>