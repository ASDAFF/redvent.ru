<?php
/**
 * Created by PhpStorm.
 * User: pry
 * Date: 07.01.16
 * Time: 20:24
 */
//_show_array($arResult['ITEM']);
$price_full = round(intval($arResult['ITEM']['PRICE']) / 0.73, 2);
$value = round((intval($arResult['ITEM']['PROPERTY_WIDTH_PLUS_VALUE']) + 1000) * (intval($arResult['ITEM']['PROPERTY_HEIGHT_PLUS_VALUE']) + 1000) * intval($arResult['ITEM']['PROPERTY_DEPTH_VALUE']) / 1000000000, 2);
?>
<div class="price-calc">
    <form class="price-calc-form" action="">
        <div class="price-calc__left col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <div class="price-calc-block">
                <div class="calc-title">
                    Наименование товара:
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="calc-field form-field">
                            <select class="calc-field__select form-field__select js-field-product-id" name="product_id" id="product_id">
                                <?foreach($arResult['ITEMS'] as $item) {?>
                                    <option value="<?=$item['ID']?>" <?= $item['ID'] == $arResult['ITEM']['ID'] ? 'selected' : '' ?>>
                                        <?=$item['NAME']?>
                                    </option>
                                <?}?>
                            </select>
                            <label class="form-label-for-select" for="product_id"></label>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="price-calc-field">
                            <div class="price-calc-field">
                                <div class="calc-field form-field">
                                    <label class="calc-field__name form-field__name" for="prod-width">Ширина:</label>
                                    <input class="calc-field__val form-field__text js-field-width" type="text" id="prod-width" value="1000">
                                    <span>мм</span>
                                </div>
                                <div class="calc-field form-field">
                                    <label class="calc-field__name form-field__name" for="prod-height">Высота:</label>
                                    <input class="calc-field__val form-field__text js-field-height" type="text" id="prod-height" value="1000">
                                    <span>мм</span>
                                </div>
                                <div class="calc-field form-field">
                                    <span class="calc-field__name form-field__name color">Цвет:</span>
                                    <a class="calc__link color js-field-color" data-toggle="dropdown" href="">выбрать из палитры</a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        <? foreach ($arResult['COLORS'] as $color) {?>
                                            <li>
                                                <a class="js-field-color-val" data-value="<?=$color['NAME']?>" href="">
                                                    <img src="<?= $color['PREVIEW_PICTURE'] ?>" alt="<?=$color['NAME']?>">&nbsp;&nbsp;&nbsp;<?=$color['NAME']?>
                                                </a>
                                            </li>
                                        <?}?>
                                    </ul>
                                    <input type="hidden" id="prod-color" name="color">
                                </div>
                                <div class="calc-field form-field">
                                    <label class="calc-field__name form-field__name" for="prod-height">Количество:</label>
                                    <input class="calc-field__val form-field__text js-field-quantity" type="text" id="prod-quantity" value="1">
                                    <span>шт.</span>
                                </div>
                            </div>
                            <div class="calc-field">
                                <a class="button button-first price-calc-field__button js-calc-button" href="#">Рассчитать цену</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="price-calc__block">
                <div class="price-calc__field bottom">
                    <span class="price-calc-price__name">Цена за единицу товара:</span>
                    <span class="price-calc-price__val js-field-price-base" data-value="<?=$price_full?>" id="prod-price-one"><?=$price_full?> &#8381;</span>
                    <div style="clear:both;"></div>
                </div>
                <div class="price-calc__field bottom">
                    <span class="price-calc-price-sale__name">Цена с учетом скидки 27%:</span>
                    <span class="price-calc-price-sale__val js-field-price"><?=$arResult['ITEM']['PRICE']?> &#8381;</span>
                    <div style="clear:both;"></div>
                </div>
                <div class="price-calc__field bottom">
                    <span class="price-calc-price-total__name">Итого:</span>
                    <span class="price-calc-price-total__val js-field-price-full" id="prod-price"><?=$arResult['ITEM']['PRICE']?> &#8381;</span>
                    <input type="hidden" id="prod-price-val">
                    <div style="clear:both;"></div>
                </div>
                <div class="price-calc__descr">
                    Цены указаны в Российских рублях, включая НДС
                </div>
            </div>
        </div>
        <div class="price-calc__right col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="price-calc-prod">
                <div class="price-calc-field-title">
                    внешний вид:
                </div>
                <img class="price-calc-prod__img img-responsive" src="<?=$arResult['ITEM']['DETAIL_PICTURE']?>" alt="<?=$arResult['ITEM']['NAME']?>">
                <p class="price-calc-prod__name">
                    Вентилляционная наружная решетка ВНТ
                </p>
            </div>
            <div class="calc-block-bottom__title">
                Выбранные характеристики
            </div>
            <div class="calc-block-bottom__field">
                <span class="calc-block-bottom__name">Ширина (габарит):</span>
                <span class="calc-block-bottom__val js-field-width-full"><?=intval($arResult['ITEM']['PROPERTY_WIDTH_PLUS_VALUE']) + 1000?> мм</span>
                <div style="clear:both;"></div>
            </div>
            <div class="calc-block-bottom__field">
                <span class="calc-block-bottom__name">Высота (габарит):</span>
                <span class="calc-block-bottom__val js-field-height-full"><?=intval($arResult['ITEM']['PROPERTY_HEIGHT_PLUS_VALUE']) + 1000?> мм</span>
                <div style="clear:both;"></div>
            </div>
            <div class="calc-block-bottom__field">
                <span class="calc-block-bottom__name">Общий вес:</span>
                <span class="calc-block-bottom__val js-field-weight"><?=intval($arResult['ITEM']['PROPERTY_WEIGHT_VALUE'])?> кг</span>
                <div style="clear:both;"></div>
            </div>
            <div class="calc-block-bottom__field">
                <span class="calc-block-bottom__name">Общий объем:</span>
                <span class="calc-block-bottom__val js-field-volume" id="prod-volume-selected"><?=$value?> м<sup>3</sup></span>
                <div style="clear:both;"></div>
            </div>
            <div class="calc-block-bottom__field">
                <span class="calc-block-bottom__name">Цвет изделия:</span>
                <span class="calc-block-bottom__val js-field-color" id="prod-color-selected">Нет</span>
                <div style="clear:both;"></div>
            </div>
        </div>
        <div style="clear:both;"></div>
    </form>
</div>
