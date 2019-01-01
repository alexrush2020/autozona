<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Заказ успешно оформлен. Страница заказа.');
?>

    <div class="inner-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-title">Заказ успешно оформлен</div>
                    <div>
                        <? $APPLICATION->IncludeComponent('vag:vag.order.success', ''); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
