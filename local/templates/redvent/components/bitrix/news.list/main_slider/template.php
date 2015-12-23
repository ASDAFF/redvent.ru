<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="main-slider owl-carousel">
	<?foreach($arResult["ITEMS"] as $arItem) {
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="main-slider-item item" style="background-image: url('<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>')">
		<div class="main-slider-item__descr">
			<p class="main-slider-item__text">
				<?=$arItem["PREVIEW_TEXT"]?>
			</p>
		</div>
		<?if($arItem["DISPLAY_PROPERTIES"]["LINK"]["DISPLAY_VALUE"]) {?>
		<a class="main-slider-item__link" href="<?=$arItem["DISPLAY_PROPERTIES"]["LINK"]["DISPLAY_VALUE"]?>">Подробнее</a>
		<?}?>
	</div>
<?}?>
</div>