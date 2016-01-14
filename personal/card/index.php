<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle('Каталог решеток');
$APPLICATION->SetPageProperty('PAGE_DESCRIPTION', 'БУДЬТЕ В КУРСЕ НАШИХ АКЦИЙ');
$APPLICATION->SetPageProperty('NO_TITLE', 'Y');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_after.php");?>
    <div class="card-nav">
        <ul class="card-nav-list">
            <li class="card-nav-list-item">
                <a class="card-nav-list-item__link" href="/">Главная</a>
            </li>
            <li class="card-nav-list-item">
                <a class="card-nav-list-item__link" href="/personal/">Личный кабинет</a>
            </li>
            <li class="card-nav-list-item">
                <a class="card-nav-list-item__link active" href="/personal/card/">Корзина</a>
            </li>
            <li class="card-nav-list-item">
                <a class="card-nav-list-item__link" href="/personal/orders/">Список заказов</a>
            </li>
            <li class="card-nav-list-item">
                <a class="card-nav-list-item__link" href="/personal/order/">Оформление заказа</a>
            </li>
            <div style="clear:both;"></div>
        </ul>
    </div>
<?$APPLICATION->IncludeComponent(
    "redvent:sale.basket.basket",
    "redvent",
    Array(
        "ACTION_VARIABLE" => "action",
        "COLUMNS_LIST" => array("NAME","PROPS","DELETE","PRICE","QUANTITY","SUM"),
        "COMPONENT_TEMPLATE" => "redvent",
        "COUNT_DISCOUNT_4_ALL_QUANTITY" => "N",
        "HIDE_COUPON" => "N",
        "PATH_TO_ORDER" => "/personal/order/",
        "PRICE_VAT_SHOW_VALUE" => "N",
        "QUANTITY_FLOAT" => "N",
        "SET_TITLE" => "Y",
        "TEMPLATE_THEME" => "blue",
        "USE_PREPAYMENT" => "N"
    )
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>