<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
        <div class="container" id="services" style="padding: 0" >
            <div class="slider-class">

                <? foreach ($arResult["ITEMS"] as $arItem): ?>
                <div class="partner-class" style="padding: 0;">
                        <!-- Article -->
                        <article class="info-v5-3 g-parent g-pos-rel">
                            <!-- Article Image -->
                            <div class="g-bg-cover g-bg-black-opacity-0_4--after">
                                <img class="w-100" src="<?=CFile::GetPath($arItem['PROPERTIES']['IMG']['VALUE']);?>" alt="Image Description">
                            </div>
                            <!-- End Article Image -->

<!--                            <a class="u-ribbon-v1 g-color-main g-bg-white g-color-white--hover g-bg-primary--hover g-font-weight-700 g-font-size-11 text-uppercase g-top-30 g-left-30 g-text-underline--none--hover rounded g-transition-0_5" href="--><?//= $arItem['PROPERTIES']['LINK']['VALUE'] ?><!--">--><?//= $arItem['PROPERTIES']['LINK_TXT']['VALUE'] ?><!--</a>-->

                            <!-- Article Content -->
                            <div class="info-v5-3__info g-pos-rel g-pa-30 g-mt-minus-80 g-transition-0_5">
                                <!-- Article Header -->
                                <header class="g-pos-rel g-color-white g-mb-70">
<!--            <span class="info-v5-3__info-price g-transition-0_5">--><?//= $arItem['PROPERTIES']['COST']['VALUE'] ?><!--</span>-->
                                    <h3 class="info-v5-3__info-title g-color-white g-font-size-16 g-transition-0_5">
                                        <a class="g-color-white g-color-white--hover" href="#!"><?= $arItem['PROPERTIES']['HEADER']['VALUE'] ?></a>
                                    </h3>
                                </header>
                                <!-- End Article Header -->

                                <p class="g-mb-25"><?= $arItem['PROPERTIES']['TXT']['VALUE'] ?></p>

                                <!-- Article Info -->
<!--                                <ul class="list-unstyled info-v5-3__info-list g-font-weight-700 g-color-black g-color-white--parent-hover g-font-size-12 text-uppercase g-mb-0">-->
<!--                                    <li class="g-mb-20">-->
<!--                                        <i class="g-color-primary g-color-white--parent-hover g-font-size-18 g-mr-10 fa fa-calendar"></i>-->
<!--                                        --><?//= $arItem['PROPERTIES']['TIME']['VALUE'] ?>
<!--                                    </li>-->
<!--                                    <li class="g-mb-20">-->
<!--                                        <i class="g-color-primary g-color-white--parent-hover g-font-size-18 g-mr-10 fa fa-certificate"></i>-->
<!--                                        --><?//= $arItem['PROPERTIES']['LVL']['VALUE'] ?>
<!--                                    </li>-->
<!--                                </ul>-->
                                <!-- End Article Info -->
                            </div>
                            <!-- End Article Content -->
                        </article>
                        <!-- End Article -->
                </div>
            <? endforeach; ?>


            </div>
        </div>