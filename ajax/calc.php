<?php

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$req =  $_REQUEST;

CModule::IncludeModule("sale");
CModule::IncludeModule("iblock");

$CIBlockElement = new CIBlockElement();

$arElt = array();
$elt = array();

if (intval($req['PRODUCT_ID'])) {

    $arFilter =  array(
        'IBLOCK_ID' => IBLOCK_CATALOG,
        'ACTIVE' => 'Y',
        'ID' => intval($req['PRODUCT_ID'])
    );

    $Props = array();

    $rsProperty = CIBlockProperty::GetList(
        Array('sort'=>'asc'),
        Array(
            'ACTIVE' => 'Y',
            'IBLOCK_ID' => IBLOCK_CATALOG
        )
    );
    while ($arProperty = $rsProperty->Fetch()) {
        $Props[] = 'PROPERTY_' . $arProperty['CODE'];
    }

    $eltsSelectFields = array_merge(
        array(
            'ID',
            'NAME',
            'CODE',
            'PREVIEW_PICTURE',
            'DETAIL_PICTURE',
        ),
        $Props
    );

    $arElt = $CIBlockElement->GetList(
        array(
            'SORT' => 'asc',
            'ID' => 'DESC'
        ),
        $arFilter,
        false,
        false,
        $eltsSelectFields
    )->Fetch();

    $CFile = new \CFile();
    $previewPic = '';

    if ($arElt['PREVIEW_PICTURE']) {
        $elt['PREVIEW_PICTURE'] = $CFile->GetPath($arElt['PREVIEW_PICTURE']);

    } elseif ($arElt['DETAIL_PICTURE']) {
        $elt['PREVIEW_PICTURE'] = $CFile->GetPath($arElt['DETAIL_PICTURE']);

    }

    $arPrice = CPrice::GetList(
        array(),
        array(
            "PRODUCT_ID" => $arElt['ID']
        )
    )->Fetch();

    $square = $req['HEIGHT'] * $req['WIDTH'] / 1000000;

    $price = round(intval($arPrice['PRICE']) * $square, 2);
    $price_full = round(intval($price) / 0.73, 2);
    $price_q = round($price * $req['QUANTITY'], 2);

    $weight = $square * $arElt['PROPERTY_WEIGHT_VALUE'] * $req['QUANTITY'];
    $depth =  round($square * $arElt['PROPERTY_DEPTH_VALUE'] / 1000, 2);

    $width_full = intval($arElt['PROPERTY_WIDTH_PLUS_VALUE']) + intval($req['WIDTH']);
    $height_full = intval($arElt['PROPERTY_HEIGHT_PLUS_VALUE']) + intval($req['HEIGHT']);


    $elt = array(
        'ID' => $arElt['ID'],
        'WIDTH_PLUS' => $arElt['PROPERTY_WIDTH_PLUS_VALUE'],
        'HEIGHT_PLUS' => $arElt['PROPERTY_HEIGHT_PLUS_VALUE'],
        'DEPTH' => $depth,
        'WEIGHT' => $weight,
        'WIDTH_FULL' => $width_full,
        'HEIGHT_FULL' => $height_full,
        'PRICE' => $price,
        'PRICE_FULL' => $price_full,
        'PRICE_Q' => $price_q
    );

}

header('Content-Type: application/json');
echo json_encode($elt);
//_show_array($arElt);
//_show_array($elt);