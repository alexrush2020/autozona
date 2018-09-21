<?
define('STOP_STATISTICS', true);
define('NO_AGENT_CHECK', true);

use \AutoZona\Helper\FormHelper;
use \Quetzal\Environment\EnvironmentManager;

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

header('Content-Type: application/json');

error_reporting(0);
ini_set('display_errors', 0);

\CModule::IncludeModule('iblock');
$env = EnvironmentManager::getInstance();

$result = array(
    'success' => 0
);

$fields = array(
    'ID' => filter_var($_REQUEST['id'], FILTER_SANITIZE_NUMBER_INT)
);

if (FormHelper::isRequiredFieldsFilled($fields, array('ID'))) {
    $rsItem = \CIBlockElement::GetList(
        array(),
        array(
            'IBLOCK_ID' => EnvironmentManager::getInstance()->get('catalogIBlockId'),
            'ID' => $fields['ID']
        ),
        false,
        false,
        array('ID', 'NAME', 'PROPERTY_PRICE')
    );

    if ($arItem = $rsItem->GetNext()) {
        if (!empty($_SESSION['basket'][$arItem['ID']])) {
            $_SESSION['basket'][$arItem['ID']]['quantity'] = $_SESSION['basket'][$arItem['ID']]['quantity'] + 1;
        } else {
            $_SESSION['basket'][$arItem['ID']] = array(
                'id' => $arItem['ID'],
                'name' => $arItem['NAME'],
                'price' => $arItem['PROPERTY_PRICE_VALUE'],
                'quantity' => 1
            );
        }

        $quantity = 0;
        $total = 0;
        if (!empty($_SESSION['basket'])) {
            foreach ($_SESSION['basket'] as $arBasketItem) {
                $quantity+= $arBasketItem['quantity'];
                $total+= $arBasketItem['quantity'] * $arBasketItem['price'];
            }
        }

        $result['quantity'] = $quantity;
        $result['total'] = $total;
        $result['total_formatted'] = number_format($total, 0, '.', ' ');

        $result['item'] = $_SESSION['basket'][$arItem['ID']];

        $result['success'] = true;
    }
} else {
    $result['error'] = 'Не удалось добавить товар в корзину';
}

echo json_encode($result);
