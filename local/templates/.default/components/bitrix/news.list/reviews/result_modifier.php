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

    $arResult['ITEMS'][$key] = $arItem;
}
