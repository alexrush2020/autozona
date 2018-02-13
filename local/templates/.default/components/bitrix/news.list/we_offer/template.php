<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
} ?>
<? if (count($arResult['ITEMS']) > 0): ?>
    <? foreach ($arResult['ITEMS'] as $arItem): ?>
        <div id="<?= $arItem['editAreaId'] ?>" class="col-md-6">
            <div class="f_advantages_in">
                <div class="f_advantages_ico wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                    <img src="<?= $arItem['PHOTO']['src'] ?>">
                </div>
                <div class="f_advantages_right">
                    <div class="f_advantages_title"><?= $arItem['NAME'] ?></div>
                    <div class="f_advantages_text"><?= $arItem['PREVIEW_TEXT'] ?></div>
                    <? if (!empty($arItem['PROPERTIES']['URL']['VALUE'])): ?>
                        <a class="f_advantages_url" href="<?= $arItem['PROPERTIES']['URL']['VALUE'] ?>" target="_blank">Подробнее</a>
                    <? endif ?>
                </div>
            </div>
        </div>
    <? endforeach ?>
<? endif ?>
