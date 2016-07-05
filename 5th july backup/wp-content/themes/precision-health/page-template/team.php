<?php
/* Template Name: team */
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
	
	<div class="mission-main">
        <div class="container wow fadeIn" data-wow-duration="1s">
            <h1>Mission Statement</h1>
            <p><?php the_field('mission-statement',132); ?></p>
        </div>
    </div>

    <div class="meet-team-main">
        <div class="container">
            <h1>Meet the Team:</h1>
            <div class="meet-team-list">
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
					 $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id( $newpost ),'affilation-images' );
						$url = $image_attributes[0];
						?>

							<div class="team-item  wow zoomIn" data-wow-duration="1s">
								<div class="team-item-img">
									<a href="<?php the_permalink(); ?>"><img src="<?php echo $url ?>" class="img-responsive"></a>
								</div>
								<div class="team-item-text">
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </h2></a>
									<p><?php the_field('designation',$my_query->ID); ?></p>
								</div>
							</div>

						
					   <?php
					  endwhile;
					}?>
            </div>
        </div>
    </div>

	
<?php get_footer(); ?>