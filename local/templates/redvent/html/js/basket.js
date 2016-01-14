
(function($){
    jQuery.fn.Send = function(options){

        var widthField = false;
        var menuHover, timeoutId;

        options = $.extend({
            form: '.js-calc-form',
            productIdFieldName: '.js-field-product-id',
            widthFieldName: '.js-field-width',
            heightFieldName: '.js-field-height',
            quantityFieldName: '.js-field-quantity',
            priceBaseFieldName: '.js-field-price-base',

            priceFieldName: '.js-field-price',
            priceValFieldName: '#prod-price-val',
            priceSaleFieldName: '.js-field-price-sale',
            priceOriginFieldName: '.js-field-price-origin',

            widthClearanceFieldName: '.js-field-width-clearance',
            widthFullFieldName: '.js-field-width-full',

            heightClearanceFieldName: '.js-field-height-clearance',
            heightFullFieldName: '.js-field-height-full',

            weightBaseFieldName: '.js-field-weight-base',
            weightFieldName: '.js-field-weight',

            volumeBaseFieldName: '.js-field-volume-base',
            volumeFieldName: '.js-field-volume',

            colorSelectFieldName: '.js-field-color-val.selected'
        }, options);

        var send = function(){


            var id = +$(options.productIdFieldName, options.form).val();
            var width = +$(options.widthFieldName, options.form).val();
            var height = +$(options.heightFieldName, options.form).val();
            var quantity = +$(options.quantityFieldName, options.form).val();
            var price = +$(options.priceValFieldName, options.form).val();

            var weight = $(options.weightFieldName).text();
            var volume = $(options.volumeFieldName).text();
            var color = $(options.colorSelectFieldName).length ? $(options.colorSelectFieldName).data().value : false;

            console.log(width, height, quantity, price, weight, volume, color);

            $.ajax({
                url: '/ajax/basket.php',
                data: {
                    id: id,
                    width: width,
                    height: height,
                    weight: weight,
                    quantity: quantity,
                    price: price,
                    color: color,
                    volume: volume
                },
                success: function(a,b,c) {
                    document.location.href=document.location.pathname;
                    //console.log(document.location.pathname);
                }
            });
        };

        return this.each(send);
    };
})(jQuery);

$('.js-calc-form').on(
    'submit',
    function(e) {
        e.preventDefault();
        $(this).Send();
    }
);