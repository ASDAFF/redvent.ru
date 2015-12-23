<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<h3 class="header-top-personal-popup__title auth">Войти</h3>
<?
if ($arResult['SHOW_ERRORS'] == 'Y' && $arResult['ERROR']) {
    ShowMessage($arResult['ERROR_MESSAGE']);

}?>
<form class="form" name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
    <?if($arResult["BACKURL"] <> ''):?>
        <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
    <?endif?>
    <?foreach ($arResult["POST"] as $key => $value):?>
        <input type="hidden" name="<?=$key?>" value="<?=$value?>" />
    <?endforeach?>
    <input type="hidden" name="AUTH_FORM" value="Y" />
    <input type="hidden" name="TYPE" value="AUTH" />
	<div class="header-top-personal-popup__field">
		<label class="header-top-personal-popup__name">
			Электронная почта
		</label>
		<input class="header-top-personal-popup__text" name="USER_LOGIN" maxlength="50" value="<?=$arResult["USER_LOGIN"]?>" type="text"/>
	</div>
	<div class="header-top-personal-popup__field">
		<label class="header-top-personal-popup__name">
			Пароль
		</label>
		<input class="header-top-personal-popup__text" type="password" name="USER_PASSWORD" maxlength="50" size="17" autocomplete="off"/>
	</div>
	<a class="header-top-personal-popup__forgot" href="/">Забыли пароль?</a>
	<div class="header-top-personal-popup__field">
		<input class="button button-first" type="submit" name="Login" value="Войти">
		<a class="header-top-personal-popup__button active" href="#register_form" data-toggle="tab">Зарегистрироваться</a>
	</div>
</form>