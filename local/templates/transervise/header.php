<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?

use Bitrix\Main\Page\Asset;
use \Bitrix\Main\Localization\Loc;

IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <? $APPLICATION->ShowHead(); ?>
    <? $APPLICATION->ShowPanel() ?>
    <?
    $APPLICATION->SetPageProperty("title", "ТранСервис");
    ?>

    <title><? $APPLICATION->ShowTitle("ТранСервис") ?></title>

    <link href="<?= SITE_TEMPLATE_PATH ?>/common.css" type="text/css" rel="stylesheet"/>
    <link href="<?= SITE_TEMPLATE_PATH ?>/colors.css" type="text/css" rel="stylesheet"/>

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800">

    <?php
    CJSCore::Init(array('transervise'));
    /** CSS Global Compulsory */
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/vendor/bootstrap/bootstrap.min.css");
    /** CSS Global Icons */
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/vendor/icon-awesome/css/font-awesome.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/vendor/icon-line/css/simple-line-icons.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/vendor/icon-line-pro/style.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/vendor/icon-hs/style.css");
    /** CSS Unify */
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/unify-core.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/unify-components.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/unify-globals.css");
    /** CSS Customization */
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/custom.css");
    /**  CSS Implementing Plugins */
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/vendor/slick-carousel/slick/slick.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/vendor/slick-carousel/slick/slick-theme.css");
    ?>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=<ваш API-ключ>" type="text/javascript"></script>
    <script src="mapbasics.js" type="text/javascript"></script>
</head>
<body>
<!-- Header -->

<?if (!empty($arResult)):?>
    <header id="js-header" class="u-header u-header--sticky-top u-header--toggle-section u-header--change-appearance"
            data-header-fix-moment="300">
        <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10"
             data-header-fix-moment-exclude="g-py-10" data-header-fix-moment-classes="u-shadow-v18 g-py-0">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Responsive Toggle Button -->
                    <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0"
                            type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar"
                            data-toggle="collapse" data-target="#navBar">
              <span class="hamburger hamburger--slider">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
              </span>
              </span>
                    </button>

                    <!-- Logo -->
                    <a href="/index.php" class="navbar-brand">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/logo.php"
                            )
                        );?>
                    </a>
                    <!-- End Logo -->
                    <!-- Navigation -->
                    <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg" id="navBar">
                        <ul class="navbar-nav text-uppercase g-font-weight-600 ml-auto">

                            <?
                            foreach($arResult as $arItem):
                                if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                                    continue;
                                ?>
                                <?if($arItem["SELECTED"]):?>
                                <li class="nav-item g-mx-20--lg">
                                    <a href="<?=$arItem["LINK"]?>" class="nav-link px-0 selected"><?=$arItem["TEXT"]?></a>
                                </li>
                            <?else:?>
                                <li class="nav-item g-mx-20--lg">
                                    <a href="<?=$arItem["LINK"]?>" class="nav-link px-0"><?=$arItem["TEXT"]?></a>
                                </li>
                            <?endif?>

                            <?endforeach?>
                        </ul>
                    </div>
                    <!-- End Navigation -->
                </div>
            </nav>
        </div>
    </header>
<?endif?>
<!-- End Header -->
