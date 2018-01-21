<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}

IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html>
<head>
	<?$APPLICATION->ShowHead()?>
	<title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
	<?$APPLICATION->ShowPanel()?>
