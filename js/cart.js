jQuery(document).ready(function(){
    if(typeof(site_url)=='undefined'){
        var site_url = jQuery('base').size()>0
            ? jQuery('base:first').attr('href')
            : window.location.protocol+'//'+window.location.host+'/';
    }

    var cart =
    {
        options:
        {
            cart_amount      : '.cart-amount',
            cart_total       : '.cart-total',
            product_price    : '.price .amount',
            product_amount   : '.product-amount'
        },

        init: function()
        {
            jQuery('.single_add_to_cart_button').on('click', function(e){
                e.preventDefault();

                cart.select_amount(jQuery(this));
            });

            jQuery('.field-arr-up').on('click', function(e){
                e.preventDefault();

                cart.arrow_up(jQuery(this));
            });

            jQuery('.field-arr-down').on('click', function(e){
                e.preventDefault();

                cart.arrow_down(jQuery(this));
            });

            jQuery('.cancel-amount').on('click', function(e){
                e.preventDefault();

                cart.cancel_amount(jQuery(this));
            });

            jQuery('.confirm-add').on('click', function(e){
                e.preventDefault();

                cart.send_to_cart(jQuery(this));
            });

            jQuery('#emptyCart').on('click', function(e){
                e.preventDefault();

                jQuery('#stuffHelper').fadeIn('slow');
            });


            jQuery('.clear-confirm #confirmButton').on('click', function(e){
                e.preventDefault();

                document.location = 'http://' + document.location.host + document.location.pathname + '?clear-cart';
            });

            jQuery('.clear-confirm #cancelButton').on('click', function(e){
                e.preventDefault();

                jQuery('#stuffHelper').fadeOut('slow');
            });
        },

        send_to_cart: function(el)
        {
            var form = el.parent().parent();
            var top = form.css('top');
            var left = form.css('left');

            var productId = el.parent().parent().parent().find('.add-to-cart-id').val();

            cart.add_to_cart(productId, jQuery('.product-amount').val());

            form
                .animate(
                    { top: '-'+(form.offset().top - 100)+'px', left: '300px'},
                    {
                        duration: 1000,
                        complete: function() {
                            form
                                .fadeOut('fast')
                                .css({'top': top, 'left': left});

                            cart.update_amounts();


                            form.parent().css('position', 'relative');
                        }
                    }
                );
        },

        add_to_cart: function(productId, count)
        {

            var url = 'http://' + document.location.host + document.location.pathname;
            jQuery.ajax({
                type: "GET",
                url: url + '?add-to-cart=' + productId + '&quantity=' + count,
                success: function(response){
                    console.log(response);
                },
                dataType: 'jsonp'
            });
        },

        confirm_cart_clear: function(){

        },

        update_amounts: function(){


            var cartAmount = jQuery('.cart-amount');
            var cartTotal = jQuery('.cart-total');
            var price = jQuery('.item-price');


            if(!parseInt(cartAmount.text())) {
                jQuery('.cart-actions, .shop-cart-body').css('display', 'block');
            }

            cartAmount.text( parseInt(cartAmount.text()) + parseInt(jQuery(cart.options.product_amount).val()) );

            var totalCost = parseInt(cartTotal.text().replace(' ', '')) + parseInt(jQuery(cart.options.product_amount).val()) * parseInt(price.val().replace(' ', ''));
            cartTotal.text( this.number_format(totalCost, 0, '.', ' ') );

            jQuery('#cartEmpty').css('display', 'none');

        },

        select_amount: function(el)
        {

            jQuery('.choose-amount').fadeIn('fast');
        },

        arrow_up: function(el)
        {
            var amount = el.parent().find(cart.options.product_amount);

            amount.val(parseInt(amount.val()) + 1);
        },

        arrow_down: function(el)
        {
            var amount = el.parent().find(cart.options.product_amount);

            if (amount.val() > 0)
                amount.val(parseInt(amount.val()) - 1);
        },

        cancel_amount: function(el)
        {
            el.parent().parent().fadeOut('fast');
        },

        number_format: function (number, decimals, dec_point, thousands_sep)
        {
            number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
            var n = !isFinite(+number) ? 0 : +number,
                prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                s = '',
                toFixedFix = function (n, prec) {
                    var k = Math.pow(10, prec);
                    return '' + Math.round(n * k) / k;
                };
            // Fix for IE parseFloat(0.55).toFixed(0) = 0;
            s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
            if (s[0].length > 3) {
                s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
            }
            if ((s[1] || '').length < prec) {
                s[1] = s[1] || '';
                s[1] += new Array(prec - s[1].length + 1).join('0');
            }
            return s.join(dec);
        }
    };

    cart.init();
});