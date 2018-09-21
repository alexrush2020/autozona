<?
define('STOP_STATISTICS', true);
define('NO_AGENT_CHECK', true);

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

echo json_encode($result);
