<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}
$curPage = $APPLICATION->GetCurPage();
?>
<? if ($curPage != '/'): ?>
    </div>
<? endif ?>
<footer id="contacts" class="wow bounceInUp" style="visibility: visible; animation-name: bounceInUp;">
    <div class="container">
        <div class="row">
            <div class="footer_position_1 col-md-3">
                <div class="logo"></div>
                <div class="footer__phone-header">Телефон для заказа:</div>
                <div class="footer__phone-block">
                    <span class="glyphicon glyphicon-earphone footer__phone-icon"></span>
                    <a class="footer__phone" href="+79081993021">+79081993021</a>
                </div>
            </div>
            <div class="footer_position_2 col-md-6">
                <div class="footer-menu-header">Обратная связь:</div>
                <div role="form">
                    <div class="screen-reader-response"></div>
                    <form class="js-footer-form">
                        <table>
                            <tbody>
                            <tr>
                                <td>
                                    <span class="wpcf7-form-control-wrap text-1">
                                        <input type="text"
                                            name="NAME"
                                            value="" size="40"
                                            class="wpcf7-form-control wpcf7-text form-control"
                                            placeholder="Ваше имя..."
                                            required />
                                    </span>
                                </td>
                                <td rowspan="3">
                                    <span class="wpcf7-form-control-wrap textarea-1">
                                        <textarea
                                                name="COMMENT" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"
                                                placeholder="Текст сообщения..."></textarea>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="wpcf7-form-control-wrap text-2">
                                        <input type="text" name="PHONE"
                                            value="" size="40"
                                            class="wpcf7-form-control wpcf7-text js-phone"
                                            placeholder="Номер телефона..."
                                            required />
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" value="Отправить" class="wpcf7-form-control wpcf7-submit">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="wpcf7-response-output wpcf7-display-none js-output"></div>
                    </form>
                </div>
                <style>.footer_position_2 table td {
                        padding: 0;
                        vertical-align: top;
                    }

                    .footer_position_2 table {
                        height: 160px;
                    }</style>
            </div>
            <div class="footer_position_3 col-md-3">
                <div class="footer-menu-header" style="margin-bottom: 8px">Карта сайта:</div>
                <div class="menu-verhnee-menyu-container">
                    <ul id="menu-verhnee-menyu-1" class="menu nav navbar-nav">
                        <?
                        $APPLICATION->IncludeComponent('bitrix:menu', 'bottom', array(
                            'ALLOW_MULTI_SELECT' => 'N',    // Allow several menu items to be highlighted as active
                            'CHILD_MENU_TYPE' => 'left',    // Menu type for child levels
                            'COMPONENT_TEMPLATE' => '.default',
                            'DELAY' => 'N',    // Delay building of menu template
                            'MAX_LEVEL' => '2',    // Menu depth level
                            'MENU_CACHE_GET_VARS' => '',    // Important query variables
                            'MENU_CACHE_TIME' => '3600',    // Cache time (sec.)
                            'MENU_CACHE_TYPE' => 'A',    // Cache type
                            'MENU_CACHE_USE_GROUPS' => 'N',    // Respect Access Permissions
                            'ROOT_MENU_TYPE' => 'bottom',    // Menu type for root level
                            'USE_EXT' => 'N',    // Use files .menu-type.menu_ext.php for menus
                        ),
                            false
                        ); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<span id="top-link-block" class="affix">
    <a href="#top" class="well well-sm js-scroll">
        <i class="glyphicon glyphicon-chevron-up"></i>
    </a>
</span>

<div class="alert alert-success basket-alert js-basket-alert alert-dismissible fade" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
    <strong></strong> добавлен в корзину
</div>

</body>
</html>
