<?php
/* Template Name: faqs */
get_header();?>
 
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

    <div class="faq-main">
        <div class="container">
            <div class="faq-heading">
                <h1>Frequently asked questions</h1>
                <p>If you need help, we have a list of frequently asked questions and answers.</p>
            </div>

            <div class="row">
                <div class="col-md-11">
				<?php
				$args = array(
					'type'                     => 'faq',
					'orderby'                  => 'term_id',
					'taxonomy'                 => 'faqs-catagory',
					);
				$categories = get_categories( $args );
				$cat=1;
				foreach ( $categories as $category ) {
					
				?>
                    <div class="faq-item general">
								
                        <h2><?php echo $name = $category->name ?></h2>
                        <div class="custm-accordion">
                            <div class="panel-group" id="accordion<?php echo $cat; ?>">
							<?php 
                               $posts=get_posts(array(
										   'showposts' => -1,
										   'post_type' => 'faq',
										   'tax_query' => array(
											   array(
											   'taxonomy' => 'Catagory',
											   'field' => 'name',
											   'terms' => array($name))
										   ),
										   'orderby' => 'title',
										   'order' => 'DESC')
										);
										$count=1;
										foreach($posts as $post)
										{ ?>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion<?php echo $cat; ?>" href="#collapse<?php echo $cat; ?><?php echo $count; ?>" <?php if(($cat == 1) && ($count == 1)){} else { ?>class="collapsed"<?php }  ?>>
									   <?php the_title(); ?> <span><i class="fa fa-minus" aria-hidden="true"></i>
													<i class="fa fa-plus" aria-hidden="true"></i></span></a>
									  </h4>
                                    </div>
                                    <div id="collapse<?php echo $cat; ?><?php echo $count; ?>" class="panel-collapse collapse <?php if(($cat == 1) && ($count == 1)){ ?> in <?php } ?>">
                                        <div class="panel-body">
                                            <p><?php echo $post->post_content; ?></p>
                                        </div>
                                    </div>
                                </div>  
										<?php $count++; } ?> <?php $count=0; ?>
                            </div>
                        </div>
                    </div>
                    
                <?php $cat++; }?>
                   
                    
                    
                    
                    
                </div>
            </div>

        </div>
    </div>




<?php get_footer(); ?>