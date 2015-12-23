<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
?>
<div class="header-feedback">
	<h3>Обратный звонок</h3>
	<p>
		Укажите ваш номер телефона и имя. Мы перезвоним вам через 15 минут.
	</p>
	<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
		<?=bitrix_sessid_post()?>
		<div class="form-field-line">
			<label class="form-field-line__name">
				Ваше имя*
			</label>
			<input class="form-field-line__text form-field__text" name="user_name" type="text" value="<?=$arResult["AUTHOR_NAME"]?>" required>
		</div>
		<div class="form-field-line">
			<label class="form-field-line__name">
				Телефон*
			</label>
			<input class="form-field-line__text form-field__text" name="user_phone" type="text" value="<?=$arResult["AUTHOR_PHONE"]?>" required>
		</div>
		<div class="form-field-line">
            <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
			<input class="button button-first" type="submit" value="Я жду звонка">
		</div>
	</form>
</div>