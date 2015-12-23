<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<div class="main-nav">
	<ul class="main-nav-list">
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
		<li class="main-nav-list-item">
			<a class="main-nav-list-item__link" href="<?=$arItem["LINK"]?>">
				<?=$arItem["TEXT"]?>
			</a>
		</li>
<?endforeach?>
	</ul>
	</div>
<?endif?>