<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
} ?>
<? if (count($arResult['ITEMS']) > 0): ?>
    <div id="f_reviews_slider">
        <? foreach ($arResult['ITEMS'] as $arItem): ?>
            <div id="<?= $arItem['editAreaId'] ?>" class="item">
                <div class="f_reviews_zv frz<?= intval($arItem['PROPERTIES']['RATE']['VALUE']) < 5 ? intval($arItem['PROPERTIES']['RATE']['VALUE']) : 5 ?>"></div>
                <div class="f_reviews_text">
                    <p>
                        <?= $arItem['PREVIEW_TEXT'] ?>
                    </p>
                </div>
                <? if (!empty($arItem['PROPERTIES']['LINK']['VALUE'])): ?>
                    <a rel="nofollow" class="news_more" href="<?= $arItem['PROPERTIES']['LINK']['VALUE'] ?>" target="_blank">Подробнее</a>
                <? endif ?>
                <div class="f_reviews_title"><?= $arItem['NAME'] ?></div>
            </div>
        <? endforeach ?>
    </div>
<? endif ?>
