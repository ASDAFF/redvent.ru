<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
	<div class="catalog-section__list row">

	<?
foreach ($arResult['ITEMS'] as $key => $arItem)
{
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strElementEdit);
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strElementDelete, $arElementDeleteParams);
	$strMainID = $this->GetEditAreaId($arItem['ID']);
//	_show_array($arItem);
	?>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<div class="catalog-section-item">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-3">
						<a href="<?=$arItem['DETAIL_PAGE_URL']?>">
							<img class="img-responsive catalog-section-item__img" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="">
						</a>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-9">
						<a class="catalog-section-item__link" href="<?=$arItem['DETAIL_PAGE_URL']?>">
							<?=$arItem['NAME']?>
						</a><br/>
						<?=$arItem['PREVIEW_TEXT']?>
					</div>
				</div>
			</div>
		</div>
<?}