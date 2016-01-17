<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Sale\DiscountCouponsManager;

if (!empty($arResult["ERROR_MESSAGE"]))
	ShowError($arResult["ERROR_MESSAGE"]);

$bDelayColumn  = false;
$bDeleteColumn = false;
$bWeightColumn = false;
$bPropsColumn  = false;
$bPriceType    = false;

if ($normalCount > 0):
?>
<div id="basket_items_list">
	<div class="bx_ordercart_order_table_container">

		<table id="basket_items">
			<tr class="card-list-row head">
				<td class="card-list-col">
					Фото
				</td>
				<td class="card-list-col">
					Наименования и размеры
				</td>
				<td class="card-list-col">
					Цвет
				</td>
				<td class="card-list-col">
					Кол-во
				</td>
				<td class="card-list-col">
					Вес, кг
				</td>
				<td class="card-list-col">
					Объем, м<sup>3</sup>
				</td>
				<td class="card-list-col">
					Цена, &#8381;
				</td>
				<td class="card-list-col">
					<b>Сумма, &#8381;</b>
				</td>
				<td class="card-list-col"></td>
			</tr>

				<?//_show_array($arResult["GRID"]["ROWS"]);
				foreach ($arResult["GRID"]["ROWS"] as $k => $arItem):

//					_show_array($arItem);
					if ($arItem["DELAY"] == "N" && $arItem["CAN_BUY"] == "Y"):
				?>
					<tr class="card-list-row" id="<?=$arItem["ID"]?>">
                        <td class="card-list-col">
                            <a data-toggle="lightbox" data-title="Наружная решетка AIRO-N" href="<?=$arItem['DETAIL_PICTURE_SRC']?>">
                                <img class="card-list-col__img" src="<?=$arItem['PREVIEW_PICTURE_SRC']?>" alt="<?=$arItem['NAME']?>">
                            </a>
                        </td>
                        <td class="card-list-col">
                            <p><?=$arItem['NAME']?></p>
                            <p>
                            <?foreach($arItem['PROPS'] as $prop) {?>
                            <?=$prop['CODE'] == 'WIDTH' || $prop['CODE'] == 'HEIGHT' ? $prop['NAME'] . ' : ' . $prop['VALUE'] . ' ' : false?>
                            <?}?>
                            </p>
                        </td>
                        <td class="card-list-col">
                            <?foreach($arItem['PROPS'] as $prop) {?>
                                <?=$prop['CODE'] == 'COLOR' ? $prop['VALUE'] : false?>
                            <?}?>
                        </td>
                        <td class="card-list-col">
                            <div class="card-list-col-count">
                                <?
                                $ratio = isset($arItem["MEASURE_RATIO"]) ? $arItem["MEASURE_RATIO"] : 0;
                                $max = isset($arItem["AVAILABLE_QUANTITY"]) ? "max=\"".$arItem["AVAILABLE_QUANTITY"]."\"" : "";
                                $useFloatQuantity = ($arParams["QUANTITY_FLOAT"] == "Y") ? true : false;
                                $useFloatQuantityJS = ($useFloatQuantity ? "true" : "false");
                                ?>
                                <a class="card-list-col-count__minus minus" href="javascript:void(0);" onclick="setQuantity(<?=$arItem["ID"]?>, <?=$arItem["MEASURE_RATIO"]?>, 'down', <?=$useFloatQuantityJS?>);">-</a>
                                <input
                                    class="card-list-col-count__text"
                                    type="text"
                                    size="3"
                                    id="QUANTITY_INPUT_<?=$arItem["ID"]?>"
                                    name="QUANTITY_INPUT_<?=$arItem["ID"]?>"
                                    size="2"
                                    maxlength="18"
                                    min="0"
                                    <?=$max?>
                                    step="<?=$ratio?>"
                                    value="<?=$arItem["QUANTITY"]?>"
                                    onchange="updateQuantity('QUANTITY_INPUT_<?=$arItem["ID"]?>', '<?=$arItem["ID"]?>', <?=$ratio?>, <?=$useFloatQuantityJS?>)"
                                    >
                                <input type="hidden" id="QUANTITY_<?=$arItem['ID']?>" name="QUANTITY_<?=$arItem['ID']?>" value="<?=$arItem["QUANTITY"]?>" />
                                <a class="card-list-col-count__plus plus" href="javascript:void(0);" onclick="setQuantity(<?=$arItem["ID"]?>, <?=$arItem["MEASURE_RATIO"]?>, 'up', <?=$useFloatQuantityJS?>);">+</a>
                                <div style="clear:both;"></div>
                            </div>
                        </td>
                        <td class="card-list-col"><?=$arItem['WEIGHT']?></td>
                        <td class="card-list-col">
                            <?foreach($arItem['PROPS'] as $prop) {?>
                                <?=$prop['CODE'] == 'VOLUME' ? $prop['VALUE'] : false?>
                            <?}?>
                        </td>
                        <td class="card-list-col"><?=$arItem['PRICE_FORMATED']?></td>
                        <td class="card-list-col"><?=$arItem['SUM']?></td>
                        <td class="card-list-col">
                            <a class="card-list-col__clear" href="<?=str_replace("#ID#", $arItem["ID"], $arUrls["delete"])?>"></a>
                        </td>

					</tr>
					<?
					endif;
				endforeach;
				?>
		</table>
	</div>
	<input type="hidden" id="column_headers" value="<?=CUtil::JSEscape(implode($arHeaders, ","))?>" />
	<input type="hidden" id="offers_props" value="<?=CUtil::JSEscape(implode($arParams["OFFERS_PROPS"], ","))?>" />
	<input type="hidden" id="action_var" value="<?=CUtil::JSEscape($arParams["ACTION_VARIABLE"])?>" />
	<input type="hidden" id="quantity_float" value="<?=$arParams["QUANTITY_FLOAT"]?>" />
	<input type="hidden" id="count_discount_4_all_quantity" value="<?=($arParams["COUNT_DISCOUNT_4_ALL_QUANTITY"] == "Y") ? "Y" : "N"?>" />
	<input type="hidden" id="price_vat_show_value" value="<?=($arParams["PRICE_VAT_SHOW_VALUE"] == "Y") ? "Y" : "N"?>" />
	<input type="hidden" id="hide_coupon" value="<?=($arParams["HIDE_COUPON"] == "Y") ? "Y" : "N"?>" />
	<input type="hidden" id="use_prepayment" value="<?=($arParams["USE_PREPAYMENT"] == "Y") ? "Y" : "N"?>" />

	<div class="card-total">
		<div class="card-total-summ">
			Итого сумма заказа &mdash; <span class="card-total-summ__price">
				<?=str_replace(" ", "&nbsp;", str_replace("руб.", "", $arResult["allSum_FORMATED"]))?>&#8381;
			</span>
		</div>
		<a class="card-total-button button button-second" href="javascript:void(0)" onclick="checkOut();">Оформить заказ</a>
	</div>
</div>
<?
else:
?>
<div id="basket_items_list">
	<table>
		<tbody>
			<tr>
				<td colspan="<?=$numCells?>" style="text-align:center">
					<div class=""><?=GetMessage("SALE_NO_ITEMS");?></div>
				</td>
			</tr>
		</tbody>
	</table>
</div>
<?
endif;
?>