<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? foreach ($arResult["ITEMS"] as $arItem): ?>
    <dt><? echo $arItem["DISPLAY_ACTIVE_FROM"] ?></dt>
    <dd><a href="<? echo $arItem["DETAIL_PAGE_URL"] ?>"><? echo $arItem["PREVIEW_TEXT"] ?></a></dd>
    <!-- Banners -->
    <div class=" align-items-stretch just-center" id="banner">
        <div class="container g-mb-30 g-mg-0">
            <!-- Article -->
            <article class="text-center g-color-white g-overflow-hidden">
                <div class="u-block-hover--scale g-min-height-200 g-flex-middle g-bg-cover g-bg-size-cover g-bg-bluegray-opacity-0_2--after g-transition-0_5"
                     style="background-image: url('<?= CFile::GetPath($arItem['PROPERTIES']['IMG']['VALUE']); ?>')">
                    <div class="g-flex-middle-item g-pos-rel g-z-index-1 g-py-120 g-px-20">
                        <h3 class="text-uppercase"><?= $arItem['NAME'] ?></h3>
                        <hr class="g-brd-3 g-brd-white g-width-30 g-my-20">
<!--                        <a class="btn btn-md u-btn-outline-white g-font-weight-600 g-font-size-11 text-uppercase"-->
<!--                           href="--><?//= $arItem['PROPERTIES']['BTN_LINK']['VALUE'] ?><!--" id="modal">--><?//= $arItem['PROPERTIES']['BTN_TEXT']['VALUE'] ?><!--</a>-->
                        <button class="btn btn-md u-btn-outline-white g-font-weight-600 g-font-size-17 text-uppercase modal_show" href=" "><?= $arItem['PROPERTIES']['BTN_TEXT']['VALUE'] ?></button>
                    </div>
                </div>
            </article>
            <!-- End Article -->
        </div>
    </div>
<? endforeach; ?>
