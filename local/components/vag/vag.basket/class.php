<?php
use \Quetzal\Environment\EnvironmentManager;

/**
 * Class VagBasketComponent
 */
class VagBasketComponent extends CBitrixComponent
{
    /**
     * @var array
     */
    private $basket;
    private $env;

    /**
     * @param $arParams
     * @return array
     */
    public function onPrepareComponentParams($arParams)
    {
        return parent::onPrepareComponentParams($arParams);
    }

    /**
     * VagBasketComponent constructor.
     * @param CBitrixComponent|null $component
     */
    public function __construct(CBitrixComponent $component = null)
    {
        parent::__construct($component);

        $this->env = EnvironmentManager::getInstance();
        $this->basket = $_SESSION['basket'];

        CModule::IncludeModule('iblock');
    }

    public function executeComponent()
    {
        try {
            $this->fillBasket();

            $this->arResult['BASKET'] = $this->basket;
            $this->arResult['TOTAL'] = $this->getTotal();

            $this->IncludeComponentTemplate();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * @throws Exception
     */
    private function fillBasket()
    {
        if (empty($this->basket)) {
            throw new \Exception('Корзина пуста');
        }

        $ids = array_keys($this->basket);

        $rsItem = CIBlockElement::GetList(
            array(),
            array(
                'IBLOCK_ID' => $this->env->get('catalogIBlockId'),
                'ID' => $ids
            ),
            false,
            false,
            array(
                'ID',
                'NAME',
                'DETAIL_PAGE_URL',
                'PREVIEW_PICTURE'
            )
        );
        while ($arItem = $rsItem->GetNext()) {
            if (!empty($arItem['PREVIEW_PICTURE'])) {
                $arItem['RESIZE_PICTURE'] = \CFile::ResizeImageGet(
                    $arItem['PREVIEW_PICTURE'],
                    array(
                        'width'  => 400,
                        'height' => 300,
                    )
                );
            }

            $this->basket[$arItem['ID']] = array_merge($this->basket[$arItem['ID']], array(
                'url' => $arItem['DETAIL_PAGE_URL'],
                'picture' => $arItem['RESIZE_PICTURE']['src'] ?: ''
            ));
        }

        foreach ($this->basket as $key => $arItem) {
            $this->basket[$key]['total'] = $arItem['price'] * $arItem['quantity'];
        }
    }

    /**
     * Получает сумму заказа
     *
     * @return int
     */
    private function getTotal()
    {
        $total = 0;

        foreach ($this->basket as $key => $arItem) {
            $total+= $arItem['total'] ?: 0;
        }

        return $total;
    }
}
