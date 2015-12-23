<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
?>
<div class="main-form">
	<div class="main-form-title feedback">
		<b>заказать</b><br>
		обратный звонок
	</div>
	<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
        <?=bitrix_sessid_post()?>
		<?if(!empty($arResult["ERROR_MESSAGE"]))
		{?>
			<div class="main-form-field">
			<?foreach($arResult["ERROR_MESSAGE"] as $v) {
				ShowError($v);
			}?>
			</div>
			<?
		}
		if(strlen($arResult["OK_MESSAGE"]) > 0)
		{?>
            <div class="main-form-field">
                <?=$arResult["OK_MESSAGE"]?>
            </div>
            <?
		}?>
		<div class="main-form-field">
			<input class="main-form-field-text" type="text" name="user_name" placeholder="Имя*" value="<?=$arResult["AUTHOR_NAME"]?>" required>
		</div>
		<div class="main-form-field">
			<input class="main-form-field-text" type="text" name="user_phone" placeholder="Телефон*" value="<?=$arResult["AUTHOR_PHONE"]?>" required>
		</div>
		<div class="main-form-field">
            <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
			<input class="button button-first main-form-field-button" name="submit" type="submit">
		</div>
		<div class="main-form-field">
			<p class="main-form__descr">
				Наши менеджеры перезвонят вам в кратчайшие сроки
			</p>
		</div>
	</form>
</div>