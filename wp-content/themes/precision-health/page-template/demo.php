 <?php 
 /* Template Name: demo*/
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
   <div class="affilations-main">
        <div class="container">
            <h1>Affilations</h1>
            <div class="affilations-cvr">

            <div id="owl-demo-affi" class="owl-carousel owl-theme">
			
			<?php 
				
		$args = array('post_type' => 'affilation','posts_per_page'=>-1,'order' => 'DESC');
 $loop = new WP_Query( $args );
 while ( $loop->have_posts() ) : $loop->the_post();
				
				
				the_title();
				?>
                <div class="item wow zoomIn" data-wow-duration="1s"><?php the_post_thumbnail('full'); ?></div>
				
			<?php endwhile;
					wp_reset_query();
			?>
               
            </div>

            
        </div>
    

        </div>
    </div> 

 <?php
		
$posts=get_posts(array(
   'showposts' => -1,
   'post_type' => 'faq',
   'tax_query' => array(
       array(
       'taxonomy' => 'Catagory',
       'field' => 'name',
       'terms' => array('general'))
   ),
   'orderby' => 'title',
   'order' => 'ASC')
);
$a=1;
foreach($posts as $post)
{?>	
<p><?php echo $post->post_content;}
	?></p>
<?php get_footer(); ?>