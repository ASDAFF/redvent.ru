<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);

//_show_array($arResult);

$strTitle = (
	isset($arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_TITLE"]) && $arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_TITLE"] != ''
	? $arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_TITLE"]
	: $arResult['NAME']
);
$strAlt = (
	isset($arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_ALT"]) && $arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_ALT"] != ''
	? $arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_ALT"]
	: $arResult['NAME']
);
//_show_array($arResult);

$volume = round((($arResult['PROPERTIES']['WIDTH_PLUS']['VALUE'] + 1000) * ($arResult['PROPERTIES']['HEIGHT_PLUS']['VALUE'] + 1000) * $arResult['PROPERTIES']['DEPTH']['VALUE']) / 1000000000, 2);

reset($arResult['MORE_PHOTO']);
$arFirstPhoto = current($arResult['MORE_PHOTO']);
?><div class="catalog-detail-block row" id="<? echo $arItemIDs['ID']; ?>">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<div class="catalog-detail-block-item">
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
				<img class="img-responsive" src="<? echo $arFirstPhoto['SRC']; ?>" alt="<? echo $strAlt; ?>" title="<? echo $strTitle; ?>">
			</div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                <?if ('' != $arResult['DETAIL_TEXT'])
                {?>
                <p class="catalog-detail-block-item-title">
                    Описание:
                </p>
                <?=$arResult['DETAIL_TEXT']?>
                <?}?>
            </div>
            <div style="clear:both;"></div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="catalog-detail-block-descr">
                <div class="catalog-detail-block-descr__item construction">
                    <p class="catalog-detail-block-item-title"><b>Конструкция</b></p>
                    <p>
                        Значимость этих проблем настолько очевидна,
                        что постоянный количественный рост и сфера нашей
                        активности в значительной степени обуславливает
                        создание системы обучения кадров, соответствует
                        насущным потребностям. Идейные соображения высшего
                        порядка, а также укрепление.
                    </p>
                    <a href="<?=SITE_TEMPLATE_PATH?>/html/img/foto2.png" data-toggle="lightbox" data-title="Конструкция">
                        <img src="<?=SITE_TEMPLATE_PATH?>/html/img/foto2.png" alt="">
                    </a>
                </div>
                <div class="catalog-detail-block-descr__item coating">
                    <p class="catalog-detail-block-item-title"><b>Покрытие</b></p>
                    <p>
                        Значимость этих проблем настолько очевидна,
                        что постоянный количественный рост и сфера нашей
                        активности в значительной степени обуславливает
                        создание системы обучения кадров, соответствует
                        насущным потребностям. Идейные соображения высшего
                        порядка, а также укрепление.
                    </p>
                </div>
                <div class="catalog-detail-block-descr__item size">
                    <p class="catalog-detail-block-item-title"><b>Размер</b></p>
                    <p>
                        Значимость этих проблем настолько очевидна,
                        что постоянный количественный рост и сфера нашей
                        активности в значительной степени обуславливает
                        создание системы обучения кадров, соответствует
                        насущным потребностям. Идейные соображения высшего
                        порядка, а также укрепление.
                    </p>
                </div>
                <div class="catalog-detail-block-descr__item installation">
                    <p class="catalog-detail-block-item-title"><b>Монтаж</b></p>
                    <p>
                        Значимость этих проблем настолько очевидна,
                        что постоянный количественный рост и сфера нашей
                        активности в значительной степени обуславливает
                        создание системы обучения кадров, соответствует
                        насущным потребностям. Идейные соображения высшего
                        порядка, а также укрепление.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="calc">
            <div class="calc-title col-lg-12 col-md-12 col-sm-12 col-xs-12">
                Выберите желаемые параметры:
            </div>

            <form class="js-calc-form" action="">
                <div class="calc-block col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <input type="hidden" name="product_id" class="js-field-product-id" value="<?=$arResult['ID']?>">
                    <input type="hidden" name="product_price_base" class="js-field-price-base" value="<?=$arResult['CATALOG_PRICE_1']?>">
                    <input type="hidden" name="product_base_weight" class="js-field-weight-base" value="<?=$arResult['PROPERTIES']['WEIGHT']['VALUE'] ?>">
                    <input type="hidden" name="product_base_volume" class="js-field-volume-base" value="<?=$arResult['PROPERTIES']['DEPTH']['VALUE'] ?>">
                    <input type="hidden" name="product_width_clearance" class="js-field-width-clearance" value="<?=$arResult['PROPERTIES']['WIDTH_PLUS']['VALUE'] ?>">
                    <input type="hidden" name="product_eight_clearance" class="js-field-height-clearance" value="<?=$arResult['PROPERTIES']['HEIGHT_PLUS']['VALUE'] ?>">
                    <div class="calc-field form-field">
                        <label class="calc-field__name form-field__name" for="prod-width">Ширина:</label>
                        <input class="calc-field__val form-field__text js-calc-field js-field-width" type="text" id="prod-width" name="width" value="1000">
                        <span>мм</span>
                    </div>
                    <div class="calc-field form-field">
                        <label class="calc-field__name form-field__name" for="prod-height">Высота:</label>
                        <input class="calc-field__val form-field__text js-calc-field js-field-height" type="text" id="prod-height" name="height" value="1000">
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
                        <input class="calc-field__val form-field__text js-calc-field js-field-quantity" type="text" id="prod-quantity" name="quantity" value="1">
                        <span>шт.</span>
                    </div>
                </div>
                <div class="calc-block col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="calc-field">
                        <span class="calc-price-sale__name">Цена с учетом скидки <span class="text-red">27%</span>:</span>
                        <span class="calc-price-sale__val js-field-price-sale" id="prod-price-sale"><?=$arResult['CATALOG_PRICE_1']?></span>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="calc-field">
                        <span class="calc-price__name">Цена:</span>
                        <span class="calc-price__val js-field-price" id="prod-price"><?=$arResult['CATALOG_PRICE_1']?></span>
                        <input type="hidden" id="prod-price-val" name="price" value="<?=$arResult['CATALOG_PRICE_1']?>">
                        <div style="clear:both;"></div>
                    </div>
                    <div class="calc-field">
                        <input class="button button-first calc-field__button" type="submit" value="Добавить в корзину">
                    </div>
                </div>
            </form>
            <div class="calc-block-bottom col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="calc-block-bottom__title">
                    Выбранные характеристики
                </div>
                <div class="calc-block-bottom__field">
                    <span class="calc-block-bottom__name">Ширина (габарит):</span>
                    <span class="calc-block-bottom__val js-field-width-full" id="prod-width-selected"><?=$arResult['PROPERTIES']['WIDTH_PLUS']['VALUE'] + 1000 ?> мм</span>
                    <div style="clear:both;"></div>
                </div>
                <div class="calc-block-bottom__field">
                    <span class="calc-block-bottom__name">Высота (габарит):</span>
                    <span class="calc-block-bottom__val js-field-height-full" id="prod-height-selected"><?=$arResult['PROPERTIES']['HEIGHT_PLUS']['VALUE'] + 1000 ?> мм</span>
                    <div style="clear:both;"></div>
                </div>
                <div class="calc-block-bottom__field">
                    <span class="calc-block-bottom__name">Общий вес:</span>
                    <span class="calc-block-bottom__val js-field-weight" id="prod-weight-selected"><?=$arResult['PROPERTIES']['WEIGHT']['VALUE'] ?> кг</span>
                    <div style="clear:both;"></div>
                </div>
                <div class="calc-block-bottom__field">
                    <span class="calc-block-bottom__name">Общий объем:</span>
                    <span class="calc-block-bottom__val js-field-volume" id="prod-volume-selected"><?=$volume?> куб. м</span>
                    <div style="clear:both;"></div>
                </div>
                <div class="calc-block-bottom__field">
                    <span class="calc-block-bottom__name">Цвет изделия:</span>
                    <span class="calc-block-bottom__val js-field-color" id="prod-color-selected">Нет</span>
                    <div style="clear:both;"></div>
                </div>
            </div>
            <div style="clear:both;"></div>
        </div>
        <div class="catalog-detail-info">
            Значимость этих проблем настолько очевидна,
            что постоянный количественный рост и сфера нашей
            активности в значительной степени обуславливает
            создание.
        </div>
    </div>
