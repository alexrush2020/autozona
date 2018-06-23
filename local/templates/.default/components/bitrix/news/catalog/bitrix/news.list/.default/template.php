<?
/**
 * @var array $arParams
 * @var array $arResult
 * @global CMain $APPLICATION
 * @global CUser $USER
 * @global CDatabase $DB
 * @var string $templateName
 * @var string $templateFile
 * @var string $templateFolder
 * @var string $componentPath
 * @var CBitrixComponentTemplate $this
 * @var CBitrixComponent $component
 */
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
?>
<div class="row">
    <? foreach ($arResult['ITEMS'] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="catalog-item col-sm-6 col-md-4" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <div class="catalog-item__block">
                <? if (!empty($arItem['RESIZE_PICTURE'])): ?>
                    <div class="catalog-item__img">
                        <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>">
                            <img
                                class="img-thumbnail"
                                src="<?= $arItem['RESIZE_PICTURE']['src'] ?>"
                                alt="<?= $arItem['NAME'] ?>"
                                title="<?= $arItem['NAME'] ?>"/>
                        </a>
                    </div>
                <? endif; ?>
                <div class="catalog-item__title">
                    <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>"><?= $arItem['NAME'] ?></a>
                </div>
                <div class="catalog-item__content">
                    <? echo $arItem["PREVIEW_TEXT"]; ?>
                </div>

                <div class="catalog-item__buy-block">
                    <div class="catalog-item__price">
                        <?= $arItem['PRICE'] ?>
                        <span class="rub">a</span>
                    </div>

                    <div class="catalog-item__buy">
                        <a data-id="<?= $arItem['ID'] ?>" class="btn btn-primary btn-success js-add-to-basket" href="javascript:void(0);">Добавить в корзину</a>
                    </div>
                </div>
            </div>
        </div>
    <? endforeach ?>
</div>
<? if ($arParams['DISPLAY_BOTTOM_PAGER']): ?>
    <div class="pagination">
        <?= $arResult['NAV_STRING'] ?>
    </div>
<? endif ?>
