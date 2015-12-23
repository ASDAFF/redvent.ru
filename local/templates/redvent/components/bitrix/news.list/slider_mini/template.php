<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="left-slider">
	<div class="left-slider-top">
		наше производство
	</div>
	<div class="left-slider-body">
		<?foreach($arResult["ITEMS"] as $arItem) {
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<a id="<?=$this->GetEditAreaId($arItem['ID']);?>" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
				<img class="img-responsive left-slider-item item" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"/>
			</a>
		<?}?>
	</div>
	<div class="left-slider-bottom">
		<a class="left-slider-bottom__link" href="/production/">подробнее о производстве</a>
	</div>
</div>