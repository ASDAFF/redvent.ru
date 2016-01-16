<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle('Цены online');
$APPLICATION->SetPageProperty('PAGE_DESCRIPTION', 'Онлайн расчет цены на решетки');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_after.php");?>
<?$APPLICATION->IncludeComponent('redvent:price.calc', '.default', array(
    'IBLOCK_ID' => IBLOCK_CATALOG,
    'SHOW_ALL' => 'Y',
    'AJAX' => $_REQUEST['AJAX'] == 'Y' ? 'Y' : 'N',
    'PRODUCT_ID' => intval($_REQUEST['PRODUCT_ID']) ? $_REQUEST['PRODUCT_ID'] : false,
    'SORT' => 'SORT',
    'BY' => 'DESC'
));?>
<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "COMPONENT_TEMPLATE" => ".default",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/include/price_online.php"
    )
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>