<?php get_header(); 
global $post;?>
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
            <h1>Blog</h1>
            
            <div class="row">
             <div class="col-md-8 col-sm-8 col-xs-12">

			<?php while (have_posts()) : the_post(); ?>
				<div class="blog-post">
                        <h3><?php the_title();  ?></h3>
						<?php $newpost = $post->ID;
							 $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id( $newpost ),'blog-images' );
								$url = $image_attributes[0];
						?>
                        <div class="blog-post-img" style="background-image: url(<?php echo $url; ?> );">
                        
                            <div class="blog-date">
                                <p> <?php echo get_the_date('j', $post->ID); ?><span><?php echo get_the_date('F', $post->ID); ?></span></p>
                            </div>    
                        </div>
                    <div class="blog-post-text">
                            <div class="blog-auth">
                                <ul>
                                    <li><?php the_author(); ?> </li>
                                    <li><?php the_time('g:i:s') ?> </li>
                                   
                                </ul>
                            </div>
                            
                            <div class="blog-main-text">
                                <p><?php the_content(); ?></p>
                            </div>
                            
                        <div class="blog-more">
                                <div class="blog-btn-cvr">
                                </div>
                                <div class="blog-social">
                                    <ul>
										<li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									</ul>
                                </div>
                            </div>
                    </div>
				<?php endwhile; ?>
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

								<?php } ?>		
						</div>	
                </div>    
            
            </div>  
                
                
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