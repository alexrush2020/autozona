<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

foreach ($arResult as $arItem) {
    if ($arParams['MAX_LEVEL'] == 1 && $arItem['DEPTH_LEVEL'] > 1) {
        continue;
    }

    $customClasses = '';

    echo sprintf(
        '<li class="menu-item menu-item-type-custom menu-item-object-custom %s"><a href="%s" class="js-scroll">%s</a></li>',
        $customClasses,
        $arItem['LINK'],
        $arItem['TEXT']
    );
}

?>
<?/*
<li id="menu-item-131"
    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-131 dropdown">
    <a title="Наши услуги" target="_blank" data-toggle="dropdown" class="dropdown-toggle">Каталог<span class="caret"></span></a>
    <ul role="menu" class=" dropdown-menu">
        <li id="menu-item-132"
            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-132"><a
                title="Пункт меню" href="http://click5.ru/nopage/" target="_blank">Пункт
                меню</a></li>
        <li id="menu-item-133"
            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-133"><a
                title="Пункт меню" href="http://click5.ru/nopage/" target="_blank">Пункт
                меню</a></li>
    </ul>
</li>
*/?>
