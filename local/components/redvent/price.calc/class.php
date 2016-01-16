<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

class CPryaNewsList extends CBitrixComponent
{
    function onPrepareComponentParams($arParams){
        $arParams = array_merge(array(
            'CACHE_TIME' => 3600,
            'CACHE_TYPE' => 'Y',
            'SHOW_ALL' => 'N',
            'AJAX' => 'N',
            'NAV_START' => false
        ), $arParams);
        return $arParams;
    }

    function getIBlockProperties($IBlockId) {

        $Props = array();

        $rsProperty = CIBlockProperty::GetList(
            Array('sort'=>'asc'),
            Array(
                'ACTIVE' => 'Y',
                'IBLOCK_ID' => $IBlockId
            )
        );
        while ($arProperty = $rsProperty->Fetch()) {
            $Props[] = 'PROPERTY_' . $arProperty['CODE'];
        }

        return $Props;
    }

    function executeComponent(){
        $arFilter =  array(
            'IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
            'ACTIVE' => 'Y',
        );

        if (true || $this->StartResultCache()) {

            $CIBlockElement = new CIBlockElement();
            $CFile = new \CFile();

            $aElts = array();
            $eltsSelectFields = array_merge(
                array(
                    'ID',
                    'NAME',
                    'CODE',
                    'PREVIEW_PICTURE',
                    'DETAIL_PICTURE',
                    'DETAIL_PAGE_URL',
                ),
                $this->getIBlockProperties($this->arParams['IBLOCK_ID'])
            );

            $rsElts = $CIBlockElement->GetList(
                array(
                    'SORT' => 'asc',
                    'date_active_from' => 'DESC'
                ),
                $arFilter,
                false,
                false,
                array(
                    'ID',
                    'NAME'
                )
            );
            if (intval($rsElts->SelectedRowsCount())) {

                while ($arElt = $rsElts->Fetch()) {

                    $aElts[] = array(
                        'ID' => $arElt['ID'],
                        'NAME' => $arElt['NAME'],
                    );

                }

                $arElt = $CIBlockElement->GetList(
                    array(
                        'SORT' => 'asc',
                        'ID' => 'DESC'
                    ),
                    array_merge($arFilter, array('ID' => $aElts[0]['ID'])),
                    false,
                    false,
                    $eltsSelectFields
                )->GetNext();

                if ($arElt['DETAIL_PICTURE']) {
                    $arElt['DETAIL_PICTURE'] = $CFile->GetPath($arElt['DETAIL_PICTURE']);

                } elseif ($arElt['PREVIEW_PICTURE']) {
                    $arElt['DETAIL_PICTURE'] = $CFile->GetPath($arElt['PREVIEW_PICTURE']);

                }

                $arPrice = CPrice::GetList(
                    array(),
                    array(
                        "PRODUCT_ID" => $arElt['ID']
                    )
                )->Fetch();

                $arElt['PRICE'] = $arPrice['PRICE'];

                $this->arResult['ITEMS'] = $aElts;
                $this->arResult['ITEM'] = $arElt;

                $this->IncludeComponentTemplate();
            }
        }
    }
}
