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

    <!--    <link rel="stylesheet" type="text/css" href="--><?php //echo get_stylesheet_directory_uri(); ?><!--/style.css">-->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
    <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>-->
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
</head>
<body>
<div id="header">
    <div class="top">
        <a id="header_logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="PodArkoy - Интернет-магазин подарков"><img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="PodArkoy - Интернет-магазин подарков" width="185" height="88"  /></a>
        <div class="cartblock">
            [!Shopkeeper? &noJQuery=`1` &cartType=`small` &orderFormPage=`19` &priceTV=`price` &changePrice=`1` &counterField=`1` &style=`0` &cartHelperTpl=`shk_helper` !]
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
        <div id="loginblock">[!WebLogin? &tpl=`login` &loginhomeid=`17` &logouthomeid=`1`!]</div>
    </div>
</div>