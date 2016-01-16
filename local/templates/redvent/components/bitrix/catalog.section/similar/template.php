<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true); ?>
<div class="catalog-detail-similar">
	<div class="catalog-detail-similar-title">
		<div class="pages-title-first">
			<div class="pages-title-first__left"></div>
			<div class="pages-title-first__text">
				Товары из этого раздела
			</div>
			<div class="pages-title-first__right"></div>
		</div>
	</div>
	<div class="catalog-detail-similar-items active">
		<div class="row">
			<?foreach ($arResult['ITEMS'] as $key => $arItem) {?>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					<a href="<?=$arItem['DETAIL_PAGE_URL']?>">
						<img class="img-responsive main-products-items__img" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['NAME']?>">
					</a>
					<a class="main-products-items__link" href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a>
				</div>
			<?}?>
		</div>
	</div>
</div>
