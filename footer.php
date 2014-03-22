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
                        <a href="<?php echo get_term_link( $category->term_id, 'product_cat' ); ?>" >
                            <?php
                                $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                                $image = wp_get_attachment_url( $thumbnail_id );

                                echo '<img src="' . $image . '" />';
                            ?>
                        </a>
                    <?php endforeach; ?>
                </p>
            </div>
            <div class="footercontent">
                <ul id="footer_logos">
                    <li><a href="index.htm" tppabs="http://pod-arkoy.ru/" class="home" title="На главную" rel="nofollow">На главную</a></li>
                    <li><?php echo get_option('pod_arkoy_ya_informer'); ?></li>
                </ul>
            </div>
        </div>
        <?php echo get_option('pod_arkoy_ya_metrika'); ?>
        <?php wp_footer(); ?>
    </body>
</html>