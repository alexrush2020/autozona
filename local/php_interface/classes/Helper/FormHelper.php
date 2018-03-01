<?php

namespace AutoZona\Helper;

/**
 * Хелпер для различных операций с формами и передаваемыми от них данными
 *
 * Class FormHelper
 *
 * @package AutoZona\Helpers
 */
class FormHelper
{
    /**
     * Проверяет, что в данных формы заполнены все обязательные поля
     *
     * @param array $data           Данные формы в виде ассоциативного массива
     * @param array $requiredFields Список ключей обязательных полей
     *
     * @return bool
     */
    public static function isRequiredFieldsFilled(array $data, array $requiredFields)
    {
        foreach ($requiredFields as $field) {
            if (!isset($data[$field]) || empty($data[$field])) {
                return false;
            }
        }
        
        return true;
    }
}
