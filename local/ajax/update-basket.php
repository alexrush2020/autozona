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
    'ID' => filter_var($_REQUEST['id'], FILTER_SANITIZE_NUMBER_INT),
    'QUANTITY' => filter_var($_REQUEST['quantity'], FILTER_SANITIZE_NUMBER_INT)
);

if (FormHelper::isRequiredFieldsFilled($fields, array('ID', 'QUANTITY'))) {
    $_SESSION['basket'][$fields['ID']]['quantity'] = $fields['QUANTITY'];

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
    $result['success'] = true;
} else {
    $result['error'] = 'Не удалось обновить количество товара';
}

echo json_encode($result);
