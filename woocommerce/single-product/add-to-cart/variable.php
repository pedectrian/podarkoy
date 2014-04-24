<?php
/**
 * Variable product add to cart
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce, $product, $post;
?>

<?php
    do_action( 'woocommerce_before_add_to_cart_form' );
    $available_variations = $product->get_available_variations();
    $attributes = $product->get_attributes();
?>
</div></div>

<form class="variations_form cart" method="post" enctype='multipart/form-data' data-product_id="<?php echo $post->ID; ?>" data-product_variations="<?php echo esc_attr( json_encode( $available_variations ) ) ?>">

    <?php if ( ! empty( $available_variations ) ) : ?>
        <?php foreach ( $available_variations as $variation) : ?>
            <div class="shk-item shk-inner">
                <fieldset>
                    <?php //var_dump($variation); ?>
                    <input type="hidden" name="add-to-cart" value="<?php echo $product->id; ?>" />
                    <input type="hidden" name="product_id" value="<?php echo esc_attr( $post->ID ); ?>" />
                    <input type="hidden" name="variation_id" value="<?php echo $variation['variation_id']; ?>" />
                    <span class="art-inner"><?php echo $variation['sku']; ?></span>
                    <span class="beh-inner">Размер: <?php echo $variation['dimensions']; ?>;</span>
                    <span class="price-inner shk-price"><?php echo $variation['price_html']; ?></span>
                    <span class="buy-inner"><input type="submit" class="shk-but" value="в корзину"></span>

                </fieldset>
            </div>
        <?php endforeach;?>
	<?php else : ?>

		<p class="stock out-of-stock"><?php _e( 'This product is currently out of stock and unavailable.', 'woocommerce' ); ?></p>

	<?php endif; ?>

</form>
<div>
<?php ///do_action( 'woocommerce_after_add_to_cart_form' ); ?>
