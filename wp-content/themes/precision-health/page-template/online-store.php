<?php 
/* Template Name: online store*/
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
	
	
 <div class="online-store-main">
        <div class="container">
            <h1>Online store</h1>
            
            <div class="row">
			<?php	$args = array(
					'post_type' => 'product',
					'stock' => 1,
					'posts_per_page' => 4,
					'orderby' =>'date',
					'order' => 'DESC' );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>			
						<div class="col-md-3 col-sm-4 col-xs-12 wow zoomIn" data-wow-duration="1s">
							<div class="store-prod-cvr">
								<div class="store-prod-img">
									<?php echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); ?>
								</div>
								<div class="store-prod-text">
									<a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
									<?php $price = $product->get_price_html(); 
									
												if($price == "")
												{?>
													<input type="button" value="Request to get Price" data-toggle="modal" data-target="#myModal" ><br>
											<?php }
												else
												{?>
													<p class="price"> <?php echo $price; ?> </p>
												<?php }
									
									?>
														 
									<a href="#"><?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?></a>
								</div>
							</div>
						
						</div>
						<?php endwhile; ?>
                
            </div>
        </div>
    
    </div>
   

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Request to get Price</h4>
      </div>
      <div class="modal-body">
	   
        <?php echo do_shortcode('[contact-form-7 id="223" title="price request"]'); ?>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<?php get_footer(); ?>