<?php
/* Template Name: index */
?> 

<?php get_header(); ?>
 <?php	$image=get_post_meta(9,"home-banner",true);
		$thumb = wp_get_attachment_image_src($image, 'banner-inner' );
	  ?>
    <div class="banner" style=" background-image: url(<?php echo $url = $thumb['0'];?>);">
        <div class="container">

            <div class="banner-text-cvr">
                <div class="row">
                    <div class="col-md-8 make-va">
                        <div class="banner-left-text ">
                            <h1>Precision Health<small>Spine and Sports Clinic</small></h1>
                            <p><?php the_field('banner-content',9); ?> <a href="<?php echo get_site_url(); ?>/about" class="banner-btn-link">About us <i class="fa fa-angle-right" aria-hidden="true"></i></a></p>
                        </div>
                    </div>
                    <div class="col-md-4 make-va">
                        <div class="banner-form">
                            <div class="banner-form-in">
                                <h4>Complete the form</h4>
                                <p>Duis nec viverra orci. Praesent feugiat pulvinar varius. Vestibulum venenatis ut mauris aliquam euismod. Quisque molestie porta sollicitudin. </p>
                                <?php echo do_shortcode('[contact-form-7 id="470" title="banner-form"]'); ?>
						<!--        <form role="form">
                                    <div class="form-group">
                                        <input type="name" placeholder="Name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" placeholder="Contact Number" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Age" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <textarea placeholder="Message" class="form-control"></textarea>
                                    </div>

                                    <div class="form-group in-line">
                                        <input type="text" placeholder="Morning" class="form-control">
                                    </div>
                                    <div class="form-group in-line">
                                        <input type="text" placeholder="Afternoon" class="form-control">
                                    </div>
                                    <div class="form-group in-line no-mar">
                                        <input type="text" placeholder="Evening" class="form-control">
                                    </div>

                                    <div class="form-group cust-checkbox-group">
                                        <label>
                                            <input type="checkbox">
                                            <span class="cust-check"></span> Send me a copy of the form</label>

                                    </div>

                                    <button type="submit" class="banner-form-btn">
                                        Send Message
                                    </button>
                                </form> -->
								<script>
								jQuery("#sub-btn").click(function()
								{
									if(jQuery('#check1').prop("checked") == true)
									{
										var name = jQuery('#name').val();
										var email = jQuery('#email').val();
										var phone = jQuery('#phone').val();
										var age = jQuery('#age').val();
										var msg = jQuery('#message').val();
										var mrg = jQuery('#morning').val();
										var aftn = jQuery('#afternoon').val();
										var eve = jQuery('#evening').val();
										jQuery.ajax(
										{
											type: "POST",
											url: "<?php echo esc_url(get_template_directory_uri());?>/page-template/send.php",
											data:{
													name1:name,
													email1:email,
													phone1:phone,
													age1:age,
													msg1:msg,
													mrg1:mrg,
													aftn1:aftn,
													eve1:eve
												},
												success: function(result)
												{
													alert(result);
												}
										});
									}
								})
								</script>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="container">
        <div class="why-choose-us-cvr">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="why-heading-cvr">
                        <div class="why-heading-left">
                            <h1>Why Choose Us</h1>
                        </div>
                        <div class="why-heading-right">
                            <p>Know About us and Get In Touch</p>
                        </div>
                    </div>
                    <div class="why-choose-us-text">
					<?php
							$include = get_pages('include=83');
							$content = apply_filters('the_content',$include[0]->post_content);
							echo $content;
						?>
                        <a href="<?php echo get_site_url(); ?>/about" class="round-white-btn">About Us</a>
                    </div>
                </div>
            </div>

            <!--<div class="why-dr">
                <img src="images/why-us-dr-img.png" class="img-responsive">
            </div>-->


        </div>

    </div>

    <div class="neck-comp-cvr">
        <div class="neck-comp-left">
            
            <div class="con-couple-cvr">
                <div class="con-couple-left">
                    <div class="con-couple-left-list">
                        <ul>
						<?php
								$args = array(
									'type'                     => 'ctreated',
									'orderby'                  => 'term_id',
									'taxonomy'                 => 'conditions-treated-catagory',
									);
								$categories = get_categories( $args );
								$time1 = 1.4;
								$count=1;
								foreach ( $categories as $category ) {
									
								
							if($count <=7) {?>
                            <li class="wow fadeInDown" data-wow-duration="<?php echo $time1; ?>s">
                                 <a href="javascript:void(0);" onclick="pagination(<?php echo $id = $category->term_id; ?>);"><div class="con-list-img"><img src="<?php echo z_taxonomy_image_url($category->term_id); ?>" class="img-responsive"></div></a>
                                <div class="con-list-text">
                                    <a href="javascript:void(0);" onclick="pagination(<?php echo $id = $category->term_id; ?>);"><?php echo $name = $category->name ?> <br></a>
                                </div>

                            </li>

							<?php $time1 = $time1+0.2; } $count++; 
							} ?> 
                        </ul>
                    </div>
                    <div class="con-couple-left-img wow slideInRight" data-wow-duration="1s">
					<?php	$image=get_post_meta(260,"boy_image",true);
						$thumb = wp_get_attachment_image_src($image, 'full' );?>
                        <img src="<?php echo $url = $thumb['0'];?>" class="img-responsive">
                    </div>
                </div>

                <div class="con-couple-right">

                    <div class="con-couple-right-list">
                        <ul>
						<?php
								$args = array(
									'type'                     => 'ctreated',
									'orderby'                  => 'term_id',
									'taxonomy'                 => 'conditions-treated-catagory',
									);
								$categories = get_categories( $args );
								$time1 = 1.4;
								$count=1;
								foreach ( $categories as $category ) {
									
								
							if($count >7) {?>
						
						
                            <li class="wow fadeInDown" data-wow-duration="<?php echo $time1; ?>s">
                                <div class="con-list-text">
                                    <a href="javascript:void(0);" onclick="pagination(<?php echo $id = $category->term_id; ?>);"><?php echo $name = $category->name ?><br></a>
                                </div>
                                 <a href="javascript:void(0);" onclick="pagination(<?php echo $id = $category->term_id; ?>);"><div class="con-list-img"><img src="<?php echo z_taxonomy_image_url($category->term_id); ?>" class="img-responsive"></div></a>

                            </li>
							
							<?php $time1 = $time1+0.2; } $count++; 
							} ?>
                        </ul>
                    </div>
					<?php	$image=get_post_meta(260,"girl_image",true);
						$thumb = wp_get_attachment_image_src($image, 'full' );?>
                    <div class="con-couple-right-img wow slideInLeft" data-wow-duration="1s">
                        <img src="<?php echo $url = $thumb['0'];?>" class="img-responsive">
                    </div>

                </div>

            </div>


           
        </div>
        <div class="neck-comp-right">
		<?php
								$args = array(
									'type'                     => 'ctreated',
									'orderby'                  => 'term_id',
									'taxonomy'                 => 'conditions-treated-catagory',
									);
								$categories = get_categories( $args );
								$count=1;
								foreach ( $categories as $category ) {
									if($count==1)
									{?>
									<div class="neck-comp-right-inner content">
										<h1><?php echo $name = $category->name ?></h1>
										<p><?php echo $des = $category->description  ?>
										</p>
									</div>
								<?php } $count++;}?>
        </div>
    </div>

    <div class="our-team-cvr">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h1>Our 