</div>
<?$APPLICATION->IncludeComponent(
    "bitrix:catalog.section",
    "similar",
    Array(
        "ACTION_VARIABLE" => "action",
        "ADD_PICT_PROP" => "-",
        "ADD_PROPERTIES_TO_BASKET" => "Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "ADD_TO_BASKET_ACTION" => "ADD",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "BACKGROUND_IMAGE" => "-",
        "BASKET_URL" => "/personal/basket.php",
        "BROWSER_TITLE" => "-",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "COMPONENT_TEMPLATE" => ".default",
        "CONVERT_CURRENCY" => "N",
        "DETAIL_URL" => "",
        "DISABLE_INIT_JS_IN_COMPONENT" => "N",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "ELEMENT_SORT_FIELD" => "RAND",
        "ELEMENT_SORT_FIELD2" => "sort",
        "ELEMENT_SORT_ORDER" => "ASC",
        "ELEMENT_SORT_ORDER2" => "asc",
        "FILTER_NAME" => "arrFilter",
        "HIDE_NOT_AVAILABLE" => "N",
        "IBLOCK_ID" => $arResult["IBLOCK_ID"],
        "IBLOCK_TYPE" => "catalog",
        "INCLUDE_SUBSECTIONS" => "Y",
        "LABEL_PROP" => "-",
        "LINE_ELEMENT_COUNT" => "4",
        "MESSAGE_404" => "",
        "MESS_BTN_ADD_TO_BASKET" => "В корзину",
        "MESS_BTN_BUY" => "Купить",
        "MESS_BTN_DETAIL" => "Подробнее",
        "MESS_BTN_SUBSCRIBE" => "Подписаться",
        "MESS_NOT_AVAILABLE" => "Нет в наличии",
        "META_DESCRIPTION" => "-",
        "META_KEYWORDS" => "-",
        "OFFERS_LIMIT" => "5",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Товары",
        "PAGE_ELEMENT_COUNT" => "4",
        "PARTIAL_PRODUCT_PROPERTIES" => "N",
        "PRICE_CODE" => array(),
        "PRICE_VAT_INCLUDE" => "Y",
        "PRODUCT_ID_VARIABLE" => "id",
        "PRODUCT_PROPERTIES" => array(),
        "PRODUCT_PROPS_VARIABLE" => "prop",
        "PRODUCT_QUANTITY_VARIABLE" => "",
        "PRODUCT_SUBSCRIPTION" => "N",
        "PROPERTY_CODE" => array("",""),
        "SECTION_CODE" => "",
        "SECTION_ID" => $arResult["IBLOCK_SECTION_ID"],
        "SECTION_URL" => "",
        "SECTION_USER_FIELDS" => array("",""),
        "SEF_MODE" => "N",
        "SET_BROWSER_TITLE" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "SHOW_ALL_WO_SECTION" => "N",
        "SHOW_CLOSE_POPUP" => "N",
        "SHOW_DISCOUNT_PERCENT" => "N",
        "SHOW_OLD_PRICE" => "N",
        "SHOW_PRICE_COUNT" => "1",
        "TEMPLATE_THEME" => "blue",
        "USE_MAIN_ELEMENT_SECTION" => "N",
        "USE_PRICE_COUNT" => "N",
        "USE_PRODUCT_QUANTITY" => "N"
    )
);?>