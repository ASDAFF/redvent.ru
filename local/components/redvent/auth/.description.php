<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => "Форма авторизации и регистрации",
	"DESCRIPTION" => "Форма авторизации и регистрации",
	"ICON" => "/images/user_authform.gif",
	"PATH" => array(
			"ID" => "utility",
			"CHILD" => array(
				"ID" => "user",
				"NAME" => "Пользователь"
			)
		),	
);
?>