Team</h1>
                    <div class="slider-text">
                        <?php
							$include = get_pages('include=132');
							$content = apply_filters('the_content',$include[0]->post_content);
							echo $content;
						?>
                        
                        <a href="<?php echo get_site_url(); ?>/teams" class="round-white-btn">View All</a>
                    </div>
                </div>

            <div class="col-md-7 ">
                <div class="row">
                    <div id="owl-demo" class="owl-carousel team-carousel owl-theme">
						<?php
					global $post;
					$type = 'team';
					$args=array(
					  'post_type' => $type,
					  'post_status' => 'publish',
					  'order'      => 'ASC'
					  );
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ) {
					  while ($my_query->have_posts()) : $my_query->the_post(); 
					   $newpost = $post->ID;
					 $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id( $newpost ),'team-member-images' );
						$url = $image_attributes[0];
						?>
                        <div class="item">
                            <div class="col-sm-12">
                                <div class="item-inner">
                                <img src="<?php echo $url; ?>" class="img-responsive">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php the_field('designation',$my_query->ID); ?></p>
                            </div>
                            </div>
                        </div>
					  <?php
					  endwhile;
					}?>

                    </div>

                </div>

            </div>


            </div>
        </div>
    </div>

    <div class="container">
        <div class="our-product-heading">
            <div class="our-product-left">
                <h1>Our Services</h1>
            </div>
            <div class="our-product-right">
                <a href="<?php echo get_site_url(); ?>/services" class="view-all-btn">View All</a>
            </div>
        </div>
    </div>

    <div class="our-products-gray">
        <div class="container">
            <div class="row">
            <div id="owl-demo-2" class="owl-carousel team-carousel owl-theme">
			<?php
				$args = array(
					'type'                     => 'faq',
					'orderby'                  => 'term_id',
					'taxonomy'                 => 'service-catagory',
					);
				$categories = get_categories( $args );
				foreach ( $categories as $category ) {	
				?>
			
                <div class="item">
                            <div class="col-sm-12">
                         <div class="service-list">
                        <div class="service-img">
                            <img src="<?php echo z_taxonomy_image_url($category->term_id); ?>" class="img-responsive">
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
                
                </div>  
				
				<?php } ?>
            </div>
            
            </div>
            
        </div>

    </div>

    <div class="container">
        <div class="blog-cvr">
            <div class="blog-heading">
                <div class="blog-heading-left">
                    <h1>Blog</h1>
                </div>
                <div class="blog-heading-right">
                    <a href="<?php echo get_site_url(); ?>/blog" class="view-all-btn">View All</a>
                </div>
            </div>

            <div class="row">
					<?php global $post;
					$loopb = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' =>2, 'order'  => 'DESC') ); 
					while ( $loopb->have_posts() ) : $loopb->the_post(); ?>
					<?php $newpost = $post->ID;
							 $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id( $newpost ),'home-blog-image' );
								$url = $image_attributes[0];
						?>
                <div class="col-md-6">
                    <div class="blog-page-cover">
                        <div class="blog-img wow fadeIn" data-wow-duration="2s">
                            <img src="<?php echo $url;?>" class="img-responsive">
                        </div>

                        <div class="blog-text wow bounce" data-wow-duration="2s">
                            <div class="blog-text-inner">
                                <h1><?php the_title(); ?></h1>
                                <p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 200);?></p>
                                <div class="blog-date">
                                    <p><?php echo get_the_date('D j M Y', $post->ID); ?></p>
                                </div>

                                <a href="<?php the_permalink(); ?>" class="blog-read-btn">Read More</a>
                                <div class="blog-social">
                                    <ul>
                                        <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li> <a href="#" target="_blank"> <i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>


                            </div>
                        </div>


                    </div>

                </div>
				<?php endwhile; ?>

            </div>

        </div>

        <div class="find-us-cvr">
            <div class="find-us-heading">
                <h1>Find Us</h1>
                <p><?php the_field('find-us-content',9); ?></p>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="find-info">
                        <h4>Address</h4>
                        <p><?php the_field('address',11); ?></p>
                        <a href="#" class="google-link">View on Google maps</a>
                    </div>

                    <div class="find-info">
                        <h4>Call Us</h4>
                        <ul>
                            <li>Phone <a href="tel:<?php the_field('phone',11); ?>"><?php the_field('phone',11); ?></a></li>
                           

                        </ul>
                    </div>

                    <div class="find-info">
                        <h4>Email</h4>
                        <a href="mailto:<?php the_field('reception-email',11); ?>"><?php the_field('reception-email',11); ?></a>

                    </div>



                </div>
                <div class="col-md-8 col-md-offset-1">
                    <div class="find-us-form">
						
						<?php echo do_shortcode('[contact-form-7 id="453" title="find us home page"]'); ?>
                    </div>
                </div>
            </div>

        </div>



    </div>
	<script>
		function pagination(id) {
			var termid=id;
			
            jQuery.ajax({
                type: "GET",
                url: "<?php bloginfo('template_url'); ?>/page-template/page1.php",
                data: {
                    termid: termid, 
                    format: 'raw'
                },
                success: function (resp) {
					jQuery('.content').empty().append(resp);
                }
            });
        }
	</script>

<?php get_footer(); ?>

