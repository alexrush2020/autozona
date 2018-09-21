<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Оформление заказа');
?>

<div class="inner-title">Оформление заказа</div>
<div class="inner-text">
    <? dump($_SESSION['basket']) ?>
</div>

<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
