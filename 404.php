<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Страница не найдена");

?>

<div class="title_404">404</div>
    <p class="descr_404">Страница не найдена, перейти на <a href="/">главную</a> </p>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>