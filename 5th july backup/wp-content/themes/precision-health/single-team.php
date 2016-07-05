<?php
/**
 * The template for displaying all single posts and attachments
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
	
	<?php global $post; ?>
	 <div class="team-member-main">
        <div class="container">
            <h1>profiles of the staff</h1>
            
            <div class="row">
                
                <div class="col-md-12 col-sm-12 col-xs-12">
				<div class="team-member-img">
			<?php    $newpost = $post->ID;
					 $image_attributes = wp_get_attachment_image_src(get_post_thumbnail_id( $newpost ),'team-member-images' );
						$url = $image_attributes[0];?>
                        <img src="<?php echo $url ?>" class="img-responsive">
                    </div>
                    <h3><?php the_title();  the_field('designation',$post->ID);?></h3>
                    <?php echo $post->post_content; ?>
                    
                </div>
            </div>
            
            <div class="member-social-icon">
                <ul>
                    <li><a href="<?php the_field('facebook-link',$post->ID);?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="<?php the_field('twitter-link',$post->ID);?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="<?php the_field('instagram-link',$post->ID);?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>


<?php get_footer(); ?>
