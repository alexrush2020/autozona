<?php

use AutoZona\Helper\FormHelper;

/**
 * Class VagOrderComponent
 */
class VagOrderComponent extends CBitrixComponent
{
    public function onPrepareComponentParams($arParams)
    {
        return parent::onPrepareComponentParams($arParams);
    }

    public function executeComponent()
    {
        \CModule::IncludeModule('iblock');

        $this->fillDeliveryInfo();
        $this->checkOrder();

        $this->IncludeComponentTemplate();
    }

    /**
     * Способы доставки
     */
    private function fillDeliveryInfo()
    {
        $this->arResult['DELIVERY'] = array(
            '1' => 'Почта России',
            '2' => 'Транспортна компания КИТ',
            '3' => 'Транспортная компания Деловые линии',
            '4' => 'Транспортная компания ПЭК',
            '5' => 'Транспортная компания Энергия',
            '6' => 'Самовывоз'
        );
    }

    /**
     * Оформление заказа
     */
    private function checkOrder()
    {
        $request = $this->request->getPostList()->toArray();

        $required = array(
            'NAME',
            'PHONE'
        );

        $fields = array(
            'NAME' => filter_var(trim($request['orderName']), FILTER_SANITIZE_STRING),
            'PHONE' => filter_var(trim($request['orderPhone']), FILTER_SANITIZE_STRING),
            'DELIVERY' => $this->arResult['DELIVERY'][$request['orderDelivery']] ?: '',
            'ADDRESS' => filter_var(trim($request['orderAddress']), FILTER_SANITIZE_STRING),
            'COMMENT' => filter_var(trim($request['orderComment']), FILTER_SANITIZE_STRING)
        );

        if ($this->request->isPost() && $request['send'] === 'Y') {
            if (empty($_SESSION['basket'])) {
                LocalRedirect('/basket/');
            }

            if (FormHelper::isRequiredFieldsFilled($fields, $required)) {
                $el = new \CIBlockElement();
                $env = \Quetzal\Environment\EnvironmentManager::getInstance();

                $property = $fields;
                unset($property['PHONE']);
                $property['ITEMS'] = array_keys($_SESSION['basket']);
                $property['SUM'] = $this->getOrderSum();

                $arFields = array(
                    'DATE_ACTIVE_FROM' => ConvertTimeStamp(false, 'FULL'),
                    'CODE' => md5($this->randString(6)),
                    'IBLOCK_ID' => $env->get('ordersIBlockId'),
                    'NAME' => $fields['PHONE'],
                    'PROPERTY_VALUES' => $property,
                    'PREVIEW_TEXT' => $this->getFormattedOrder()
                );

                if ($id = $el->Add($arFields)) {
                    $arSendFields = $fields;
                    $arSendFields['SUM'] = $property['SUM'];
                    $arSendFields['ORDER'] = $arFields['PREVIEW_TEXT'];
                    $arSendFields['URL'] = sprintf('/basket/success.php?id=%s&token=%s', $id, $arFields['CODE']);

                    \CEvent::Send('VAG_NEW_ORDER', 's1', $arSendFields);
                    unset($_SESSION['basket']);

                    LocalRedirect($arSendFields['URL']);
                } else {
                    $this->arResult['ERROR'] = sprintf('Ошибка: %s', $el->LAST_ERROR);
                }
            } else {
                $this->arResult['ERROR'] = 'Не заполены обязательные поля';
            }
        }
    }

    /**
     * Получает конечную сумму заказа без учета доставки
     *
     * @return float|int
     */
    private function getOrderSum()
    {
        $total = 0;
        if (!empty($_SESSION['basket'])) {
            foreach ($_SESSION['basket'] as $arBasketItem) {
                $total += $arBasketItem['quantity'] * $arBasketItem['price'];
            }
        }

        return $total;
    }

    /**
     * Формирует список товаров с указанием количества
     *
     * @return string
     */
    private function getFormattedOrder()
    {
        $total = 0;
        $content = "Состав заказа: \n";
        if (!empty($_SESSION['basket'])) {
            foreach ($_SESSION['basket'] as $arBasketItem) {
                $sum = $arBasketItem['quantity'] * $arBasketItem['price'];
                $total += $sum;
                $content .= sprintf(
                    '%s (%s шт. по %s руб.) - %s руб. %s',
                    $arBasketItem['name'],
                    $arBasketItem['quantity'],
                    number_format($arBasketItem['price'], 0, '.', ' '),
                    number_format($sum, 0, '.', ' '),
                    "\n"
                );
            }
        }

        $content .= sprintf(
            'Итого: %s%s',
            number_format($total, 0, '.', ' '),
            "\n"
        );

        return $content;
    }
}
