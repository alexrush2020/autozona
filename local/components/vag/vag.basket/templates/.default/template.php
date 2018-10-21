<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
?>

<table class="table basket-desktop">
    <thead>
    <tr>
        <th class="order-td__pic"></th>
        <th class="order-td__name">Наименование товара</th>
        <th class="order-td__price">Цена</th>
        <th class="order-td__quantity">Кол-во</th>
        <th class="order-td__total">Стоимость</th>
        <th class="order-td__remove">Удалить</th>
    </tr>
    </thead>
    <tbody>
    <? foreach ($arResult['BASKET'] as $key => $arItem): ?>
        <tr data-id="<?= $arItem['id'] ?>">
            <td class="order-td__pic">
                <a href="<?= $arItem['url'] ?>">
                    <img class="img-thumbnail" src="<?= $arItem['picture'] ?>" />
                </a>
            </td>
            <td class="order-td__name">
                <a href="<?= $arItem['url'] ?>"><?= $arItem['name'] ?></a>
            </td>
            <td class="order-td__price"><?= number_format($arItem['price'], 0, '.', ' ') ?> <span class="rub">a</span></td>
            <td class="order-td__quantity">
                <input class="form-control form-control-sm order__quantity js-basket-quantity"
                       type="tel"
                       data-inputmask-regex="[0-9\s]{1,2}"
                       maxlength="2"
                       value="<?= $arItem['quantity'] ?>"/>
            </td>
            <td class="order-td__total"><?= number_format($arItem['total'], 0, '.', ' ') ?> <span class="rub">a</span></td>
            <td class="order-td__remove">
                <span class="glyphicon glyphicon-remove order__remove js-basket-remove"></span>
            </td>
        </tr>
    <? endforeach ?>
    <tfoot>
        <tr>
            <td colspan="4"></td>
            <td>
                <strong>Итого:</strong>
            </td>
            <td>
                <strong><?= number_format($arResult['TOTAL'], 0, '.', ' ') ?> <span class="rub">a</span></strong>
            </td>
        </tr>
    </tfoot>
    </tbody>
</table>

<table class="table basket-mobile">
    <tbody>
    <? foreach ($arResult['BASKET'] as $key => $arItem): ?>
        <tr data-id="<?= $arItem['id'] ?>">
            <td class="order-td__pic">
                <a href="<?= $arItem['url'] ?>">
                    <img class="img-thumbnail" src="<?= $arItem['picture'] ?>" />
                </a>
            </td>
            <td>
                <div class="order__prop-block"><a href="<?= $arItem['url'] ?>"><?= $arItem['name'] ?></a></div>
                <div class="order__prop-block">Цена: <?= number_format($arItem['price'], 0, '.', ' ') ?> <span class="rub">a</span></div>
                <div class="order__prop-block">Кол-во: <input class="form-control form-control-sm order__quantity js-basket-quantity"
                                    type="tel"
                                    data-inputmask-regex="[0-9\s]{1,2}"
                                    maxlength="2"
                                    value="<?= $arItem['quantity'] ?>"/></div>
                <div class="order__prop-block bold">Стоимость: <?= number_format($arItem['total'], 0, '.', ' ') ?> <span class="rub">a</span></div>
            </td>
            <td class="order-td__remove">
                <span class="glyphicon glyphicon-remove order__remove js-basket-remove"></span>
            </td>
        </tr>
    <? endforeach ?>
    <tfoot>
    <tr>
        <td colspan="3" style="text-align: right">
            <strong>Итого: <?= number_format($arResult['TOTAL'], 0, '.', ' ') ?> <span class="rub">a</span></strong>
        </td>
    </tr>
    </tfoot>
    </tbody>
</table>
