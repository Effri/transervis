<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Application;
use Bitrix\Main\Engine\Contract\Controllerable;
use Bitrix\Main\Engine\ActionFilter;
use Bitrix\Main\Page\Asset;
use \Bitrix\Main\Loader;
use \Bitrix\Highloadblock as HL;

define("LOG_FILENAME", $_SERVER["DOCUMENT_ROOT"]."/log.txt");

class CProfitkitFormSimple extends CBitrixComponent implements Controllerable
{

    function fileDump(&$arFields,$paramName = "arrName"){
        AddMessage2Log($paramName.' = '.print_r($arFields, true),'');
    }

	public function onPrepareComponentParams($arParams)
    {
        if (!isset($arParams['PROPERTY']))
            $arParams['PROPERTY'] = array();
        if (!isset($arParams['FIELDS']))
            $arParams['FIELDS'] = array();
        if (!isset($arParams['REQUIRED']))
            $arParams['REQUIRED'] = array();

		return $arParams;
	}
	
	/**
	 * @return array
	 */
	public function configureActions()
	{
		return [
			'submit' => [
				'prefilters' => [
					/*new ActionFilter\Authentication()*/
				],
				'postfilters' => []
			]
		];
	}
	
    public function executeComponent()
    {
		if (!$this->arParams['IBLOCK_ID']) {
            return;
        }

		\Bitrix\Main\Loader::IncludeModule("iblock");

        Asset::getInstance()->addJs($this->getPath(). "/script.js");

		$arResult = array();
			
		$context = Application::getInstance()->getContext();
		$request = $context->getRequest();
        $submit = self::clean($request['submit']);
        if ($submit)
        {
            $result = $this->submitAction();
            $arResult['data'] = $result['data'];
            if ($result['error'])
            {
                $arResult['error'] = $result['error'];
            }
            else
            {
                if ($this->arParams['AJAX'] != 'Y') {
                    LocalRedirect(strtok($_SERVER['REQUEST_URI'], "?").'?result='.$result['result']);
                }
                unset($arResult['data']);
                $arResult['result'] = (int)$result['result'];
            }
        }

        if ((int)$request['result'])
            $arResult['result'] = (int)$request['result'];

      //  echo '<pre>',var_dump( $arResult),'</pre>';
		$this->arResult = $arResult;
		$this->includeComponentTemplate();


    }

	
	function submitAction()
	{
		$context = Application::getInstance()->getContext();
		$request = $context->getRequest();

		if (!$this->arParams['IBLOCK_ID']) {
            $request->addFilter(new \Bitrix\Main\Web\PostDecodeFilter);
            $signer = new \Bitrix\Main\Security\Sign\Signer;
            try
            {
                $signedParamsString = $request->get('signedParamsString') ?: '';
                $params = $signer->unsign($signedParamsString, 'form.simple');
                $this->arParams = unserialize(base64_decode($params));
            }
            catch (\Bitrix\Main\Security\Sign\BadSignatureException $e)
            {
                var_dump($e->getMessage());
                die();
            }
        }

        $result = array();
        foreach ($this->arParams['FIELDS'] as $field) {
            if (isset($request[$field])) {
                if (is_array($request[$field]))
                    $data[$field] = $request[$field];
                else
                    $data[$field] = self::clean($request[$field]);
            }

            if (in_array($field, $this->arParams['REQUIRED']) and !$data[$field])
                $result['error'][$field] = 'Заполните поле '.$field;
        }

        foreach ($this->arParams['PROPERTY'] as $prop) {
            if (isset($request[$prop])) {
                if (is_array($request[$prop]))
                    $data['property'][$prop] = $request[$prop];
                else
                    $data['property'][$prop] = self::clean($request[$prop]);
            }

            if (in_array($prop, $this->arParams['REQUIRED']) and !$data['property'][$prop])
                $result['error'][$prop] = 'Заполните поле #NAME#';

            if($prop == 'PHONE' && !preg_match("/^\s?(\+\s?7|8)([- ()]*\d){10}$/", $data['property'][$prop])) {
                $result['error'][$prop] = 'Неверный формат номера телефона';
            }

        }
        $result['data'] = $data;

		if ($result['error'])
		{
			return $result;	
		}

		$res = $this->saveData($data);
        $result = array_merge($result, $res);
		
		return $result;
	}

	function saveData($data)
    {

        CModule::IncludeModule("iblock");
        global $USER;
        if (!$data['NAME'])
            $data['NAME'] = 'Заявка от '.date("d.m.Y");

        $newFields = Array(
            "MODIFIED_BY"    => $USER->GetID(), // элемент изменен текущим пользователем
            "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
            "IBLOCK_ID"      => $this->arParams['IBLOCK_ID'],
            "PROPERTY_VALUES"=> $data['property'],
            "NAME"           => $data['NAME'],
            "ACTIVE"         => "Y",            // активен
        );

        //return $newFields;
        $el = new CIBlockElement;

        if($ID = $el->Add($newFields)) {

            $this->addRoistatLid($newFields);
            $result['result'] = $ID;
            $this->sendMail($data);
        } else {
            $result['error'][] = $el->LAST_ERROR;
        }
        return $result;
    }

