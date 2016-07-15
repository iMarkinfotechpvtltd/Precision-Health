<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );
global $product;
	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>
<div class="online-store-main">
        <div class="container">
            <h1><?php the_title(); ?></h1>
			<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

					 <div class="why-list-outer">
							<div class="row">
							<div class="col-md-3 col-sm-4 col-xs-12 ">   
								<div class="why-img-left">
									<?php do_action( 'woocommerce_before_single_product_summary' ); //image?> 
								</div>                 
							</div>
							<div class="col-md-9 col-sm-8 col-xs-12 ">
								<div class="why-list-text">
									 <p><?php do_action( 'woocommerce_after_single_product_summary' );//description?></p>
								</div>
							</div>
						</div>
					</div>
			</div>
	</div>
</div><!-- #product-<?php //the_ID(); ?> -->

<?php //do_action( 'woocommerce_after_single_product' ); ?>
