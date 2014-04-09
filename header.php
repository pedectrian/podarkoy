<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <meta name="keywords" content="[*longtitle*]" />
    <meta name="description" content="[*description*]" />

    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
<!--    <script src="http://gsgd.co.uk/sandbox/jquery/easing/jquery.easing.1.3.js0"></script-->
<!--    <script type="text/javascript" src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/js/slides.min.jquery.js"></script>-->
<!--    <script>-->
<!--        $(function(){-->
<!--            $('#slides').slides({-->
<!--                preload: true,-->
<!--                preloadImage: 'img/loading.gif',-->
<!--                play: 4000,-->
<!--                pause: 3000,-->
<!--                hoverPause: true,-->
<!--                slideSpeed: 750,-->
<!--                generatePagination: false,-->
<!--                pagination: false-->
<!--            });-->
<!--        });-->
<!--    </script>-->


    <?php wp_head(); ?>

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/cart.js"></script>
</head>
<body>
<div id="header">
    <div class="top">
        <a id="header_logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="PodArkoy - Интернет-магазин подарков"><img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="PodArkoy - Интернет-магазин подарков" width="185" height="88"  /></a>
        <div class="cartblock">

            <?php if (function_exists( 'is_woocommerce' ) ) : ?>
            <?php global $woocommerce; ?>
            <div class="cartWrapper">
<!--                <a class="cart-bubble cart-contents">(--><?php //echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?><!--)</a>-->
                <?php $woocommerce->cart->get_cart_url() != '' ? $cart=$woocommerce->cart->get_cart_url() : $cart = home_url().'/cart/'; ?>

                <a href="<?php echo $cart; ?>" class="cart-top"><?php echo $data['translation_cart'] ?></a>

                <div id="shopCart" class="shop-cart" style="height: auto; overflow: visible;">
                    <div id="cartInner" class="empty">

                            <?php if ( sizeof( $woocommerce->cart->get_cart() ) > 0 ) : ?>

                                <div class="shop-cart-body">
                                    Товаров в корзине: <b class="cart-amount"><?php echo $woocommerce->cart->cart_contents_count; ?></b>
                                    <p>На сумму: <b class="cart-total"><?php echo number_format($woocommerce->cart->cart_contents_total, 0, '.', ' '); ?></b> р.</p>
                                </div>

                            <?php else : ?>

                                <div class="shop-cart-body" style="display: none;">
                                    Товаров в корзине: <b class="cart-amount">0</b>
                                    <p>На сумму: <b class="cart-total">0</b> р.</p>
                                </div>
                                <div id="cartEmpty">В вашей <span class="carttitle">корзине</span> пусто</div>
                            <?php endif; ?>



                            <div class="cart-actions" <?php echo sizeof( $woocommerce->cart->get_cart() ) > 0 ? '' : 'style="display: none;"' ?>>
                                <?php do_action( 'woocommerce_widget_shopping_cart_before_buttons' ); ?>

                                <div class="cart-order"><a href="<?php echo $cart ; ?>" id="butOrder">Оформить</a></div>
                                <div class="clear"></div>
                                <div><a href="?clear-cart" id="emptyCart">Очистить корзину</a></div>
                                <div id="stuffHelper" class="clear-confirm"><div><button class="shk-but" id="confirmButton">Да</button><button class="shk-but" id="cancelButton">Отмена</button></div></div>
                            </div>

                    </div>

                </div>
            </div>
            <?php endif; ?>
        </div>
        <div id="top-menu">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
        </div>
    </div>
    <div id="head-contacts">
        <div class="head-phone">
        </div>
        <div class="head-skype">
            <?php echo get_option('pod_arkoy_phone'); ?>
        </div>
    </div>
    <div class="topmenu">
        <p><?php echo get_option('pod_arkoy_slogan'); ?></p>
    </div>
    <div class="bannertop">
        <div id="search_block_top">
            <?php get_search_form(); ?>

        </div>
        <div id="loginblock">

            <div id="WebLoginLayer0" style="position:relative">
                <!-- login form section-->
                <form method="post" name="loginfrm" action="">
                    <input type="hidden" value="" name="rememberme">
                    <fieldset style="border:0; margin:0; padding:0;">
                        <a href="registration" id="regbutton">Регистрация</a>
                        <label for="username"><input type="text" name="username" id="username" tabindex="1" value="логин" onfocus="if(this.value=='логин'){this.value='';}" onblur="if(this.value==''){this.value='логин';}"></label>
                        <label for="password"><input type="password" name="password" id="password" tabindex="2" value="пароль" onfocus="if(this.value=='пароль'){this.value='';}" onblur="if(this.value==''){this.value='пароль';}"></label>
                        <input type="submit" name="login" id="login-submit" value="Войти">
                        <?php wp_nonce_field( 'woocommerce-login' ); ?>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>