<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <header id="js-header" class="u-header u-header--sticky-top u-header--toggle-section u-header--change-appearance"
            data-header-fix-moment="300">
    <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10"
         data-header-fix-moment-exclude="g-py-10" data-header-fix-moment-classes="u-shadow-v18 g-py-0">
    <nav class="navbar navbar-expand-lg">
    <div class="container">
    <!-- Responsive Toggle Button -->
    <button class="btn g-brd-none g-pa-0 g-pos-abs g-right-0 g-top-btn navbar-toggler "
            type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar"
            data-toggle="collapse" data-target="#navBar">
        <div class="btn_modal_menu">Меню</div>
        <ul class="menu clearfix">
        <?
        foreach($arResult as $arItem):
            if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                continue;
            ?>
            <?if($arItem["SELECTED"]):?>
            <li class="nav-item g-mx-20--lg ">
                <a href="<?=$arItem["LINK"]?>" class="nav-link px-0 selected "><?=$arItem["TEXT"]?></a>
            </li>
        <?else:?>
            <li class="nav-item g-mx-20--lg g-bg-primary--hover g-color-white--hover">
                <a href="<?=$arItem["LINK"]?>" class="nav-link px-0"><?=$arItem["TEXT"]?></a>
            </li>
        <?endif?>

        <?endforeach?>
        </ul>

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
                <a href="<?=$arItem["LINK"]?>" class="nav-link selected  g-bg-primary--hover g-color-white--hover"><?=$arItem["TEXT"]?></a>
            </li>
        <?else:?>
            <li class="nav-item g-mx-20--lg">
                <a href="<?=$arItem["LINK"]?>" class="nav-link  g-bg-primary--hover g-color-white--hover"><?=$arItem["TEXT"]?></a>
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