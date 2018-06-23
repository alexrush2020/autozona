<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

if (empty($arResult)) {
    return '';
}

$strReturn = '<nav aria-label="breadcrumb"><ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="/">Главная</a></li>';

foreach ($arResult as $key => $arItem) {
    if (!empty($arItem['LINK'])) {
        $strReturn .= '<li class="breadcrumb-item"><a href="' . $arItem['LINK'] . '" title="' . $arItem['TITLE'] . '">' . $arItem['TITLE'] . '</a></li>';
    } else {
        $strReturn .= '<li class="breadcrumb-item active" aria-current="page">' . $arItem['TITLE'] . '</li>';
    }
}

$strReturn .= '</ol></nav>';
return $strReturn;
