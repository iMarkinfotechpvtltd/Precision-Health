<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

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

<div class="blog-main">
        <div class="container">
            <h1>Search result</h1>
            
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    

				<?php
				// Start the loop.
				 if ( have_posts() ) {
					while ( have_posts() ) : the_post(); ?>
				
					<div class="blog-post">
                        <a href=" <?php the_permalink(); ?> "><h3><?php the_title();  ?></h3></a>
						<?php $newpost = $post->ID;
							 $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id( $newpost ),'blog-images' );
								$url = $image_attributes[0];
						?>
                        
                        
                             
                        
                        <div class="blog-post-text">
                            
                            
                            <div class="blog-main-text">
                                <p><?php  $content = get_the_content(); echo mb_strimwidth($content, 0, 400)." ...";?></p>
                            </div>
                            
                            <div class="blog-more">
                                <div class="blog-btn-cvr">
                                    <a href="<?php the_permalink(); ?>" class="blog-btn">Read More</a>
                                </div>
                                <div class="blog-social">
                                   
                                </div>
                            </div>
                            
                        </div>
                    
                        
                    </div>
                    
                    
                    
                    <?php 
					endwhile; wp_reset_query();
						}
					else
					{?>	
					<div class="blog-post">
                        <a href=" <?php the_permalink(); ?> "><h3><?php the_title();  ?></h3></a>
						<?php $newpost = $post->ID;
							 $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id( $newpost ),'blog-images' );
								$url = $image_attributes[0];
						?>
                        
                        
                            
                        
                        <div class="blog-post-text">
                            <div class="blog-auth">
                                <p>No Result found</p>
                            </div>
                            
                            <div class="blog-main-text">
                                <p></p>
                            </div>
                            
                            <div class="blog-more">
                                <div class="blog-btn-cvr">
                                    
                                </div>
                                <div class="blog-social">
                                    
                                </div>
                            </div>
                            
                        </div>
                    
                        
                    </div>
					<?php }	
					?>
                    
                
				
						<?php if ( have_posts() ) {?>
								<div class="pagi-cvr">  
								<?php
								if($loopb->max_num_pages>1){?>
						   <ul class="pagination">
						   <?php
							 if ($paged > 1) { ?>
							   <li><a href="<?php echo '?paged=' . ($paged -1); //prev link ?>"><i class="fa fa-chevron-left" aria-hidden="true"></a></i></li>
											   <?php }
						   for($i=1;$i<=$loopb->max_num_pages;$i++){?>
							   <li><a href="<?php echo '?paged=' . $i; ?>" <?php echo ($paged==$i)? 'class="selected"':'';?>><?php echo $i;?></a></li>
							   <?php
						   }
						   if($paged < $loopb->max_num_pages){?>
							   <li><a href="<?php echo '?paged=' . ($paged + 1); //next link ?>"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
						   <?php } ?> 
						   
						   </ul>

								<?php } } ?>	
									
									
									
						</div>	
                    
                    <?php if ( have_posts() ) {?>
               </div>
                
                <?php } ?>
               
                <div class="col-md-4 col-sm-4 col-xs-12">   
                    <div class="blog-sidebar">
                        <div class="blog-search">
                            <h5>SEARCH</h5>
							
						<!--************************ START FORM TAG FOR CREATING SEARCH BOX *********************-->

							<form role="search" method="get" id="searchform" class="search-form blog-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
							     <div class="input-group">
							  <input type="text" placeholder="Search" name="s" class="form-control" id="s" value="<?php echo get_search_query(); ?>">
							  <span class="input-group-btn">
							  <button type="submit" class="btn blog-form-btn"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button></span>
								</div>
				            </form>


<!--************************ END OF FORM TAG FOR CREATING SEARCH BOX *********************-->
             
                        </div>
                        
                        <div class="latest-services-sec">
                            <h5>LATEST SERVICES</h5>
                            <ul><?php
									$args = array(
										'type'                     => 'service',
										'orderby'                  => 'term_id',
										'taxonomy'                 => 'service-catagory',
										);
									$categories = get_categories( $args );
									foreach ( $categories as $category ) {	
									?>
                                <li>
                                    <div class="ser-left">
                                        <img src="<?php echo z_taxonomy_image_url($category->term_id); ?>" class="img-responsive">
                                        
                                    </div>
                                    <div class="ser-right">
                                        <h6><?php echo $name = $category->name ?></h6>
										<?php 
                               $posts=get_posts(array(
										   'showposts' => 1,
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
                                        <p><?php the_title(); ?> </p>
                                        <a href="<?php the_permalink(); ?>" class="read-link-btn">read more</a>
										<?php } ?>
                                    </div>
									
                                </li>
									<?php } ?>
                                                            
                                               
                            </ul>
                            
                        </div>
                        
                        <div class="twitter-sec">
                            <h5>Twitter</h5>
                            
                            <img src="<?php echo esc_url(get_template_directory_uri());?>/images/twitter-img.jpg" class="img-responsive">
                            
                        </div>
                        
                        
                        
                    </div>
                </div>
                
                
            </div>
            
        </div>
    </div>

		
		
<?php get_footer(); ?>
