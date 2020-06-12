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
?>