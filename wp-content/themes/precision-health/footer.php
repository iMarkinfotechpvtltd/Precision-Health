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
?>  <script src="<?php echo esc_url(get_template_directory_uri());?>/js/bootstrap.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri());?>/js/validation.js"></script>
   

 <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    
      <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      <!-- Javascript -->
     
		  <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-about">
                        <h5>About</h5>
						<?php
							$include = get_pages('include=83');
							$content = apply_filters('the_content',$include[0]->post_content);
							echo $content;
						?>
                    </div>
                </div>

                <div class="col-md-4 col-md-offset-1 col-sm-6 col-xs-12">
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

                <div class="col-md-3 col-md-offset-1 col-sm-12 col-xs-12">
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
                    Powered by <a href="http://imarkinfotech.com" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/Imark-Powered-By.svg"></a>
                </span>
                </p>

            </div>
        </div>

    </footer>

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
     
    </div>

  </div>
</div>


	<?php wp_footer(); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/owl.carousel.min.js"></script>
	
		 
    <script>
        jQuery(document).ready(function () {

            var owl = jQuery("#owl-demo");
            var owl2 = jQuery("#owl-demo-2");

            owl.owlCarousel({
                items: 2, //10 items above 1000px browser width
                pagination: true,
                autoPlay: true,
                loop: true,
                nav: true,
                 responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }

            });
            
            owl2.owlCarousel({
                items: 3, //10 items above 1000px browser width
                pagination: true,
                autoPlay: true,
                nav: true,
                responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }

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
                pagination: false,
                autoPlay: true,
                loop: false,
                nav: true,
                responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }

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
        wow = new WOW(
            {
            mobile:false, 
            }
        )
                    wow.init();
    </script>

	<script>
		function loaddata(id) {
			jQuery('#content-dif').hide();
			jQuery('#DivImg').show();
			var termid=id;
            jQuery.ajax({
                type: "POST",
                url: "<?php bloginfo('template_url'); ?>/ajax/page1.php",
                data: {
                    termid: termid, 
                    format: 'raw'
                },
                success: function (resp) {
					//alert(resp);
					jQuery('#DivImg').hide();
					jQuery('#div1').empty().append(resp);
					jQuery('#content-dif').show();	
                }
            });
        }
	</script>
<script>
var p = document.querySelectorAll('p:empty');
for(var i = p.length - 1; i > -1; i-- ) {
    p[i].parentNode.removeChild(p[i]);
}
</script>
<script src="http://cdn.jsdelivr.net/jquery.mcustomscrollbar/3.0.6/jquery.mCustomScrollbar.concat.min.js"></script>
		<script>
		(function($){
		   jQuery(window).on("load",function(){
				jQuery(".content").mCustomScrollbar();
			   axis:"y"
			});
		})(jQuery);
	   </script>
</body>

</html>
