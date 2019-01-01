<? if (!empty($arResult['ITEM'])): ?>
    <? dump($arResult['ITEM']); ?>
<? else: ?>
    <div class="order-error">
        Не удалось найти заказ
    </div>
<? endif ?>
