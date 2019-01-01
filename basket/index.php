<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Оформление заказа');
?>

<div class="inner-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-title">Оформление заказа</div>
                <div class="js-basket-container">
                    <? $APPLICATION->IncludeComponent('vag:vag.basket', ''); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="js-order-container">
                    <? $APPLICATION->IncludeComponent('vag:vag.order', ''); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
