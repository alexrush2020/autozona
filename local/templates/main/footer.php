<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}
$curPage = $APPLICATION->GetCurPage();
?>
<? if ($curPage != '/'): ?>
    </div>
<? endif ?>
<footer class="wow bounceInUp" style="visibility: visible; animation-name: bounceInUp;">
    <div class="container">
        <div class="row">
            <div class="footer_position_1 col-md-3">
                <div class="logo"></div>
                <p><span style="font-size: 14pt;">Продажа автозапчастей</span></p>
                <p><span style="font-size: 14pt;">Телефон для заказа:</span></p>
                <table>
                    <tbody>
                    <tr>
                        <td><img class="alignnone size-full wp-image-129" src="<?= SITE_TEMPLATE_PATH ?>/images/telephone.png"
                                 alt="" width="14" height="19"></td>
                        <td><span style="font-size: 18pt;"><strong>+79081993021</strong></span></td>
                    </tr>
                    </tbody>
                </table>
                <style>.footer_position_1 table img {
                        margin-right: 10px;
                    }</style>
            </div>
            <div class="footer_position_2 col-md-6">
                <p><strong><span style="font-size: 18pt; color: #57a453;">Обратная связь:</span></strong></p>
                <div role="form" class="wpcf7" id="wpcf7-f130-o2" lang="ru-RU" dir="ltr">
                    <div class="screen-reader-response"></div>
                    <form action="http://demo.click5.ru/dogovor/546228-39/index.html#wpcf7-f130-o2" method="post"
                          class="wpcf7-form" novalidate="novalidate">
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="130">
                            <input type="hidden" name="_wpcf7_version" value="4.8">
                            <input type="hidden" name="_wpcf7_locale" value="ru_RU">
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f130-o2">
                            <input type="hidden" name="_wpcf7_container_post" value="0">
                            <input type="hidden" name="_wpcf7_nonce" value="a3c9c6d1b6">
                        </div>
                        <table>
                            <tbody>
                            <tr>
                                <td><span class="wpcf7-form-control-wrap text-1"><input type="text" name="text-1"
                                                                                        value="" size="40"
                                                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                        aria-required="true"
                                                                                        aria-invalid="false"
                                                                                        placeholder="Ваше имя..."></span>
                                </td>
                                <td rowspan="3"><span class="wpcf7-form-control-wrap textarea-1"><textarea
                                                name="textarea-1" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"
                                                aria-invalid="false" placeholder="Текст сообщения..."></textarea></span></td>
                            </tr>
                            <tr>
                                <td><span class="wpcf7-form-control-wrap text-2"><input type="text" name="text-2"
                                                                                        value="" size="40"
                                                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                        aria-required="true"
                                                                                        aria-invalid="false"
                                                                                        placeholder="Номер телефона..."></span>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="submit" value="Отправить" class="wpcf7-form-control wpcf7-submit"><span
                                            class="ajax-loader"></span></td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="wpcf7-response-output wpcf7-display-none"></div>
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
                <p><strong><span style="font-size: 18pt; color: #57a453;">Разделы:</span></strong></p>
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
    <a href="#top" class="well well-sm" onclick="$('html,body').animate({scrollTop:0},'slow'); return false;">
        <i class="glyphicon glyphicon-chevron-up"></i>
    </a>
</span>

</body>
</html>
