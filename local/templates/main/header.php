<?
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;
use Quetzal\Environment\EnvironmentManager;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

Loc::loadMessages(__FILE__);

$asset = Asset::getInstance();
$env = EnvironmentManager::getInstance();

$curPage = $APPLICATION->GetCurPage();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui"/>
    <meta name="format-detection" content="telephone=no"/>
    <?
    $APPLICATION->SetPageProperty('og:url', 'http://' . SITE_SERVER_NAME . '/');
    //$APPLICATION->SetPageProperty('og:image', 'http://' . SITE_SERVER_NAME . SITE_TEMPLATE_PATH . '/images/logo.png');
    $APPLICATION->ShowMeta('robots');
    $APPLICATION->ShowMeta('keywords');
    $APPLICATION->ShowMeta('description');

    $APPLICATION->ShowMeta('og:url');
    $APPLICATION->ShowMeta('og:title');
    $APPLICATION->ShowMeta('og:image');
    $APPLICATION->ShowMeta('og:description');
    ?>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,700,700i,900&subset=cyrillic" rel="stylesheet">
    <?
    $asset->addCss(sprintf('%s/css/animate.css', SITE_TEMPLATE_PATH));
    $asset->addCss(sprintf('%s/css/bootstrap.min.css', SITE_TEMPLATE_PATH));
    $asset->addCss(sprintf('%s/css/jquery.fancybox-1.3.8.min.css', SITE_TEMPLATE_PATH));
    $asset->addCss(sprintf('%s/css/style.css', SITE_TEMPLATE_PATH));

    $asset->addJs(sprintf('%s/js/jquery-2.1.4.min.js', SITE_TEMPLATE_PATH));
    $asset->addJs(sprintf('%s/js/bootstrap.min.js', SITE_TEMPLATE_PATH));
    $asset->addJs(sprintf('%s/js/jquery.bxslider.min.js', SITE_TEMPLATE_PATH));
    $asset->addJs(sprintf('%s/js/jquery.easing.min.js', SITE_TEMPLATE_PATH));
    $asset->addJs(sprintf('%s/js/jquery.fancybox-1.3.8.min.js', SITE_TEMPLATE_PATH));
    $asset->addJs(sprintf('%s/js/jquery.mousewheel.min.js', SITE_TEMPLATE_PATH));
    $asset->addJs(sprintf('%s/js/jquery-migrate.min.js', SITE_TEMPLATE_PATH));
    $asset->addJs(sprintf('%s/js/wow.min.js', SITE_TEMPLATE_PATH));
    $asset->addJs(sprintf('%s/js/jquery.validate.js', SITE_TEMPLATE_PATH));
    $asset->addJs(sprintf('%s/js/jquery.maskedinput.js', SITE_TEMPLATE_PATH));
    $asset->addJs(sprintf('%s/js/main.js', SITE_TEMPLATE_PATH));
    ?>
    <?
    $APPLICATION->ShowCSS();
    $APPLICATION->ShowHeadStrings();
    $APPLICATION->ShowHeadScripts();
    ?>

    <script>new WOW().init();</script>
</head>
<body>
<?$APPLICATION->ShowPanel()?>
<div id="top" class="header_bg <? if ($curPage != '/'): ?>__inner<? endif ?>" style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/images/bg.jpg);">
    <div class="container header wow bounceInDown" style="visibility: visible; animation-name: bounceInDown;">
        <div class="row">
            <div class="header_position_1 col-md-2">
                <a class="logo" href="/"></a>
            </div>
            <div class="header_position_4 col-md-2">
                <table>
                    <tbody>
                    <tr>
                        <td>
                            <img class="alignnone size-full wp-image-115" src="<?= SITE_TEMPLATE_PATH ?>/images/email-1.png" alt="" width="15" height="10"></td>
                        <td>
                            <? $APPLICATION->IncludeFile('/local/include/main/header_email.php'); ?>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <nav class="navbar navbar-default bounceInDown wow col-md-8"
                 style="visibility: visible; animation-name: bounceInDown;">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="header_nav navbar-collapse collapse" id="bs-example-navbar-collapse-1">
                    <div class="menu-header">
                        <ul id="menu-verhnee-menyu" class="menu nav navbar-nav">
                            <?
                            $APPLICATION->IncludeComponent('bitrix:menu', 'top', array(
                                'ALLOW_MULTI_SELECT' => 'N',    // Allow several menu items to be highlighted as active
                                'CHILD_MENU_TYPE' => 'left',    // Menu type for child levels
                                'COMPONENT_TEMPLATE' => '.default',
                                'DELAY' => 'N',    // Delay building of menu template
                                'MAX_LEVEL' => '2',    // Menu depth level
                                'MENU_CACHE_GET_VARS' => '',    // Important query variables
                                'MENU_CACHE_TIME' => '3600',    // Cache time (sec.)
                                'MENU_CACHE_TYPE' => 'A',    // Cache type
                                'MENU_CACHE_USE_GROUPS' => 'N',    // Respect Access Permissions
                                'ROOT_MENU_TYPE' => 'top',    // Menu type for root level
                                'USE_EXT' => 'N',    // Use files .menu-type.menu_ext.php for menus
                            ),
                                false
                            ); ?>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="clear"></div>
            <? if ($curPage == '/'): ?>
                <div class="header_slide_text">
                    <? $APPLICATION->IncludeFile('/local/include/main/header_title.php'); ?>
                </div>
                <? $APPLICATION->IncludeFile('/local/include/main/header_form.php'); ?>
            <? endif ?>
        </div>
    </div>
</div>
<div class="clear"></div>
<? if ($curPage != '/'): ?>
    <div class="inner-page">
<? endif ?>