    function sendMail($data) {

        $arEventFields = array(
            "FORM_NAME" => $this->arParams['FORM_NAME'],
        );
        if($data['NAME']) {
            $arEventFields['NAME'] = $data['NAME'];
        }

        if($data['property']) {
            $arEventFields['PROPS'] = $this->getMailProperty($data['property']);
        }

        $arrSITE =  's1';
        CEvent::Send("FORM_TO_ADMIN", $arrSITE, $arEventFields);
        /*  $this->fileDump($data); */
        if($data['property']['EMAIL']) {
            $arEventFields['EMAIL'] = $data['property']['EMAIL'];
            CEvent::Send("SEND_USER_FORM", $arrSITE, $arEventFields);
        }

    }

    function getMailProperty($props_arr) { 

        $mail_props = '';
        foreach ($props_arr as $k => $props) {
            $properties = CIBlockProperty::GetList(Array("sort"=>"asc", "name"=>"asc"), Array("ACTIVE"=>"Y", "IBLOCK_ID"=>$this->arParams['IBLOCK_ID'], "CODE" => $k));
            while ($prop_fields = $properties->GetNext())
            {

                $props_val = '';
                if($prop_fields['USER_TYPE_SETTINGS']['TABLE_NAME']) {
                    $sTableName = $prop_fields['USER_TYPE_SETTINGS']['TABLE_NAME'];
                    if(is_array($props)) {

                        foreach ($props as $p) {
                            $props_val .= $this->getHlValue($sTableName, $p).', ';
                        }

                    } else {
                        $props_val = $this->getHlValue($sTableName, $props);
                    }

                    $mail_props .= $prop_fields['NAME'].': '.$props_val.'<br>';

                } else {

                    if(is_array($props)) {

                        foreach ($props as $p) {
                            $props_val .= $p.', ';
                        }

                    } else {
                        $props_val = $props;
                    }

                    $mail_props .= $prop_fields['NAME'].': '.$props_val.'<br>';
                }

            }
        }

        return $mail_props;


    }

    function getHlValue($sTableName, $arHighloadProperty) {

        if ( Loader::IncludeModule('highloadblock') && !empty($sTableName) && !empty($arHighloadProperty) )
        {
            $hlblock = HL\HighloadBlockTable::getRow([
                'filter' => [
                    '=TABLE_NAME' => $sTableName
                ],
            ]);

            if ( $hlblock )
            {
                $entity      = HL\HighloadBlockTable::compileEntity( $hlblock );
                $entityClass = $entity->getDataClass();

                $arRecords = $entityClass::getList([
                    'filter' => [
                        'UF_XML_ID' => $arHighloadProperty
                    ],
                ]);
                foreach ($arRecords as $record)
                {
                    $val = $record['UF_NAME'];
                }

                return $val;

            }
        }

    }

    function addRoistatLid($fields) {

	    if($fields['PROPERTY_VALUES']) {
	        $comment = $this->getMailProperty($fields['PROPERTY_VALUES']);
        } else {
            $comment = '';
        }

	    $source_arr = array('Присоедениться' => 1, 'Обратный звонок' => 2, 'Квиз' => 3, 'Заявка' => 4);

	    $title = 'Название формы: '.$this->arParams['FORM_NAME'].', Название заявки: '.$fields['NAME'];

        $roistatData = array(
            'roistat' => isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : 'nocookie',
            'key'     => 'MjQ2ODQ0OjEzNzI3ODozNDc1OTZhNTE5YWEzYTE1OTRlZTJkMGJmNzkzMjc0Mg==', // Ключ для интеграции с CRM, указывается в настройках интеграции с CRM.
            'title'   => $title, // Название сделки
            'comment' => $comment, // Комментарий к сделке
            'name'    => $fields['NAME'], // Имя клиента
            'email'   => $fields['PROPERTY_VALUES']['EMAIL'], // Email клиента
            'phone'   => $fields['PROPERTY_VALUES']['PHONE'], // Номер телефона клиента
            'is_need_callback' => '0',
            'callback_phone' => '', // Переопределяет номер, указанный в настройках обратного звонка.
            'sync'    => '0', //
            'is_need_check_order_in_processing' => '1',
            'is_need_check_order_in_processing_append' => '1',
            'is_skip_sending' => '0',
            'fields'  => array('SOURCE_ID' => $source_arr[$this->arParams['FORM_NAME']]),
        );

        file_get_contents("https://cloud.roistat.com/api/proxy/1.0/leads/add?" . http_build_query($roistatData));

    }

    public static function clean($value = "") {
        $value = trim($value);
        $value = stripslashes($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value);
        return $value;
    }
}
?>