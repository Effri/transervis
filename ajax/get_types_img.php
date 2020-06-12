<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?php
use Bitrix\Main\Application;

define('STOP_STATISTICS', true);
define('NO_KEEP_STATISTIC', 'Y');
define('NO_AGENT_STATISTIC','Y');
define('DisableEventsCheck', true);
define('BX_SECURITY_SHOW_MESSAGE', true);
define('NOT_CHECK_PERMISSIONS', true);

$context = Application::getInstance()->getContext();
$request = $context->getRequest();

if(intval($request['id']) > 0 && intval($request['key']) >= 0): ?>

<?
if(CModule::IncludeModule("iblock")) {

        $k = $request['key'];

        $arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM","PROPERTY_*");
        $arFilter = Array("IBLOCK_ID"=>$request['iblock_id'], "ACTIVE"=>"Y", "ID" => $request['id'] );
        $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
        while($ob = $res->GetNextElement()){
            $arFields = $ob->GetFields();
            $arProps = $ob->GetProperties();

            if($arProps['TYPES']['VALUE'][$k]['SUB_VALUES']['TYPES_IMG']['VALUE']) {
                $img_id = $arProps['TYPES']['VALUE'][$k]['SUB_VALUES']['TYPES_IMG']['VALUE'];
            }

        }

        if(intval($img_id) > 0) {

            $picture = $img_id;
            if($picture) {
                $arFileTmp = \CFile::ResizeImageGet(
                    $picture,
                    array('width' => 370, 'height' => 451),
                    BX_RESIZE_IMAGE_PROPORTIONAL,
                    true
                );
            }

        }
}

?>

    <? if($arFileTmp['src']): ?>
        <img src="<?=$arFileTmp['src']?>" alt="">
    <? else: ?>
        <? echo 'error'; ?>
    <? endif; ?>

<? else: ?>
    <? echo 'error'; ?>
<? endif; ?>