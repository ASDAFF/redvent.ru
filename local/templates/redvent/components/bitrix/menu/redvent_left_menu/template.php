<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
	<div class="left-menu">
		<div class="left-menu-top">
			<div class="left-menu-top-button">
				<a class="left-menu-top__link" href="catalog-sections.html">Каталог продукции</a>
				<a href="#" class="left-menu-top__burger" data-toggle="collapse" data-target=".left-menu-bottom"></a>
			</div>
		</div>
		<div class="left-menu-bottom collapse in">
			<ul class="left-menu-bottom-list">
				<?
				foreach($arResult as $arItem):
					if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
						continue;
					?>
					<li class="left-menu-bottom-list-item">
						<a class="left-menu-bottom-list-item__link" href="<?=$arItem["LINK"]?>">
							<?=$arItem["TEXT"]?>
						</a>
					</li>
				<?endforeach?>
			</ul>
		</div>
	</div>
<?endif?>