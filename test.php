<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новая страница");
?>

<?$APPLICATION->IncludeComponent(
	"bitrix:iblock.element.add", 
	"template1", 
	array(
		"SEF_MODE" => "Y",
		"AJAX_MODE" => "Y",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "12",
		"PROPERTY_CODES" => array(
			0 => "55",
			1 => "56",
			2 => "NAME",
		),
		"PROPERTY_CODES_REQUIRED" => array(
			0 => "55",
			1 => "56",
			2 => "NAME",
		),
		"GROUPS" => array(
			0 => "2",
		),
		"STATUS" => "ANY",
		"STATUS_NEW" => "N",
		"ALLOW_EDIT" => "N",
		"ALLOW_DELETE" => "N",
		"ELEMENT_ASSOC" => "CREATED_BY",
		"NAV_ON_PAGE" => "10",
		"MAX_USER_ENTRIES" => "100000",
		"MAX_LEVELS" => "100000",
		"LEVEL_LAST" => "Y",
		"USE_CAPTCHA" => "N",
		"USER_MESSAGE_ADD" => "",
		"USER_MESSAGE_EDIT" => "",
		"DEFAULT_INPUT_SIZE" => "30",
		"RESIZE_IMAGES" => "N",
		"MAX_FILE_SIZE" => "0",
		"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
		"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
		"CUSTOM_TITLE_NAME" => "",
		"CUSTOM_TITLE_TAGS" => "",
		"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
		"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
		"CUSTOM_TITLE_IBLOCK_SECTION" => "",
		"CUSTOM_TITLE_PREVIEW_TEXT" => "",
		"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
		"CUSTOM_TITLE_DETAIL_TEXT" => "",
		"CUSTOM_TITLE_DETAIL_PICTURE" => "",
		"SEF_FOLDER" => "/",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"COMPONENT_TEMPLATE" => "template1",
		"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>