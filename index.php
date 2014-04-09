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
        <?php if(!is_cart() && !is_checkout() && !is_checkout_pay_page()) : ?>
            <div class="lblock">
                <?php dynamic_sidebar( 'sidebar-4' ); ?>
            </div>
        <?php endif; ?>
        <div <?php echo !is_cart() && !is_checkout() && !is_checkout_pay_page() ? 'class="content"' : ''; ?>>
            <?php if(is_front_page()) : ?>

                <div class="sliderblock">

                    <div id="slides">
                        <div class="slides_container" style="display: block !important;">
                            <img title="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider/dostavka-01.jpg" width="690" height="225" alt="" style="">
                        </div>
                        <a href="#" class="prev"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/prev.png"  alt="Arrow Prev"></a>
                        <a href="#" class="next"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/next.png" alt="Arrow Next"></a>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="hits">
                    <?php dynamic_sidebar( 'sidebar-1' ); ?>
                    <div class="clear"></div>
                </div>


            <?php endif; ?>
            <div class="">
            <?php
            if ( have_posts() ) :

                while ( have_posts() ) : the_post();
                    echo "<h3 class='page-title'>";
                        the_title();
                    echo "</h3>";

                    echo "<div class='page-content'>";
                        the_content();
                    echo "</div>";
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) {
                        comments_template();
                    }

                endwhile;

            endif;
            ?>
            </div>
        </div>
    </div>
</div>
<?php

get_footer();
