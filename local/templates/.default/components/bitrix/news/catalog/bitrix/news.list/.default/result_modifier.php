<?
/**
 * @var array $arParams
 * @var array $arResult
 * @global CMain $APPLICATION
 * @global CUser $USER
 * @global CDatabase $DB
 * @var CBitrixComponentTemplate $this
 */
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

foreach ($arResult['ITEMS'] as $key => $arItem) {
    if (!empty($arItem['PREVIEW_PICTURE'])) {
        $arItem['RESIZE_PICTURE'] = \CFile::ResizeImageGet(
            $arItem['PREVIEW_PICTURE'],
            array(
                'width'  => 400,
                'height' => 300,
            )
        );
    }

    if (!empty($arItem['PROPERTIES']['PRICE']['VALUE'])) {
        $arItem['PRICE'] = number_format($arItem['PROPERTIES']['PRICE']['VALUE'], 0, '.', ' ');
    }

    $arResult['ITEMS'][$key] = $arItem;
}

$arResult['NAV_STRING'] = $arResult['NAV_RESULT']->GetPageNavStringEx(
    $navComponentObject,
    $arParams['PAGER_TITLE'],
    $arParams['PAGER_TEMPLATE'],
    $arParams['PAGER_SHOW_ALWAYS'],
    $this->__component,
    $arResult['NAV_PARAM']
);
