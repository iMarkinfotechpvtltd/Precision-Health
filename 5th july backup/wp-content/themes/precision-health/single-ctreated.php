 <?php get_header(); global $category; ?>
 <?php	$image=get_post_meta(9,"banner-inner",true);
		$thumb = wp_get_attachment_image_src($image, 'banner-inner' );
	  ?>
    <div class="banner banner-inner wow slideInUp" data-wow-duration="1s" style=" background-image: url(<?php echo $url = $thumb['0'];?>);">
        <div class="container">

            <div class="banner-text-cvr">
                <div class="banner-inner-text">
                    
                </div>
            </div>

        </div>
    </div>
	
 <div class="head-neck-main">
        <div class="container">
		<?php $tax = get_post_taxonomies( $post->ID ); ?>
		<?php $name1 = wp_get_post_terms($post->ID, $tax ,  array("fields" => "names")); ?>
            <h1><?php the_title(); ?></h1>
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="head-neck-inner">
					<?php $newpost = $post->ID;
							 $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id( $newpost ),'blog-images' );
								$url = $image_attributes[0];
						?>
					    <div class="head-neck-banner" style="background-image: url(<?php echo $url; ?>);">
                        </div>
							<article>
                           

                            <h5><?php echo $post->post_title; ?></h5>
                            <?php echo $post->post_content; ?> 	
							
                        </article>
							
     
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="custm-accordion head-neck-side-acc">
                        <div class="panel-group" id="accordion">
							<?php
								$args = array(
									'type'                     => 'ctreated',
									'orderby'                  => 'term_id',
									'taxonomy'                 => 'conditions-treated-catagory',
									);
								$count = 1;
								$categories = get_categories( $args );
								foreach ( $categories as $category ){
									$name = $category->name;
									$posts=get_posts(array(
							   'showposts' => -1,
							   'post_type' => 'ctreated',
							   'tax_query' => array(
								   array(
								   'taxonomy' => 'conditions-treated-catagory',
								   'field' => 'name',
								   'terms' => array($name))
							   ),
							   'orderby' => 'title',
							   'order' => 'DESC')
							);?>
							 <div class="panel-heading">
                                    <h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $count; ?>" <?php if($category->name != $name1[0]){?> class="collapsed" <?php } ?>>
								  <?php echo $category->name; ?><span><i class="fa fa-minus" aria-hidden="true"></i>
												<i class="fa fa-plus" aria-hidden="true"></i></span></a>
								  </h4>
                                </div>
                            <div class="panel panel-default">
                                <div id="collapse<?php echo $count; ?>" class="panel-collapse collapse <?php if($category->name == $name1[0]){ echo 'in'; } ?>">
                                    <div class="panel-body">
                                        <ul>
										<?php foreach($posts as $post) { ?>
                                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
										<?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
								<?php $count++; } ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
<?php get_footer(); ?>