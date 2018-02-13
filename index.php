<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Autozona - Автозапчасти в Таганроге');
?>

    <div class="container f_service wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;">
        <div class="row">
            <?$APPLICATION->IncludeComponent(
                'bitrix:news.list', 'header_blocks', array(
                'DISPLAY_DATE' => 'N', // Выводить дату элемента
                'DISPLAY_NAME' => 'N', // Выводить название элемента
                'DISPLAY_PICTURE' => 'N', // Выводить изображение для анонса
                'DISPLAY_PREVIEW_TEXT' => 'N', // Выводить текст анонса
                'AJAX_MODE' => 'N', // Включить режим AJAX
                'IBLOCK_TYPE' => 'content', // Тип информационного блока (используется только для проверки)
                'IBLOCK_ID' => $env->get('headerBlocksIBlockId'), // Код информационного блока
                'NEWS_COUNT' => '3', // Количество новостей на странице
                'SORT_BY1' => 'SORT', // Поле для первой сортировки новостей
                'SORT_ORDER1' => 'ASC', // Направление для первой сортировки новостей
                'SORT_BY2' => 'ID', // Поле для второй сортировки новостей
                'SORT_ORDER2' => 'ASC', // Направление для второй сортировки новостей
                'FILTER_NAME' => '', // Фильтр
                'FIELD_CODE' => array( // Поля
                    0 => 'PREVIEW_PICTURE'
                ),
                'PROPERTY_CODE' => array(
                    0 => 'URL'
                ),
                'CHECK_DATES' => 'N', // Показывать только активные на данный момент элементы
                'DETAIL_URL' => '', // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                'PREVIEW_TRUNCATE_LEN' => '', // Максимальная длина анонса для вывода (только для типа текст)
                'ACTIVE_DATE_FORMAT' => 'd.m.Y', // Формат показа даты
                'SET_TITLE' => 'N', // Устанавливать заголовок страницы
                'SET_STATUS_404' => 'N', // Устанавливать статус 404, если не найдены элемент или раздел
                'INCLUDE_IBLOCK_INTO_CHAIN' => 'N', // Включать инфоблок в цепочку навигации
                'ADD_SECTIONS_CHAIN' => 'N', // Включать раздел в цепочку навигации
                'HIDE_LINK_WHEN_NO_DETAIL' => 'N', // Скрывать ссылку, если нет детального описания
                'PARENT_SECTION' => '', // ID раздела
                'PARENT_SECTION_CODE' => '', // Код раздела
                'INCLUDE_SUBSECTIONS' => 'Y', // Показывать элементы подразделов раздела
                'CACHE_TYPE' => 'N', // Тип кеширования
                'CACHE_TIME' => '3600', // Время кеширования (сек.)
                'CACHE_FILTER' => 'N', // Кешировать при установленном фильтре
                'CACHE_GROUPS' => 'Y', // Учитывать права доступа
                'PAGER_TEMPLATE' => '.default', // Шаблон постраничной навигации
                'DISPLAY_TOP_PAGER' => 'N', // Выводить над списком
                'DISPLAY_BOTTOM_PAGER' => 'N', // Выводить под списком
                'PAGER_TITLE' => 'Новости', // Название категорий
                'PAGER_SHOW_ALWAYS' => 'N', // Выводить всегда
                'PAGER_DESC_NUMBERING' => 'N', // Использовать обратную навигацию
                'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000', // Время кеширования страниц для обратной навигации
                'PAGER_SHOW_ALL' => 'N', // Показывать ссылку 'Все'
                'AJAX_OPTION_JUMP' => 'N', // Включить прокрутку к началу компонента
                'AJAX_OPTION_STYLE' => 'Y', // Включить подгрузку стилей
                'AJAX_OPTION_HISTORY' => 'N', // Включить эмуляцию навигации браузера
                ),
                false
            );?>
            <div class="clear"></div>
        </div>
    </div>
    <div class="container f_advantages wow bounceInUp" style="visibility: visible; animation-name: bounceInUp;">
        <div class="row">
            <div class="f_advantages_top_title">Мы предлагаем:</div>

            <?$APPLICATION->IncludeComponent(
                'bitrix:news.list', 'we_offer', array(
                'DISPLAY_DATE' => 'N', // Выводить дату элемента
                'DISPLAY_NAME' => 'N', // Выводить название элемента
                'DISPLAY_PICTURE' => 'N', // Выводить изображение для анонса
                'DISPLAY_PREVIEW_TEXT' => 'N', // Выводить текст анонса
                'AJAX_MODE' => 'N', // Включить режим AJAX
                'IBLOCK_TYPE' => 'content', // Тип информационного блока (используется только для проверки)
                'IBLOCK_ID' => $env->get('weOfferIBlockId'), // Код информационного блока
                'NEWS_COUNT' => '10', // Количество новостей на странице
                'SORT_BY1' => 'SORT', // Поле для первой сортировки новостей
                'SORT_ORDER1' => 'ASC', // Направление для первой сортировки новостей
                'SORT_BY2' => 'ID', // Поле для второй сортировки новостей
                'SORT_ORDER2' => 'ASC', // Направление для второй сортировки новостей
                'FILTER_NAME' => '', // Фильтр
                'FIELD_CODE' => array( // Поля
                    0 => 'PREVIEW_PICTURE',
                    1 => 'PREVIEW_TEXT'
                ),
                'PROPERTY_CODE' => array(
                    0 => 'URL'
                ),
                'CHECK_DATES' => 'N', // Показывать только активные на данный момент элементы
                'DETAIL_URL' => '', // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                'PREVIEW_TRUNCATE_LEN' => '', // Максимальная длина анонса для вывода (только для типа текст)
                'ACTIVE_DATE_FORMAT' => 'd.m.Y', // Формат показа даты
                'SET_TITLE' => 'N', // Устанавливать заголовок страницы
                'SET_STATUS_404' => 'N', // Устанавливать статус 404, если не найдены элемент или раздел
                'INCLUDE_IBLOCK_INTO_CHAIN' => 'N', // Включать инфоблок в цепочку навигации
                'ADD_SECTIONS_CHAIN' => 'N', // Включать раздел в цепочку навигации
                'HIDE_LINK_WHEN_NO_DETAIL' => 'N', // Скрывать ссылку, если нет детального описания
                'PARENT_SECTION' => '', // ID раздела
                'PARENT_SECTION_CODE' => '', // Код раздела
                'INCLUDE_SUBSECTIONS' => 'Y', // Показывать элементы подразделов раздела
                'CACHE_TYPE' => 'N', // Тип кеширования
                'CACHE_TIME' => '3600', // Время кеширования (сек.)
                'CACHE_FILTER' => 'N', // Кешировать при установленном фильтре
                'CACHE_GROUPS' => 'Y', // Учитывать права доступа
                'PAGER_TEMPLATE' => '.default', // Шаблон постраничной навигации
                'DISPLAY_TOP_PAGER' => 'N', // Выводить над списком
                'DISPLAY_BOTTOM_PAGER' => 'N', // Выводить под списком
                'PAGER_TITLE' => 'Новости', // Название категорий
                'PAGER_SHOW_ALWAYS' => 'N', // Выводить всегда
                'PAGER_DESC_NUMBERING' => 'N', // Использовать обратную навигацию
                'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000', // Время кеширования страниц для обратной навигации
                'PAGER_SHOW_ALL' => 'N', // Показывать ссылку 'Все'
                'AJAX_OPTION_JUMP' => 'N', // Включить прокрутку к началу компонента
                'AJAX_OPTION_STYLE' => 'Y', // Включить подгрузку стилей
                'AJAX_OPTION_HISTORY' => 'N', // Включить эмуляцию навигации браузера
                ),
                false
            );?>
        </div>
    </div>
    <div class="f_about">
        <div class="col-md-7 f_about_bg_left wow bounceInLeft"></div>
        <div class="col-md-9 f_about_bg_right wow bounceInRight"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-5 f_about_left wow bounceInLeft"></div>
                <div class="col-md-7 f_about_right wow bounceInRight">
                    <div class="about_title">О компании</div>
                    <div class="about_content">
                        <? $APPLICATION->IncludeFile('/local/include/main/about.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="f_reviews wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="f_reviews_block_title">Отзывы</div>

                    <?$APPLICATION->IncludeComponent(
                        'bitrix:news.list', 'reviews', array(
                        'DISPLAY_DATE' => 'N', // Выводить дату элемента
                        'DISPLAY_NAME' => 'N', // Выводить название элемента
                        'DISPLAY_PICTURE' => 'N', // Выводить изображение для анонса
                        'DISPLAY_PREVIEW_TEXT' => 'N', // Выводить текст анонса
                        'AJAX_MODE' => 'N', // Включить режим AJAX
                        'IBLOCK_TYPE' => 'content', // Тип информационного блока (используется только для проверки)
                        'IBLOCK_ID' => $env->get('reviewsIBlockId'), // Код информационного блока
                        'NEWS_COUNT' => '10', // Количество новостей на странице
                        'SORT_BY1' => 'SORT', // Поле для первой сортировки новостей
                        'SORT_ORDER1' => 'ASC', // Направление для первой сортировки новостей
                        'SORT_BY2' => 'ID', // Поле для второй сортировки новостей
                        'SORT_ORDER2' => 'ASC', // Направление для второй сортировки новостей
                        'FILTER_NAME' => '', // Фильтр
                        'FIELD_CODE' => array( // Поля
                            0 => 'PREVIEW_TEXT',
                        ),
                        'PROPERTY_CODE' => array(
                            0 => 'LINK'
                        ),
                        'CHECK_DATES' => 'N', // Показывать только активные на данный момент элементы
                        'DETAIL_URL' => '', // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                        'PREVIEW_TRUNCATE_LEN' => '', // Максимальная длина анонса для вывода (только для типа текст)
                        'ACTIVE_DATE_FORMAT' => 'd.m.Y', // Формат показа даты
                        'SET_TITLE' => 'N', // Устанавливать заголовок страницы
                        'SET_STATUS_404' => 'N', // Устанавливать статус 404, если не найдены элемент или раздел
                        'INCLUDE_IBLOCK_INTO_CHAIN' => 'N', // Включать инфоблок в цепочку навигации
                        'ADD_SECTIONS_CHAIN' => 'N', // Включать раздел в цепочку навигации
                        'HIDE_LINK_WHEN_NO_DETAIL' => 'N', // Скрывать ссылку, если нет детального описания
                        'PARENT_SECTION' => '', // ID раздела
                        'PARENT_SECTION_CODE' => '', // Код раздела
                        'INCLUDE_SUBSECTIONS' => 'Y', // Показывать элементы подразделов раздела
                        'CACHE_TYPE' => 'N', // Тип кеширования
                        'CACHE_TIME' => '3600', // Время кеширования (сек.)
                        'CACHE_FILTER' => 'N', // Кешировать при установленном фильтре
                        'CACHE_GROUPS' => 'Y', // Учитывать права доступа
                        'PAGER_TEMPLATE' => '.default', // Шаблон постраничной навигации
                        'DISPLAY_TOP_PAGER' => 'N', // Выводить над списком
                        'DISPLAY_BOTTOM_PAGER' => 'N', // Выводить под списком
                        'PAGER_TITLE' => 'Новости', // Название категорий
                        'PAGER_SHOW_ALWAYS' => 'N', // Выводить всегда
                        'PAGER_DESC_NUMBERING' => 'N', // Использовать обратную навигацию
                        'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000', // Время кеширования страниц для обратной навигации
                        'PAGER_SHOW_ALL' => 'N', // Показывать ссылку 'Все'
                        'AJAX_OPTION_JUMP' => 'N', // Включить прокрутку к началу компонента
                        'AJAX_OPTION_STYLE' => 'Y', // Включить подгрузку стилей
                        'AJAX_OPTION_HISTORY' => 'N', // Включить эмуляцию навигации браузера
                        ),
                        false
                    );?>
                </div>
                <div class="col-md-4">
                    <div class="rew_adv">
                        <div class="rew_adv_ico">
                            <div style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/images/rew_adv_1.png)"></div>
                        </div>
                        <div class="rew_adv_txt"><p>Быстро</p></div>
                    </div>
                    <div class="rew_adv">
                        <div class="rew_adv_ico">
                            <div style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/images/rew_adv_2.png)"></div>
                        </div>
                        <div class="rew_adv_txt"><p>Недорого</p></div>
                    </div>
                    <div class="rew_adv">
                        <div class="rew_adv_ico">
                            <div style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/images/rew_adv_3.png)"></div>
                        </div>
                        <div class="rew_adv_txt"><p>Хорошие отзывы</p></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="clear"></div>

<? require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
