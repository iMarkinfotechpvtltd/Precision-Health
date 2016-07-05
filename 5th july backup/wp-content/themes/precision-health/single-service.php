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


	<div class="head-neck-main">
        <div class="container">
            <h1>Service</h1>
			<?php while (have_posts()) : the_post(); ?>
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="head-neck-inner">
                        
						<h2><?php the_title(); ?></h2>
						<p><?php the_content(); ?> </p>
						
                    </div>

                    </div>
                

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="custm-accordion head-neck-side-acc">
                       <?php $tax = get_post_taxonomies( $post->ID ); ?>
						<?php $name = wp_get_post_terms($post->ID, $tax ,  array("fields" => "names")); ?>
						<?php echo $name[0]; ?>
					   
					   <ul>

							<?php 
                               $posts=get_posts(array(
							   'showposts' => -1,
							   'post_type' => 'service',
							   'tax_query' => array(
								   array(
								   'taxonomy' => 'service-catagory',
								   'field' => 'name',
								   'terms' => array($name[0]))
							   ),
							   'orderby' => 'title',
							   'order' => 'DESC')
							);
							foreach($posts as $post)
							{ ?>
					   
							<li><?php the_title(); ?></li>
							<?php } ?>
					   </ul>
					</div>
                </div>
            </div>
			<?php endwhile; ?>
        </div>



    </div>




<?php get_footer(); ?>