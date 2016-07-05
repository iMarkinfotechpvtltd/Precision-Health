<!DOCTYPE html>
<html lang="en">
<?php wp_head(); ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Precision Health Clinic</title>

    <!-- Bootstrap -->
    <link href="<?php echo esc_url(get_template_directory_uri());?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo esc_url(get_template_directory_uri());?>/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo esc_url(get_template_directory_uri());?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo esc_url(get_template_directory_uri());?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo esc_url(get_template_directory_uri());?>/css/style.css" rel="stylesheet">


    
</head>

<body>

    <header>
        <div class="top-blue-bar">
            <div class="container">
                <div class="top-bar-left">
                    <ul class="social-list">
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

                <div class="top-bar-right">
                    <ul>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i><b> Call <a href="tel:<?php the_field('phone',11); ?>"><?php the_field('phone',11); ?></a> LAB</b></li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:<?php the_field('reception-email',11); ?>">Send us an email</a></li>

                    </ul>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<?php	$image=get_post_meta(9,"site-logo",true);
						$thumb = wp_get_attachment_image_src($image, 'full' );
					  ?>
                    <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo $url = $thumb['0'];?>" class="img-responsive"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">

						<?php

						$defaults = array(
						'theme_location'  => '',
						'menu'            => 'header-menu',
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
        </nav>

    </header>