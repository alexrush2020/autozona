<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
} ?>
<? if (count($arResult['ITEMS']) > 0): ?>
    <? $index = 1; ?>
    <? foreach ($arResult['ITEMS'] as $arItem): ?>
        <div id="<?= $arItem['editAreaId'] ?>" class="f_service_block col-md-4 f_service_block_<?= $index ?>">
            <div class="f_service_block_in"
                 style="background-image:url(<?= $arItem['PHOTO']['src'] ?>)">
                <a href="<?= $arItem['PROPERTIES']['URL']['VALUE'] ?: '#' ?>"></a>
                <div class="f_service_img"></div>
                <div class="f_service_title">
                    <div><p><?= $arItem['NAME'] ?></p></div>
                </div>
            </div>
        </div>
        <? $index++; ?>
    <? endforeach ?>
<? endif ?>
