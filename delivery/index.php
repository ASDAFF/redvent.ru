<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle('Оплата и доставка');
$APPLICATION->SetPageProperty('PAGE_DESCRIPTION', 'СХЕМА РАБОТЫ');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_after.php");?>
    <div class="delivery-items">
        <div class="delivery-item first">
            <p class="delivery-item__title">Вы можете разместить заказ одним из следующих способов:</p>
            <ul class="delivery-item-list">
                <li class="delivery-item-list-item">
                    Разместить заказ через сайт
                </li>
                <li class="delivery-item-list-item">
                    Отправить заявку на электронный адрес: <a class="delivery-item__email" href="mailto:zakaz@redvent.ru">zakaz@redvent.ru</a>
                </li>
                <li class="delivery-item-list-item">
                    <a class="delivery-item__link" href="/contacts/">Заказать обратный звонок</a>
                </li>
                <li class="delivery-item-list-item">
                    Или позвонить по телефону: <span class="delivery-item__phone">8 (495) 795-23-04</span>
                </li>
            </ul>
        </div>
        <div class="delivery-item second">
            <p class="delivery-item__title">Мы сообщим вам стоимость и сроки производства:</p>
            <ul class="delivery-item-list">
                <li class="delivery-item-list-item">
                    Вышлем счет или коммерческое предложение
                </li>
                <li class="delivery-item-list-item">
                    Или просто ответим на вопросы по телефону
                </li>
            </ul>
        </div>
        <div class="delivery-item third">
            <p class="delivery-item__title">Вы оплачиваете счет одним из указанных способов:</p>
            <ul class="delivery-item-list">
                <li class="delivery-item-list-item">
                    Безналичный расчет
                </li>
                <li class="delivery-item-list-item">
                    Наличный расчет через ближайший к вам банк
                </li>
                <li class="delivery-item-list-item">
                    Через электронные деньги
                </li>
                <div>
                    <img class="img-responsive" src="/local/templates/redvent/html/img/paiments.png" alt="">
                </div>
            </ul>
        </div>
        <div class="delivery-item fourth">
            <p class="delivery-item__title">Получаете продукцию удобным для вас способом:</p>
            <ul class="delivery-item-list">
                <li class="delivery-item-list-item">
                    Доставка до вашего склада или объекта
                </li>
                <li class="delivery-item-list-item">
                    Доставка до транспортной компании на ваш выбор
                </li>
                <div class="delivery-item__delivery">
                    Отправляем груз через ТК <a href="/">"Деловые линии"</a><br>
                    Отправляем готовую продукцию до транспортной компании <br> "Деловые линии" в г. Рязань бесплатно.
                </div>
                <li class="delivery-item-list-item">
                    <a href="/contacts/">Самовывоз</a>
                </li>
            </ul>
        </div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>