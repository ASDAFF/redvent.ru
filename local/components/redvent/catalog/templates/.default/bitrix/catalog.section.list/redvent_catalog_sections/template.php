<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

if (0 < $arResult["SECTIONS_COUNT"])
{?>
	<div class="catalog-sections__list">
		<?$intCurrentDepth = 1;
		$boolFirst = true;
		foreach ($arResult['SECTIONS'] as &$arSection)
		{
			$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
			$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
			?>
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6" id="<?=$this->GetEditAreaId($arSection['ID']);?>">
				<div class="catalog-sections-item">
					<img class="img-responsive catalog-sections-item__img" src="<?=$arSection['PICTURE']['SRC']?>" alt="">
					<a class="catalog-sections-item__link" href="<?=$arSection["SECTION_PAGE_URL"]?>">
						<?=$arSection["NAME"]?>
					</a>
				</div>
			</div>
		<?}
		unset($arSection);?>
		<div style="clear:both;"></div>
	</div>
<?}?>