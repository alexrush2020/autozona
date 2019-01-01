<? if (!empty($_SESSION['basket'])): ?>
    <form class="js-order-form" action="/basket/" method="POST">
        <input type="hidden" name="send" value="Y"/>
        <div class="form-group">
            <label for="orderName">ФИО</label>
            <input type="text" class="form-control" name="orderName" id="orderName" required placeholder="Введите имя">
        </div>
        <div class="form-group">
            <label for="orderPhone">Телефон</label>
            <input type="text" class="form-control js-phone" name="orderPhone" id="orderPhone" required
                   placeholder="Введите телефон">
        </div>
        <div class="form-group">
            <label for="orderDelivery">Способ доставки</label>
            <select type="text" class="form-control" name="orderDelivery" id="orderDelivery">
                <option value="0">Выберите способ доставки</option>
                <? foreach ($arResult['DELIVERY'] as $key => $value): ?>
                    <option value="<?= $key ?>"><?= $value ?></option>
                <? endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="orderAddress">Адрес (индекс, страна, город, улица, дом, квартира)</label>
            <textarea class="form-control order-resize" rows="3" name="orderAddress" id="orderAddress"
                      placeholder="Введите адрес доставки"></textarea>
        </div>
        <div class="form-group">
            <label for="orderComment">Комментарий</label>
            <textarea class="form-control order-resize" rows="3" name="orderComment" id="orderComment"
                      placeholder="Текст сообщения"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Отправить</button>
    </form>
<? elseif (!empty($arResult['ERROR'])): ?>
    <div class="order-error">
        <?= $arResult['ERROR'] ?>
    </div>
<? endif ?>

