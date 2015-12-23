<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$return = '<ul class="navstring">';

foreach($arResult as $key => $val) {
    $return .= '<li class="navstring-item">';
    if (count($arResult)-1 == $key) {
        $return .= $val['TITLE'];
    } else {
        $return .= '<a class="navstring-item__link" href="'.$val['LINK'].'">'.$val['TITLE'].'</a>';
    }
    $return .= '</li>';
}
$return .= '</ul><div style="clear:both;"></div>';

return $return;