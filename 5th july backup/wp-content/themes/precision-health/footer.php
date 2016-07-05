<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		  <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="footer-about">
                        <h5>About</h5>
						<?php
							$include = get_pages('include=83');
							$content = apply_filters('the_content',$include[0]->post_content);
							echo $content;
						?>
                    </div>
                </div>

                <div class="col-md-4 col-md-offset-1 col-sm-4 col-xs-12">
                    <div class="footer-newsltr">
                        <div class="footer-logo">
						<?php	$image=get_post_meta(9,"footer-logo",true);
						$thumb = wp_get_attachment_image_src($image, 'full' );
						?>
                            <a href="<?php echo site_url(); ?>"><img src="<?php echo $url = $thumb['0'];?>" class="img-responsive"></a>
                        </div>
                        <div class="footer-social">
                            <ul>
                                <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li>
                            <a href="#" target="_blank"> <i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"> <i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </li>
                            </ul>
                        </div>

                        <div class="footer-form">
                            <h5>Register Newsletter</h5>
                            <form>
                                <input type="email" placeholder="Enter Your Email Address">
                                <input type="submit" value="Submit">
                            </form>
                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-md-offset-1 col-sm-4 col-xs-12">
                    <div class="footer-links">
                        <h5>Important Links</h5>
                        <ul>
                            
							<?php

							$defaults = array(
							'theme_location'  => '',
							'menu'            => 'footer-menu',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'menu',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '%3$s',
							'depth'           => 0,
							'walker'          => ''
							);
							wp_nav_menu( $defaults );
							?> 
							
                        </ul>
                    </div>
                </div>


            </div>

        </div>

        <div class="footer-end">
            <div class="container">
                <p>&copy; 2016 Precisionhealth. All rights reserved
                    <span class="powerdby pull-right">
                    Powered by <a href="http://imarkinfotech.com" target="_blank"><img src="http://aestheticsmedical.stagingdevsite.com/imark_aestheticsmedical/wp-content/themes/aestheticsmedical/images/imark-logo.png"></a>
                </span>
                </p>

            </div>
        </div>

    </footer>




	<?php wp_footer(); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo esc_url(get_template_directory_uri());?>/js/owl.carousel.min.js"></script>
    <script>
        jQuery(document).ready(function () {

            var owl = jQuery("#owl-demo");
            var owl2 = jQuery("#owl-demo-2");

            owl.owlCarousel({
                items: 2, //10 items above 1000px browser width
                itemsDesktop: [1000, 2], //5 items between 1000px and 901px
                itemsDesktopSmall: [900, 2], // betweem 900px and 601px
                itemsTablet: [600, 2], //2 items between 600 and 0
                itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
                pagination: true,
                autoPlay: true,
                loop: true,
                nav: true

            });
            
            owl2.owlCarousel({
                items: 3, //10 items above 1000px browser width
                itemsDesktop: [1000, 3], //5 items between 1000px and 901px
                itemsDesktopSmall: [900, 3], // betweem 900px and 601px
                itemsTablet: [600, 2], //2 items between 600 and 0
                itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
                pagination: true,
                autoPlay: true,
                nav: true

            });

            // Custom Navigation Events
            jQuery(".next").click(function () {
                owl.trigger('owl.next');
            })
            jQuery(".prev").click(function () {
                owl.trigger('owl.prev');
            })


        });
    </script>
	
 <script>
        jQuery(document).ready(function () {

            var owl1 = jQuery("#owl-demo-affi");
           
            owl1.owlCarousel({
                items: 4, //10 items above 1000px browser width
                itemsDesktop: [1000, 3], //5 items between 1000px and 901px
                itemsDesktopSmall: [900, 2], // betweem 900px and 601px
                itemsTablet: [600, 2], //2 items between 600 and 0
                itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
                pagination: false,
                autoPlay: true,
                loop: false,
                nav: true,

            });

            // Custom Navigation Events
            jQuery(".next").click(function () {
                owl.trigger('owl.next');
                owl1.trigger('owl.next');
            })
            jQuery(".prev").click(function () {
                owl.trigger('owl.prev');
                owl1.trigger('owl.prev');
            })
            

        });
    </script>
	
	<script type="text/javascript">
        if (navigator.userAgent.match(/Trident\/7\./)) { // if IE
            jQuery('body').on("mousewheel", function () {
                // remove default behavior
                event.preventDefault();

                //scroll without smoothing
                var wheelDelta = event.wheelDelta;
                var currentScrollPosition = window.pageYOffset;
                window.scrollTo(0, currentScrollPosition - wheelDelta);
            });
        }
    </script>

    <script src="<?php echo esc_url(get_template_directory_uri());?>/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="<?php echo esc_url(get_template_directory_uri());?>/js/bootstrap.min.js"></script>
	
	<script>
	
		jQuery( "ul li ul" ).addClass( "dropdown-menu" );
		jQuery( "#menu-item-345" ).addClass( "dropdown" );
		jQuery('#menu-item-345').append('<span class="caret dropdown-toggle" data-toggle="dropdown"></span>')
	</script>
</body>

</html>
