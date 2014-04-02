<?php
/**
 * Product quantity inputs
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

<div class="choose-amount">
    <div class="shs-count" id="stuffCount">Количество: <input class="product-amount" type="text" size="2"  name="<?php echo esc_attr( $input_name ); ?>" value="1" maxlength="3" style="height: 16px; border: 1px solid rgb(136, 136, 136); vertical-align: bottom; text-align: center; padding: 1px 2px; font-size: 13px;">
        <img class="field-arr-up" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arr_up.gif" width="17" height="9" alt="" style="cursor: pointer; margin: 0px 0px 11px 1px; vertical-align: bottom;"><img class="field-arr-down" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arr_down.gif" width="17" height="9" alt="" style="cursor: pointer; margin: 0px 0px 1px -17px; vertical-align: bottom;">
    </div>
    <div><button class="shk-but confirm-add" id="confirmButton">ОК</button><button class="shk-but cancel-amount" id="cancelButton">Отмена</button></div>
</div>