<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Security\Mfa;

$req = $_REQUEST;

if ($req['AUTH_FORM'] && $req['AUTH_FORM'] == 'Y' && $req['TYPE']) {

	$curPage = CMain::GetCurPage();

	switch ($req['TYPE']) {
		case 'AUTH':
			$arLogin = CUser::Login(
				$req['USER_LOGIN'],
				$req['USER_PASSWORD'],
				'Y',
				'Y'
			);
			if($arLogin === true)
			{
				header( 'Location: ' . $curPage, true);

			} else {
				$arResult['ERROR'][] = $arLogin;

			}
		case 'REGISTER':

	}
}

if(!$USER->IsAuthorized())
{
	$arResult["FORM_TYPE"] = "login";

}
else
{
	$arResult["FORM_TYPE"] = "logout";

	$arResult["AUTH_URL"] = $currentUrl;
	$arResult["PROFILE_URL"] = $arParams["PROFILE_URL"].(strpos($arParams["PROFILE_URL"], "?") !== false? "&" : "?")."backurl=".urlencode($currentUrl);

	$arRes = array();
	foreach($arResult as $key=>$value)
	{
		$arRes[$key] = htmlspecialcharsbx($value);
		$arRes['~'.$key] = $value;
	}
	$arResult = $arRes;

	$arResult["USER_NAME"] = htmlspecialcharsEx($USER->GetFormattedName(false, false));
	$arResult["USER_LOGIN"] = htmlspecialcharsEx($USER->GetLogin());

	$arResult["POST"] = array();
	$arResult["GET"] = array();
	foreach($_GET as $vname=>$vvalue)
		if(!is_array($vvalue) && $vname!="backurl" && $vname != "login" && $vname != "auth_service_id")
			$arResult["GET"][htmlspecialcharsbx($vname)] = htmlspecialcharsbx($vvalue);
}

$this->IncludeComponentTemplate();
