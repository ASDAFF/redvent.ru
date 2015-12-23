<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<div class="footer-menu">
		<ul class="footer-menu-list">
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
		<li class="footer-menu-list-item">
			<a class="footer-menu-list-item__link" href="<?=$arItem["LINK"]?>">
				<?=$arItem["TEXT"]?>
			</a>
		</li>
<?endforeach?>
	</ul>
	</div>
<?endif?>