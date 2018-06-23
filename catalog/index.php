<?require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php'); ?>

<div class="container">
	<div class="row">
		<div class=".col-xs-12 col-sm-3 sidebar-offcanvas" id="sidebar">
            <div class="list-group">
                <? $APPLICATION->IncludeComponent('bitrix:catalog.section.list', 'catalog',
                    array(
                        'VIEW_MODE' => 'TEXT',
                        'SHOW_PARENT_NAME' => 'Y',
                        'IBLOCK_TYPE' => 'catalog',
                        'IBLOCK_ID' => 5,
                        'SECTION_ID' => 0,
                        'SECTION_CODE' => '',
                        'SECTION_URL' => '',
                        'COUNT_ELEMENTS' => 'Y',
                        'TOP_DEPTH' => '1',
                        'SECTION_FIELDS' => '',
                        'SECTION_USER_FIELDS' => '',
                        'ADD_SECTIONS_CHAIN' => 'Y',
                        'CACHE_TYPE' => 'A',
                        'CACHE_TIME' => '36000',
                        'CACHE_NOTES' => '',
                        'CACHE_GROUPS' => 'Y',
                        'CUR_DIR' => $APPLICATION->GetCurDir()
                    )
                ); ?>
            </div>
		</div>
		<div class="col-xs-12 col-sm-9">
            <?$APPLICATION->IncludeComponent(
                'bitrix:news',
                'catalog',
                array(
                    'IBLOCK_TYPE' => 'catalog',
                    'IBLOCK_ID' => '5',
                    'NEWS_COUNT' => '6',
                    'USE_SEARCH' => 'N',
                    'USE_RSS' => 'N',
                    'USE_RATING' => 'N',
                    'USE_CATEGORIES' => 'N',
                    'USE_REVIEW' => 'N',
                    'USE_FILTER' => 'N',
                    'SORT_BY1' => 'ID',
                    'SORT_ORDER1' => 'DESC',
                    'SORT_BY2' => 'SORT',
                    'SORT_ORDER2' => 'ASC',
                    'CHECK_DATES' => 'Y',
                    'TEMPLATE_THEME' => 'blue',
                    'SEF_MODE' => 'Y',
                    'SEF_FOLDER' => '/catalog/',
                    'AJAX_MODE' => 'N',
                    'AJAX_OPTION_JUMP' => 'N',
                    'AJAX_OPTION_STYLE' => 'Y',
                    'AJAX_OPTION_HISTORY' => 'N',
                    'AJAX_OPTION_ADDITIONAL' => '',
                    'CACHE_TYPE' => 'A',
                    'CACHE_TIME' => '36000000',
                    'CACHE_FILTER' => 'N',
                    'CACHE_GROUPS' => 'Y',
                    'SET_LAST_MODIFIED' => 'N',
                    'SET_TITLE' => 'Y',
                    'INCLUDE_IBLOCK_INTO_CHAIN' => 'Y',
                    'ADD_SECTIONS_CHAIN' => 'Y',
                    'ADD_ELEMENT_CHAIN' => 'Y',
                    'USE_PERMISSIONS' => 'N',
                    'STRICT_SECTION_CHECK' => 'Y',
                    'DISPLAY_DATE' => 'Y',
                    'DISPLAY_PICTURE' => 'Y',
                    'DISPLAY_PREVIEW_TEXT' => 'Y',
                    'USE_SHARE' => 'N',
                    'MEDIA_PROPERTY' => '',
                    'SLIDER_PROPERTY' => '',
                    'PREVIEW_TRUNCATE_LEN' => '',
                    'LIST_ACTIVE_DATE_FORMAT' => 'd.m.Y',
                    'LIST_FIELD_CODE' => array(
                        0 => 'NAME',
                        1 => 'PREVIEW_PICTURE',
                        2 => 'DATE_CREATE',
                        3 => '',
                    ),
                    'LIST_PROPERTY_CODE' => array(
                        0 => '',
                        1 => 'PRICE',
                    ),
                    'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
                    'DISPLAY_NAME' => 'Y',
                    'META_KEYWORDS' => '-',
                    'META_DESCRIPTION' => '-',
                    'BROWSER_TITLE' => '-',
                    'DETAIL_SET_CANONICAL_URL' => 'N',
                    'DETAIL_ACTIVE_DATE_FORMAT' => 'd.m.Y',
                    'DETAIL_FIELD_CODE' => array(
                        0 => 'PREVIEW_PICTURE',
                        1 => '',
                    ),
                    'DETAIL_PROPERTY_CODE' => array(
                        0 => 'PHOTOS',
                        1 => '',
                    ),
                    'DETAIL_DISPLAY_TOP_PAGER' => 'N',
                    'DETAIL_DISPLAY_BOTTOM_PAGER' => 'Y',
                    'DETAIL_PAGER_TITLE' => 'Страница',
                    'DETAIL_PAGER_TEMPLATE' => '',
                    'DETAIL_PAGER_SHOW_ALL' => 'Y',
                    'PAGER_TEMPLATE' => 'grid',
                    'DISPLAY_TOP_PAGER' => 'N',
                    'DISPLAY_BOTTOM_PAGER' => 'Y',
                    'PAGER_TITLE' => 'Новости',
                    'PAGER_SHOW_ALWAYS' => 'N',
                    'PAGER_DESC_NUMBERING' => 'N',
                    'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
                    'PAGER_SHOW_ALL' => 'N',
                    'PAGER_BASE_LINK_ENABLE' => 'N',
                    'SET_STATUS_404' => 'N',
                    'SHOW_404' => 'N',
                    'MESSAGE_404' => '',
                    'SEF_URL_TEMPLATES' => array(
                        'news' => '',
                        'section' => '#SECTION_ID#/',
                        'detail' => '#SECTION_ID#/#ELEMENT_ID#/',
                    )
                ),
                false
            );?>
		</div>
	</div>
</div>

<?require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');?>
