<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

?>


	<div class="col-md-3 col-sm-4 col-xs-12 wow zoomIn" data-wow-duration="1s">
		<div class="store-prod-cvr">
			<div class="store-prod-img">
			<a href="<?php echo get_permalink($product->id);?>"><?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?></a>	
			</div>
			<div class="store-prod-text">
				<?php do_action( 'woocommerce_shop_loop_item_title' ); ?>
				<p class="price"><?php $price1 = $product->get_price_html(); if($price1 != ""){ do_action( 'woocommerce_after_shop_loop_item_title' );}
									else
									{?>
									<input type="button" class="btn btn-primary" value="Request to get Price" data-toggle="modal" data-target="#myModal" ><br>	<?php } ?></p>
				<?php do_action( 'woocommerce_after_shop_loop_item' );?>
			</div>
		</div>
	</div>

