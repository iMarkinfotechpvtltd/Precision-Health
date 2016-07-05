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
		
            <h1><?php echo $current_category = single_cat_title("", false); ?></h1>
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="head-neck-inner">
					<?php
								$args = array(
									'type'                     => 'ctreated',
									'orderby'                  => 'term_id',
									'taxonomy'                 => 'conditions-treated-catagory',
									);
								$categories = get_categories( $args );
								foreach ( $categories as $category ){
								if($category->name == $current_category)
									{
										$my_cat = $category;
									}
								}
								
								$image = get_field('image', $my_cat);?>								
					    <div class="head-neck-banner" style="background-image: url(<?php echo $image['url']; ?>);">
                        </div>
							<?php 
                               $posts=get_posts(array(
							   'showposts' => -1,
							   'post_type' => 'ctreated',
							   'tax_query' => array(
								   array(
								   'taxonomy' => 'conditions-treated-catagory',
								   'field' => 'name',
								   'terms' => array($current_category))
							   ),
							   'orderby' => 'title',
							   'order' => 'DESC')
							);
							foreach($posts as $post)
							{ ?>
							<article>
                           

                            <h5><?php echo $post->post_title; ?></h5>
                            <?php echo $post->post_content; ?> 

                            <a href="<?php the_permalink(); ?>" class="head-neck-read-btn">read more</a>
						
                        </article>
							<?php }?>
     
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
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $count; ?>" <?php if($category->name != $current_category){?> class="collapsed" <?php } ?>>
								  <?php echo $category->name; ?><span><i class="fa fa-minus" aria-hidden="true"></i>
												<i class="fa fa-plus" aria-hidden="true"></i></span></a>
								  </h4>
                                </div>
                            <div class="panel panel-default">
                                <div id="collapse<?php echo $count; ?>" class="panel-collapse collapse <?php if($category->name == $current_category){ echo 'in'; } ?>">
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