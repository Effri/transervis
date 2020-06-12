<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Application;
use Bitrix\Main\Engine\Contract\Controllerable;
use Bitrix\Main\Engine\ActionFilter;
use Bitrix\Main\Page\Asset;
use \Bitrix\Main\Loader;

class CProfitkitHistoryLine extends CBitrixComponent {

    public function executeComponent()
    {

        if (!$this->arParams['IBLOCK_ID']) {
            return;
        }

        Asset::getInstance()->addJs($this->getPath(). "/script.js");

        \Bitrix\Main\Loader::IncludeModule("iblock");

        $arResult = array();

        $arResult['SECTIONS'] = $this->getYears();

        $arResult['LAST_YEAR'] = array_values($arResult['SECTIONS'])[0]['NAME'];
        $arResult['START_YEAR'] = array_values(array_slice($arResult['SECTIONS'], -1))[0]['NAME'];

        $this->arResult = $arResult;
        $this->includeComponentTemplate();

    }


    public function getYears() {

        $arSections = array();

        $arFilter = Array('IBLOCK_ID'=>$this->arParams['IBLOCK_ID'], 'ACTIVE'=>'Y');
        $db_list = CIBlockSection::GetList(Array('SORT'=>'ASC'), $arFilter, true);

        while($ar_result = $db_list->GetNext()) {
            $arSections[] = $ar_result;
        }

        if(!empty($arSections)) {
            return $arSections;
        }


    }

}