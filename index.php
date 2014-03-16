<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="middle">
    <div id="maincontent">
        <?php if(is_front_page()) : ?>
            <div class="content">
                <div class="lblock">

                    <noindex>
                        <?php dynamic_sidebar( 'sidebar-4' ); ?>
                    </noindex>

                </div>
                <div class="sliderblock">

                    <div id="slides">
                        <div class="slides_container" style="display: block !important;">
                            <img title="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider/dostavka-01.jpg" width="660" height="220" alt="" style="">
                        </div>
                        <a href="#" class="prev"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/prev.png"  alt="Arrow Prev"></a>
                        <a href="#" class="next"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/next.png" alt="Arrow Next"></a>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="content new">
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
                <div class="clear"></div>
            </div>
        <?php endif; ?>
        <div class="content">
            <?php
            if ( have_posts() ) :

                while ( have_posts() ) : the_post();

                    the_content();

                endwhile;

            endif;
            ?>
        </div>
    </div>
<?php

get_footer();
