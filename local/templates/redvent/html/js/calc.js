
(function($){
    jQuery.fn.Calc = function(options){

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

            colorFieldName: '.js-field-color',
            colorFieldVal: '.js-field-color-val'
        }, options);

        var calc = function(){

            var width = +$(options.widthFieldName, options.form).val();
            var height = +$(options.heightFieldName, options.form).val();
            var quantity = +$(options.quantityFieldName, options.form).val();
            var priceBase = +$(options.priceBaseFieldName, options.form).val();

            var widthM = width / 1000;
            var heightM = height / 1000;

            var square = heightM * widthM;

            var priceForOne = widthM * heightM * priceBase;
            var price = priceForOne * quantity;
            var priceOrigin = price / 73 * 100;

            var widthFull = (+$(options.widthClearanceFieldName, options.form).val() + width) + ' мм';
            var heightFull = (+$(options.heightClearanceFieldName, options.form).val() + height) + ' мм';

            var weight = +$(options.weightBaseFieldName, options.form).val() * square;

            var volume = (+$(options.volumeBaseFieldName, options.form).val() / 1000) * square;

            price = +price.toFixed(2);
            priceOrigin = +priceOrigin.toFixed(2);
            weight = (+weight.toFixed(1)) + ' кг';
            volume = (+volume.toFixed(2)) + ' куб. м';

            $(options.priceFieldName).length ? $(options.priceFieldName).text(price) : false;
            $(options.priceValFieldName).length ? $(options.priceValFieldName).val(priceForOne) : false;
            $(options.priceSaleFieldName).length ? $(options.priceSaleFieldName).text(price) : false;
            $(options.priceOriginFieldName).length ? $(options.priceOriginFieldName).text(priceOrigin) : false;

            $(options.weightFieldName).length ? $(options.weightFieldName).text(weight) : false;
            $(options.volumeFieldName).length ? $(options.volumeFieldName).text(volume) : false;

            $(options.widthFullFieldName).length ? $(options.widthFullFieldName).text(widthFull) : false;
            $(options.heightFullFieldName).length ? $(options.heightFullFieldName).text(heightFull) : false;

        };

        return this.each(calc);
    };
})(jQuery);

$('.js-calc-field').on(
    'change',
    function() {
        $(this).Calc();
    }
);


$('.js-field-color-val').click(function(e){
    e.preventDefault();
    var val = $(this).data().value;

    $('.js-field-color-val').each(
        function() {
            $(this).removeClass('selected');
        }
    );

    $(this).addClass('selected');

    $('.js-field-color').each(
        function() {
            $(this).text(val);
        }
    )
})