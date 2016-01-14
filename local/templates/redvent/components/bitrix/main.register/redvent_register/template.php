<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();
?>

<?if($USER->IsAuthorized()):?>

<p><?echo GetMessage("MAIN_REGISTER_AUTH")?></p>

<?else:?>
	<?if (count($arResult["ERRORS"]) > 0):
		foreach ($arResult["ERRORS"] as $key => $error)
			if (intval($key) == 0 && $key !== 0)
				$arResult["ERRORS"][$key] = str_replace("#FIELD_NAME#", "&quot;".GetMessage("REGISTER_FIELD_".$key)."&quot;", $error);

		ShowError(implode("<br />", $arResult["ERRORS"]));

	elseif($arResult["USE_EMAIL_CONFIRMATION"] === "Y"):
		?>
		<p><?echo GetMessage("REGISTER_EMAIL_WILL_BE_SENT")?></p>
	<?endif?>
	<h3 class="header-top-personal-popup__title">Регистрация</h3>
	<form class="form" method="post" action="<?=POST_FORM_ACTION_URI?>" name="regform" enctype="multipart/form-data">
		<?
		if($arResult["BACKURL"] <> ''):
			?>
			<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
			<?
		endif;
		?>
		<div class="header-top-personal-popup__field">
			<label class="header-top-personal-popup__name">
				Ваш логин
			</label>
			<input class="header-top-personal-popup__text" name="REGISTER[LOGIN]" type="text">
		</div>
		<div class="header-top-personal-popup__field">
			<label class="header-top-personal-popup__name">
				Moбильный телефон
			</label>
			<input class="header-top-personal-popup__text" name="REGISTER[PERSONAL_MOBILE]" type="text">
		</div>
		<div class="header-top-personal-popup__field">
			<label class="header-top-personal-popup__name">
				Электронная почта
			</label>
			<input class="header-top-personal-popup__text" name="REGISTER[EMAIL]" type="text">
		</div>
		<div class="header-top-personal-popup__field">
			<label class="header-top-personal-popup__name">
				Пароль
			</label>
			<input class="header-top-personal-popup__text" name="REGISTER[PASSWORD]" type="text">
		</div>
		<div class="header-top-personal-popup__field">
			<label class="header-top-personal-popup__name">
				Пароль еще раз
			</label>
			<input class="header-top-personal-popup__text" name="REGISTER[CONFIRM_PASSWORD]" type="text">
		</div>
		<div class="header-top-personal-popup__field">
			<input class="button button-first" name="register_submit_button" type="submit" value="Зарегистрироваться">
			<a class="header-top-personal-popup__button" href="#auth_form" data-toggle="tab">Войти</a>
		</div>
	</form>

<?endif?>