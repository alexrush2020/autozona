<?php

/**
 * Class VagOrderSuccessComponent
 */
class VagOrderSuccessComponent extends CBitrixComponent
{
    public function onPrepareComponentParams($arParams)
    {
        return parent::onPrepareComponentParams($arParams);
    }

    public function executeComponent()
    {
        \CModule::IncludeModule('iblock');

        $this->getOrder();

        $this->IncludeComponentTemplate();
    }

    /**
     * Получение заказа
     */
    private function getOrder()
    {
        $request = $this->request->getQueryList()->toArray();
        $env = \Quetzal\Environment\EnvironmentManager::getInstance();

        $fields = array(
            'id' => filter_var($request['id'], FILTER_SANITIZE_NUMBER_INT),
            'token' => filter_var($request['token'], FILTER_SANITIZE_STRING)
        );

        if (!empty($fields['id']) && !empty($fields['token'])) {
            $rsItem = \CIBlockElement::GetList(
                array(),
                array(
                    'IBLOCK_ID' => $env->get('ordersIBlockId'),
                    'ID' => $fields['id'],
                    'CODE' => $fields['token']
                ),
                false,
                false,
                array(
                    'ID',
                    'NAME',
                    'PREVIEW_TEXT',
                    'PROPERTY_NAME',
                    'PROPERTY_DELIVERY',
                    'PROPERTY_ADDRESS',
                    'PROPERTY_COMMENT',
                    'PROPERTY_SUM'
                )
            );
            if ($arItem = $rsItem->GetNext()) {
                $this->arResult['ITEM'] = $arItem;
            }
        }
    }
}
