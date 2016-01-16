<?if(!defined('B_PROLOG_INCLUDED')||B_PROLOG_INCLUDED!==true)die();

define('IBLOCK_CATALOG', 4);

function _show_array($mPrintVar) {
    echo '<pre style="font-size:11px; margin:0 0 15px 0; padding:5px; color:#B7B7B7 !important; background-color:#2B2B2B; text-align:left !important;">'.htmlspecialchars(print_r($mPrintVar, true)).'</pre>';
}