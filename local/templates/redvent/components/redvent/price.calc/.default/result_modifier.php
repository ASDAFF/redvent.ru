<?php
/**
 * Created by PhpStorm.
 * User: pry
 * Date: 16.01.16
 * Time: 20:56
 */
$rsColors = CIBlockElement::GetList(
    array(),
    array(
        'IBLOCK_ID' => 10
    ),
    false,
    false,
    array(
        'NAME',
        'PREVIEW_PICTURE'
    )
);
while($arColors = $rsColors->Fetch()) {
    $arColors['PREVIEW_PICTURE'] = CFile::GetPath($arColors['PREVIEW_PICTURE']);
    $arResult['COLORS'][] = $arColors;
}