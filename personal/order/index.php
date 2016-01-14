<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle('Оформление заказа');
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
                <a class="card-nav-list-item__link" href="/personal/orders/">Список заказов</a>
            </li>
            <li class="card-nav-list-item">
                <a class="card-nav-list-item__link active" href="/personal/order/">Оформление заказа</a>
            </li>
            <div style="clear:both;"></div>
        </ul>
    </div>
    <div class="card-block">
        <?$APPLICATION->IncludeComponent(
            "bitrix:sale.order.full",
            "redvent",
            Array(
                "ALLOW_PAY_FROM_ACCOUNT" => "Y",
                "CITY_OUT_LOCATION" => "Y",
                "COMPONENT_TEMPLATE" => ".default",
                "COUNT_DELIVERY_TAX" => "N",
                "COUNT_DISCOUNT_4_ALL_QUANTITY" => "N",
                "DELIVERY_NO_SESSION" => "N",
                "ONLY_FULL_PAY_FROM_ACCOUNT" => "N",
                "PATH_TO_AUTH" => "",
                "PATH_TO_BASKET" => "/personal/card/",
                "PATH_TO_PAYMENT" => "payment.php",
                "PATH_TO_PERSONAL" => "/personal/",
                "PRICE_VAT_INCLUDE" => "Y",
                "PRICE_VAT_SHOW_VALUE" => "Y",
                "PROP_1" => array(""),
                "PROP_2" => array(""),
                "SEND_NEW_USER_NOTIFY" => "Y",
                "SET_TITLE" => "Y",
                "SHOW_AJAX_DELIVERY_LINK" => "Y",
                "SHOW_MENU" => "Y",
                "USE_AJAX_LOCATIONS" => "Y"
            )
        );?>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>