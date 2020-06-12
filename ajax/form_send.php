<?require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");?>
<?
$arMailFields = array(
    'NAME'=> $_POST['PROPERTY[NAME][0]'],
    'PHONE'=> $_POST['PROPERTY[55][0]'],
    'EMAIL'=> $_POST['PROPERTY[57][0]'],
);
$ind = CEvent::Send('IBLOCK_FORM_SUBMIT', 's1', $arMailFields);

CModule::IncludeModule('iblock');
$el = new CIBlockElement;

$PROP = array();
$PROP[NAME] = $_POST["PROPERTY[NAME][0]"]; //электронная почта
$PROP[55] = $_POST["PROPERTY[55][0]"]; //электронная почта
$PROP[57] = $_POST["PROPERTY[57][0]"]; //электронная почта

$arLoadProductArray = Array(
    "IBLOCK_ID"      => 12,
    "PROPERTY_VALUES"=> $PROP,
    "NAME"           => "Отправить заявку",
    "ACTIVE"         => "Y"
);

$el->Add($arLoadProductArray);
?>
