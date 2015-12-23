<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="action">
	<div class="action-img" style="background-image: url('<?=$arResult["DETAIL_PICTURE"]["SRC"]?>');">
		<div class="action-img__text">
			<p class="action-img__name">
                <?=$arResult["NAME"]?>
			</p>
			<p class="action-img__descr">
                <?=$arResult["FIELDS"]["PREVIEW_TEXT"]?>
			</p>
		</div>
	</div>
	<div class="text-block">
		<?=$arResult["DETAIL_TEXT"]?>
	</div>
</div>