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
            "bitrix:sale.personal.order.cancel",
            "redvent",
            Array(
                "COMPONENT_TEMPLATE" => ".default",
                "ID" => $_REQUEST['id'],
                "PATH_TO_DETAIL" => "/personal/orders/detail.php?id=#ID#",
                "PATH_TO_LIST" => "/personal/orders/",
                "SET_TITLE" => "N"
            )
        );?>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>