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
        "bitrix:sale.personal.order.list",
        "redvent",
        Array(
            "ACTIVE_DATE_FORMAT" => "j F Y",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "3600",
            "CACHE_TYPE" => "A",
            "COMPONENT_TEMPLATE" => "redvent",
            "HISTORIC_STATUSES" => array("F"),
            "ID" => $_REQUEST['ID'],
            "NAV_TEMPLATE" => "",
            "ORDERS_PER_PAGE" => "20",
            "PATH_TO_BASKET" => "/personal/card/",
            "PATH_TO_CANCEL" => "/personal/orders/cancel.php?id=#ID#",
            "PATH_TO_COPY" => "",
            "PATH_TO_DETAIL" => "/personal/orders/detail.php?id=#ID#",
            "SAVE_IN_SESSION" => "Y",
            "SET_TITLE" => "N",
            "STATUS_COLOR_F" => "gray",
            "STATUS_COLOR_N" => "green",
            "STATUS_COLOR_P" => "yellow",
            "STATUS_COLOR_PSEUDO_CANCELLED" => "red"
        )
    );?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>