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

if (empty($arResult['DETAIL_PICTURE'])) {
    $arResult['DETAIL_PICTURE'] = $arResult['PREVIEW_PICTURE'];
}

if (!empty($arResult['DETAIL_PICTURE'])) {
    $arResult['RESIZE_PICTURE'] = \CFile::ResizeImageGet(
        $arResult['DETAIL_PICTURE'],
        array(
            'width'  => 800,
            'height' => 600,
        )
    );
}

foreach ($arResult['PROPERTIES']['PHOTOS']['VALUE'] as $key => $fid) {
    $pic = \CFile::ResizeImageGet(
        $fid,
        array(
            'width'  => 800,
            'height' => 600,
        )
    );

    $arResult['PHOTOS'][] = $pic['src'];
}

if (empty($arResult['PHOTOS'])) {
    $arResult['PHOTOS'][] = $arResult['RESIZE_PICTURE']['src'];
}

if (!empty($arResult['PROPERTIES']['PRICE']['VALUE'])) {
    $arResult['PRICE'] = number_format($arResult['PROPERTIES']['PRICE']['VALUE'], 0, '.', ' ');
}
