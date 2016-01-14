<?php

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$req =  $_REQUEST;

CModule::IncludeModule("sale");
CModule::IncludeModule("iblock");


_show_array($req);
if (!empty($req['id']) && !empty($req['width']) && !empty($req['height']) && !empty($req['quantity']) && !empty($req['price'])) {

    $rsProd = CIBlockElement::GetById($req['id']);
    if($arProd = $rsProd->Fetch()){

        $arFields = array(
            "PRODUCT_ID" => $arProd['ID'],
            "PRICE" => $req['price'],
            "CURRENCY" => "RUB",
            "WEIGHT" => !empty($req['weight']) && $req['weight'] != '' ? $req['weight'] : 'Нет',
            "QUANTITY" => $req['quantity'],
            "LID" => LANG,
            "DELAY" => "N",
            "CAN_BUY" => "Y",
            "NAME" => $arProd['NAME']
        );

        $arProps = array();

        $arProps[] = array(
            "NAME" => "Объем",
            "CODE" => "VOLUME",
            "VALUE" => !empty($req['volume']) && $req['volume'] != '' ? $req['volume'] : 'Нет'
        );

        $arProps[] = array(
            "NAME" => "Цвет",
            "CODE" => "COLOR",
            "VALUE" => !empty($req['color']) && $req['color'] != '' ? $req['color'] : 'Нет'
        );

        $arProps[] = array(
            "NAME" => "Ширина",
            "CODE" => "WIDTH",
            "VALUE" => $req['width'] . ' мм'
        );

        $arProps[] = array(
            "NAME" => "Высота",
            "CODE" => "HEIGHT",
            "VALUE" => $req['height'] . ' мм'
        );

        $arFields["PROPS"] = $arProps;

        _show_array($arFields);

        $basketId = CSaleBasket::Add($arFields);
    }

}



//!empty($basketId) ? _show_array(CSaleBasket::GetById($basketId)) : _show_array('А вот хрен тебе! :Р');


