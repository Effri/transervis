<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="container margin-t-b" id="partner">
    <div class="row">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <div class="col-lg-4 g-mb-60">
                <!-- Icon Blocks -->
                <div class="u-shadow-v21 g-brd-around--md g-brd-gray-light-v4 text-center g-px-30 g-pb-20">
                                    <span class="u-icon-v3 g-color-white g-bg-orange-lineargradient g-pull-50x-up rounded-circle">
                                        <i class="u-line-icon-pro"><img class="u-line-icon-img"
                                                                        src="<?= CFile::GetPath($arItem['PROPERTIES']['ICON']['VALUE']); ?>"
                                                                        alt=""></i> </span>
                    <h3 class="h5 g-color-black g-mb-10"><?= $arItem['PROPERTIES']['HEADER']['VALUE'] ?></h3>
                    <p class="g-color-gray-dark-v4 g-mb-20">
                        <?= $arItem['PROPERTIES']['TXT']['VALUE'] ?>
                    </p>
<!--                    <a class="g-font-weight-600 g-font-size-12 g-text-underline--none--hover text-uppercase"-->
<!--                       href="--><?//= $arItem['PROPERTIES']['LINK']['VALUE'] ?><!--">--><?//= $arItem['PROPERTIES']['LINK_TXT']['VALUE'] ?><!--</a>-->
                </div>
                <!-- End Icon Blocks -->
            </div>
        <? endforeach; ?>
    </div>
</div>