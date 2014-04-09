<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
        <div id="footer">
            <div class="bottomblock">
                <p class="titleblock">Бренды:</p>
                <?php $brands = getFooterBrands(); ?>

                <p style="text-align: center;">
                    <?php foreach($brands as $category) : ?>
                        <a href="<?php echo $category['url']; ?>" >
                            <?php
                                echo '<img src="' . $category['image_url'] . '" />';
                            ?>
                        </a>
                    <?php endforeach; ?>
                </p>
            </div>
            <div class="footercontent">
                <ul id="footer_logos">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" tppabs="http://pod-arkoy.ru/" class="home" title="На главную" rel="nofollow">На главную</a></li>
                    <li><?php echo get_option('pod_arkoy_feedback_button'); ?></li>
                    <li><?php echo get_option('pod_arkoy_ya_informer'); ?></li>
                </ul>
            </div>
        </div>
        <?php echo get_option('pod_arkoy_ya_metrika'); ?>
        <?php wp_footer(); ?>
    </body>
</html>