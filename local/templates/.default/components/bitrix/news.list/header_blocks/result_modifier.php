<?
foreach ($arResult['ITEMS'] as $key => $arItem) {
    $this->AddEditAction(
        $arItem['ID'],
        $arItem['EDIT_LINK'],
        \CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT')
    );
    $this->AddDeleteAction(
        $arItem['ID'],
        $arItem['DELETE_LINK'],
        \CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'),
        array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))
    );

    $arItem['editAreaId'] = $this->GetEditAreaId($arItem['ID']);

    $pic = CFile::ResizeImageGet(
        $arItem['PREVIEW_PICTURE'],
        array('width' => 300, 'height' => 180),
        BX_RESIZE_IMAGE_PROPORTIONAL
    );
    $arItem['PHOTO'] = $pic;

    $arResult['ITEMS'][$key] = $arItem;
}
