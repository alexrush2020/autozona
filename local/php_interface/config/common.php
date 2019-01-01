<?php
/**
 * Общая конфигурация для всех сайтов и окружений
 */
\Quetzal\Environment\EnvironmentManager::getInstance()->addConfig(
	new \Quetzal\Environment\Configuration\CommonConfiguration(
		array(
			// 'key' => 'value',
            'headerBlocksIBlockId' => 1,
            'weOfferIBlockId' => 2,
            'reviewsIBlockId' => 3,
            'requestsIBlockId' => 4,
            'catalogIBlockId' => 5,
            'ordersIBlockId' => 6
		)
	)
);
