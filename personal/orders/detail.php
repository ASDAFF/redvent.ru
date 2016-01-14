<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle('Список заказов');
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
                <a class="card-nav-list-item__link" href="/personal/card/">Корзина</a>
            </li>
            <li class="card-nav-list-item">
                <a class="card-nav-list-item__link active" href="/personal/orders/">Список заказов</a>
            </li>
            <li class="card-nav-list-item">
                <a class="card-nav-list-item__link" href="/personal/order/">Оформление заказа</a>
            </li>
            <div style="clear:both;"></div>
        </ul>
    </div>
<div class="card-block">
    <?$APPLICATION->IncludeComponent(
        "bitrix:sale.personal.order.detail",
        "redvent",
        Array(
            "ACTIVE_DATE_FORMAT" => "j F Y",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "3600",
            "CACHE_TYPE" => "A",
            "COMPONENT_TEMPLATE" => ".default",
            "CUSTOM_SELECT_PROPS" => array(""),
            "ID" => $_REQUEST['id'],
            "PATH_TO_CANCEL" => "/personal/orders/cancel.php?id=#ID#",
            "PATH_TO_LIST" => "/personal/orders/",
            "PATH_TO_PAYMENT" => "payment.php",
            "PICTURE_HEIGHT" => "110",
            "PICTURE_RESAMPLE_TYPE" => "1",
            "PICTURE_WIDTH" => "110",
            "PROP_1" => array(""),
            "PROP_2" => array(""),
            "SET_TITLE" => "Y"
        )
    );?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>