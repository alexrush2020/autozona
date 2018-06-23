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

<? foreach ($arResult['SECTIONS'] as $arItem): ?>
    <a href="<?= $arItem['SECTION_PAGE_URL'] ?>" class="list-group-item <? if ($arItem['SELECTED']): ?>active<? endif ?>"><?= $arItem['NAME'] ?></a>
<? endforeach ?>
