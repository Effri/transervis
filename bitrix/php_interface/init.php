<?
// файл /bitrix/php_interface/init.php
// регистрируем обработчик
AddEventHandler("iblock", "OnAfterIBlockElementAdd", Array("MyClass", "OnAfterIBlockElementAddHandler"));

class MyClass
{

    // создаем обработчик события "OnAfterIBlockElementAdd"
    function OnAfterIBlockElementAddHandler(&$arFields)
    {
        if($arFields["IBLOCK_ID"]==12) {
            $arEventFields= array(
                "NAME" => $arFields["NAME"],
                "PHONE" => $_REQUEST["PROPERTY"]["55"]["0"],
                "EMAIL" => $_REQUEST["PROPERTY"]["57"]["0"],
                "SERVER_NAME" => $_SERVER['SERVER_NAME'],
            );
            CEvent::Send("IBLOCK_FORM_SUBMIT", 's1', $arEventFields, "N", 12);
        }
    }
}
?>