<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle('Контакты компании Рэдвент.ру');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_after.php");?>
    <div class="contacts__block">
        <p class="contacts-field">
                        <span class="contacts-field__name">
                            Тел.:
                        </span>
            8 (495) 795-23-04
        </p>
        <p class="contacts-field">
                        <span class="contacts-field__name">
                            Почта для заявок:
                        </span>
            <a class="contacts-field__link" href="mailto:zakaz@redvent.ru">zakaz@redvent.ru</a>
        </p>
        <p class="contacts-field">
                        <span class="contacts-field__name">
                            Почта для прочих целей:
                        </span>
            <a class="contacts-field__link" href="mailto:zakaz@redvent.ru">snab@redvent.ru</a>
        </p>
    </div>
    <div class="text-dashed contacts__block">
        Значимость этих проблем настолько очевидна,
        что постоянный количественный рост и сфера нашей
        активности в значительной степени обуславливает
        создание системы обучения кадров, соответствует
        насущным потребностям. Идейные соображения высшего
        порядка, а также укрепление.
    </div>
    <div class="contacts-items">
        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "contacts",
            Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "Y",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "COMPONENT_TEMPLATE" => "contacts",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array("", "PREVIEW_TEXT", "PREVIEW_PICTURE", ""),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "6",
                "IBLOCK_TYPE" => "other",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "20",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array("PHONE", ""),
                "SET_BROWSER_TITLE" => "Y",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "Y",
                "SET_META_KEYWORDS" => "Y",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC"
            )
        );?>
        <?$APPLICATION->IncludeComponent(
            "redvent:feedback",
            "contacts",
            Array(
                "COMPONENT_TEMPLATE" => "main",
                "EMAIL_TO" => "pruashnikov@gmail.com",
                "EVENT_MESSAGE_ID" => array("7"),
                "OK_TEXT" => "Мы свяжемся с Вами в ближайшее время.",
                "REQUIRED_FIELDS" => array(),
                "USE_CAPTCHA" => "Y"
            )
        );?>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>