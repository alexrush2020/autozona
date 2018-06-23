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
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

<div class="catalog-detail">
    <h3 class="catalog-detail__title"><?= $arResult['NAME'] ?></h3>

    <div class="catalog-detail__buy-block">
        <div class="catalog-detail__price">
            <?= $arResult['PRICE'] ?>
            <span class="rub">a</span>
        </div>

        <div class="catalog-detail__buy">
            <a data-id="<?= $arResult['ID'] ?>" class="btn btn-primary btn-success js-add-to-basket" href="javascript:void(0);">Добавить в корзину</a>
        </div>
    </div>

    <div class="catalog-detail__block" id="<?echo $this->GetEditAreaId($arResult['ID'])?>">
        <? if (!empty($arResult['PHOTOS'])): ?>
            <div id="detailCarousel" class="carousel detial-carousel slide" data-ride="carousel">
                <? if (count($arResult['PHOTOS']) > 1): ?>
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <? foreach ($arResult['PHOTOS'] as $key => $photo): ?>
                            <li data-target="#detailCarousel" data-slide-to="<?= $key ?>"
                                class="<? if ($key == 0): ?>active<? endif ?>"></li>
                        <? endforeach ?>
                    </ol>
                <? endif ?>
                <div class="carousel-inner" role="listbox">
                    <? foreach ($arResult['PHOTOS'] as $key => $photo): ?>
                        <div class="detail-photo <? if ($key == 0): ?>active<? endif ?>">
                            <a href="<?= $photo ?>" rel="detail-gallery" class="detail-photo-link js-fancybox">
                                <img src="<?= $photo ?>" alt=""/>
                            </a>
                        </div>
                    <? endforeach ?>
                </div>
                <? if (count($arResult['PHOTOS']) > 1): ?>
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                <? endif ?>
            </div>
        <? endif ?>

        <div class="catalog-detail__content">
            <? if (strlen($arResult['DETAIL_TEXT']) > 0): ?>
                <? echo $arResult['DETAIL_TEXT']; ?>
            <? else: ?>
                <? echo $arResult['PREVIEW_TEXT']; ?>
            <? endif ?>
        </div>
	</div>
</div>
