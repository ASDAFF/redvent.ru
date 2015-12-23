<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<?foreach($arResult["ITEMS"] as $arItem) {
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
<div class="contacts-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<img class="img-responsive" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
	</div>
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<div class="contacts-item-descr">
			<p class="contacts-item-title"><?=$arItem["NAME"]?></p>
			<p>
				<?=$arItem["PREVIEW_TEXT"]?>
			</p>
			<p class="contacts-field">
                                    <span class="contacts-field__name">
                                        Тел.:
                                    </span>
				<?=$arItem["DISPLAY_PROPERTIES"]["PHONE"]["DISPLAY_VALUE"]?>
			</p>
		</div>
	</div>
	<div style="clear:both;"></div>
</div>
<?}?>