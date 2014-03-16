<?php global $product; ?>

<li class="newitem">
    <a href="<?php echo esc_url( get_permalink( $product->id ) ); ?>" class="itemmain"><?php echo $product->get_image(); ?></a>
    <a href="<?php echo esc_url( get_permalink( $product->id ) ); ?>"><?php echo $product->get_title(); ?></a>
    <p><?php echo $product->get_price_html(); ?></p>
</li>