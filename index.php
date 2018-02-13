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
        <div class="col-md-7 f_about_bg_left wow bounceInLeft" style="height: 392px; visibility: visible; animation-name: bounceInLeft;"></div>
        <div class="col-md-9 f_about_bg_right wow bounceInRight" style="height: 392px; visibility: visible; animation-name: bounceInRight;"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-5 f_about_left wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;"></div>
                <div class="col-md-7 f_about_right wow bounceInRight" style="height: 392px; visibility: visible; animation-name: bounceInRight;">
                    <div class="about_title">О компании</div>
                    <div class="about_content">
                        <? $APPLICATION->IncludeFile('/local/include/main/about.php'); ?>
                    </div>
                </div>
            </div>
        </div>
        <style>.f_about_bg_left {
                background: url(http://demo.click5.ru/dogovor/546228-11/images/image.jpg)
            }</style>
        <style>.f_about_bg_right {
                background: -moz-linear-gradient(left, rgba(251, 251, 251, 0) 0%, rgba(251, 251, 251, 1) 20%, rgba(251, 251, 251, 1) 100%);
                background: -webkit-linear-gradient(left, rgba(251, 251, 251, 0) 0%, rgba(251, 251, 251, 1) 20%, rgba(251, 251, 251, 1) 100%);
                background: linear-gradient(to right, rgba(251, 251, 251, 0) 0%, rgba(251, 251, 251, 1) 20%, rgba(251, 251, 251, 1) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00fbfbfb', endColorstr='#fbfbfb', GradientType=1);
            }</style>
    </div>

    <div class="f_reviews wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="f_reviews_block_title">ОТЗЫВЫ</div>
                    <div class="bx-wrapper" style="max-width: 100%;">
                        <div class="bx-viewport" aria-live="polite"
                             style="width: 100%; overflow: hidden; position: relative; height: 200px;">
                            <div id="f_reviews_slider" style="width: auto; position: relative;">
                                <div class="item" aria-hidden="false"
                                     style="float: none; list-style: none; position: absolute; width: 510px; z-index: 50; display: block;">
                                    <div class="f_reviews_zv frz4"></div>
                                    <div class="f_reviews_text"><p>Очень довольна работой. Спасибо большое! Все четко,
                                            организованно и качественно. Теперь мы довольные и счастливые!!</p>
                                    </div>
                                    <div class="f_reviews_title">Арбузова Светлана</div>
                                </div>
                                <div class="item" aria-hidden="true"
                                     style="float: none; list-style: none; position: absolute; width: 510px; z-index: 0; display: none;">
                                    <div class="f_reviews_zv frz5"></div>
                                    <div class="f_reviews_text"><p>Очень довольна работой. Спасибо большое! Все четко,
                                            организованно и качественно. Теперь мы довольные и счастливые!!</p>
                                    </div>
                                    <a class="news_more" href="http://click5.ru/nopage/" target="_blank">Подробнее</a>
                                    <div class="f_reviews_title">Арбузова Наташа</div>
                                </div>
                            </div>
                        </div>
                        <div class="bx-controls bx-has-controls-direction">
                            <div class="bx-controls-direction">
                                <a class="bx-prev" href="javascript:void(0);"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                <a class="bx-next" href="javascript:void(0);"><span class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rew_adv">
                        <div class="rew_adv_ico">
                            <div style="background-image:url(http://demo.click5.ru/templates/39/wp-content/themes/1404_18/img/rew_adv_1.png)"></div>
                        </div>
                        <div class="rew_adv_txt"><p>Быстро</p></div>
                    </div>
                    <div class="rew_adv">
                        <div class="rew_adv_ico">
                            <div style="background-image:url(http://demo.click5.ru/templates/39/wp-content/themes/1404_18/img/rew_adv_2.png)"></div>
                        </div>
                        <div class="rew_adv_txt"><p>Недорого</p></div>
                    </div>
                    <div class="rew_adv">
                        <div class="rew_adv_ico">
                            <div style="background-image:url(http://demo.click5.ru/templates/39/wp-content/themes/1404_18/img/rew_adv_3.png)"></div>
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
