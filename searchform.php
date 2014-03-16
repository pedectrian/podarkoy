<div id="search_block_top">

    <form role="search" id="ajaxSearch_form" action="<?php echo home_url( '/' ); ?>" method="get">

        <input type="submit" value="" class="search_button">
        <input type="hidden" name="post_type" value="product">

        <input id="ajaxSearch_input" type="search" class="cleardefault search_query" value="" name="s" title="Поиск" onfocus="this.value=(this.value=='Запрос для поиска...')? '' : this.value ;">

    </form>
</div>