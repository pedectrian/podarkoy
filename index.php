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
<?php if(is_front_page()) : ?>
<div id="middle">
    <div id="maincontent">
    <div class="content">
        <div class="lblock">
            <span class="titlelblock">Каталог</span>
            <noindex>
                <a href="/catalog/kartiny-swarovski" rel="nofollow">Картины SWAROVSKI</a>
                <a href="/catalog/shkatulki" rel="nofollow">Шкатулки</a>
                <a href="/catalog/manikyurnyy-nabor" rel="nofollow">Маникюрные наборы</a>
                <a href="/catalog/predmety-interera" rel="nofollow">Предметы интерьера</a>
                <a href="/catalog/kartiny" rel="nofollow">Картины</a>
                <a href="/catalog/statuetki" rel="nofollow">Статуэтки</a>
                <a href="/catalog/fotoalbomy" rel="nofollow">Фотоальбомы</a>
                <a href="/catalog/nabor-dlya-spirtnogo" rel="nofollow">Наборы для спиртного</a>
                <a href="/catalog/ikony1" rel="nofollow">Иконы</a>
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
        <div class="lastcomment">
            <p class="titleblock">Покупатели пишут:</p>
            [!JotX? &action=`comments` &subscribe=`0` &pagination=`5` &moderated=`1` &docid=`*`!]
        </div>
        <p class="titleblock">Хиты продаж:</p>
        [!Ditto? &startID=`2` &depth=`2` &tpl=`new-item` &filter=`tvprinadl,,1` &hideFolders=`1` &sortDir=`desc` &paginate=`0` &display=`8` &randomize=`1` !]
        <div class="clear"></div>
    </div>
    <div class="content hits">
        <p class="titleblock">Новинки:</p>
        [!Ditto? &startID=`2` &depth=`2` &tpl=`new-item` &filter=`tvprinadl,,1` &hideFolders=`1` &sortDir=`desc` &paginate=`0` &display=`5` &randomize=`1`!]
        <div class="clear"></div>
    </div>
    <div class="content indent">
        [*content*]
    </div>
</div>
<?php endif; ?>
    <div id="middle">
        <div id="maincontent">
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
    </div>
<?php
//get_sidebar();
get_footer();
