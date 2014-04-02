<?php
/**
 * Cart Page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce;

wc_print_notices();

do_action( 'woocommerce_before_cart' ); ?>


<?php do_action( 'woocommerce_before_cart_table' ); ?>
    <div id="shopCart" class="shop-cart cartorder">
        <div class="shop-cart-head"><a name="shopCart"></a><b>Корзина</b></div>
        <div id="cartInner" class="full">
            <form action="<?php echo esc_url( WC()->cart->get_cart_url() ); ?>" method="post">
                <fieldset>
                    <div style="text-align:right;">
                        <a href="<?php echo $_SERVER['route']; ?>?clear-cart" id="butEmptyCart">Очистить корзину</a>
                    </div>
                    <table width="100%">
                        <tbody>
                            <?php do_action( 'woocommerce_before_cart_contents' ); ?>

                            <?php
                            foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                                $_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                                $product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

                                if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                                    ?>
                                    <tr class="cart-order">
                                        <td width="300" align="left">

                                            <?php
                                            if ( ! $_product->is_visible() )
                                                echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key );
                                            else
                                                echo apply_filters( 'woocommerce_cart_item_name', sprintf( '<b><a href="%s">%s</a></b>', $_product->get_permalink(), $_product->get_title() ), $cart_item, $cart_item_key );

                                            ?>
                                        </td>
                                        <td width="110" nowrap="nowrap">
                                            <?php
                                                echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
                                            ?>
                                        </td>
                                        <td width="30" nowrap="nowrap">x
                                            <?php

                                            $product_quantity = sprintf( '<input style="width: 30px;" type="text" name="cart[%s][qty]" value="' . $cart_item['quantity'] . '" />', $cart_item_key );

                                            echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key );
                                            ?>
                                        </td>
                                        <td width="60" align="right">
                                            <?php
                                            echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf( '<a href="%s" class="remove" title="%s">&times;</a>', esc_url( WC()->cart->get_remove_url( $cart_item_key ) ), __( 'Remove this item', 'woocommerce' ) ), $cart_item_key );
                                            ?>
                                        </td>
                                    </tr>

                                <?php
                                }
                            }

                            do_action( 'woocommerce_cart_contents' );
                            ?>
                        </tbody>
                    </table>
                    <div style="text-align:right;"><?php woocommerce_cart_totals(); ?></div>
                </fieldset>

                <input type="submit" class="button" name="update_cart" value="<?php _e( 'Update Cart', 'woocommerce' ); ?>" /> <input type="submit" class="checkout-button button alt wc-forward" name="proceed" value="<?php _e( 'Proceed to Checkout', 'woocommerce' ); ?>" />

                <?php do_action( 'woocommerce_proceed_to_checkout' ); ?>

                <?php wp_nonce_field( 'woocommerce-cart' ); ?>
            </form>
        </div>

    </div>

<?php do_action( 'woocommerce_after_cart_table' ); ?>

<div class="cart-collaterals">

	<?php do_action( 'woocommerce_cart_collaterals' ); ?>

	<?php woocommerce_shipping_calculator(); ?>

</div>

<?php do_action( 'woocommerce_after_cart' ); ?>