<?
/**
 * @var array $arParams
 * @var array $arResult
 * @global CMain $APPLICATION
 * @global CUser $USER
 * @global CDatabase $DB
 * @var CBitrixComponentTemplate $this
 */

foreach ($arResult['SECTIONS'] as $key => $arItem) {
    if (strpos($arParams['CUR_DIR'], $arItem['SECTION_PAGE_URL']) !== false) {
        $arItem['SELECTED'] = true;
    }

    $arResult['SECTIONS'][$key] = $arItem;
}
