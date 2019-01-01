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
    'NAME' => filter_var($_REQUEST['NAME'], FILTER_SANITIZE_STRING),
    'PHONE' => filter_var($_REQUEST['PHONE'], FILTER_SANITIZE_STRING),
    'COMMENT' => filter_var($_REQUEST['COMMENT'], FILTER_SANITIZE_STRING),
);

if (FormHelper::isRequiredFieldsFilled($fields, array('NAME', 'PHONE'))) {
    $el = new CIBlockElement();

    $arFields = array(
        'DATE_ACTIVE_FROM' => ConvertTimeStamp(false, 'FULL'),
        'IBLOCK_ID' => $env->get('requestsIBlockId'),
        'NAME' => $fields['PHONE'],
        'PROPERTY_VALUES' => array(
            'NAME' => $fields['NAME'],
            'PHONE' => $fields['PHONE']
        ),
        'PREVIEW_TEXT' => $fields['COMMENT']
    );

    if ($id = $el->Add($arFields)) {
        \CEvent::Send('VAG_NEW_REQUEST', 's1', $fields);
        $result['success'] = 1;
    } else {
        $result['error'] = sprintf('Ошибка: %s', $el->LAST_ERROR);
    }
} else {
    $result['error'] = 'Не заполнены обязательные поля';
}

echo json_encode($result);
