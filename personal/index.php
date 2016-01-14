<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle('Каталог решеток');
$APPLICATION->SetPageProperty('PAGE_DESCRIPTION', 'БУДЬТЕ В КУРСЕ НАШИХ АКЦИЙ');
$APPLICATION->SetPageProperty('NO_TITLE', 'Y');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_after.php");?>
<?$APPLICATION->IncludeComponent(
    "bitrix:main.profile",
    "",
    Array(
        "AJAX_MODE" => "Y",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "Y",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CHECK_RIGHTS" => "N",
        "COMPONENT_TEMPLATE" => ".default",
        "SEND_INFO" => "N",
        "SET_TITLE" => "Y",
        "USER_PROPERTY" => array(),
        "USER_PROPERTY_NAME" => ""
    )
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>