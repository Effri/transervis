<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
    <?foreach($arResult["ITEMS"] as $arItem):?>
            <dt><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></dt>
            <dd><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["PREVIEW_TEXT"]?></a></dd>
    
        <section class="secondary" id="advantages">
            <div class="container px-0">
                <div id="shortcode3">
                    <div class="shortcode-html">
                        <!-- Info Blocks -->
                        <div class="row no-gutters">
                            <!-- Info Image -->
                            <div class="col-lg-5 g-min-height-360 g-bg-size-cover g-bg-pos-center" style="background-image: url('<?=CFile::GetPath($arItem['PROPERTIES']['IMG']['VALUE']);?>')">
                            </div>
                            <!-- End Info Image -->
                            <div class="col-lg-7 g-bg-gray-dark-v1 g-pt-40 g-pb-40 g-px-80">
                                <div class="text-uppercase g-mb-35">
                                    <div class="g-mb-30">
                                        <span class="d-block g-color-primary g-font-weight-700 g-font-size-default g-mb-15"><?=$arItem['NAME']?></span>
                                        <h2 class="h2 g-color-white g-font-weight-700 mb-0"><?=$arItem['PROPERTIES']['MAIN_BLOCK']['VALUE']?></h2>
                                    </div>
                                    <div class="g-width-70 g-brd-bottom g-brd-2 g-brd-primary">
                                    </div>
                                </div>
                                <p class="g-color-white-opacity-0_7 g-mb-65">
                                    <?=$arItem['PROPERTIES']['TXT_MAIN_BLOCK']['VALUE']?>
                                </p>
                                <div class="row align-items-stretch">
                                    <div class="col-sm-6 g-mb-30">
                                        <!-- Article --> <article class="h-100 g-flex-middle g-brd-left g-brd-3 g-brd-primary g-brd-white--hover g-bg-black-opacity-0_8 g-transition-0_3 g-pa-20">
                                            <div class="g-flex-middle-item">
                                                <h4 class="h6 g-color-white g-font-weight-600 text-uppercase g-mb-10"><?=$arItem['PROPERTIES']['MAIN_FIRST_BLOCK']['VALUE']?></h4>
                                                <p class="g-color-white-opacity-0_7 mb-0">
                                                    <?=$arItem['PROPERTIES']['TXT_MAIN_FIRST_BLOCK']['VALUE']?>
                                                </p>
                                            </div>
                                        </article>
                                        <!-- End Article -->
                                    </div>
                                    <div class="col-sm-6 g-mb-30">
                                        <!-- Article --> <article class="h-100 g-flex-middle g-brd-left g-brd-3 g-brd-primary g-brd-white--hover g-bg-black-opacity-0_8 g-transition-0_3 g-pa-20">
                                            <div class="g-flex-middle-item">
                                                <h4 class="h6 g-color-white g-font-weight-600 text-uppercase g-mb-10"><?=$arItem['PROPERTIES']['MAIN_SECOND_BLOCK']['VALUE']?></h4>
                                                <p class="g-color-white-opacity-0_7 mb-0">
                                                    <?=$arItem['PROPERTIES']['TXT_MAIN_SECOND_BLOCK']['VALUE']?>
                                                </p>
                                            </div>
                                        </article>
                                        <!-- End Article -->
                                    </div>
                                </div>
                                <div class="row align-items-stretch">
                                    <div class="col-sm-6 g-mb-30">
                                        <!-- Article --> <article class="h-100 g-flex-middle g-brd-left g-brd-3 g-brd-primary g-brd-white--hover g-bg-black-opacity-0_8 g-transition-0_3 g-pa-20">
                                            <div class="g-flex-middle-item">
                                                <h4 class="h6 g-color-white g-font-weight-600 text-uppercase g-mb-10"><?=$arItem['PROPERTIES']['MAIN_THIRD_BLOCK']['VALUE']?></h4>
                                                <p class="g-color-white-opacity-0_7 mb-0">
                                                    <?=$arItem['PROPERTIES']['TXT_MAIN_THIRD_BLOCK']['VALUE']?>
                                                </p>
                                            </div>
                                        </article>
                                        <!-- End Article -->
                                    </div>
                                    <div class="col-sm-6 g-mb-30">
                                        <!-- Article --> <article class="h-100 g-flex-middle g-brd-left g-brd-3 g-brd-primary g-brd-white--hover g-bg-black-opacity-0_8 g-transition-0_3 g-pa-20">
                                            <div class="g-flex-middle-item">
                                                <h4 class="h6 g-color-white g-font-weight-600 text-uppercase g-mb-10"><?=$arItem['PROPERTIES']['MAIN_FOUR_BLOCK']['VALUE']?></h4>
                                                <p class="g-color-white-opacity-0_7 mb-0">
                                                    <?=$arItem['PROPERTIES']['TXT_MAIN_FOUR_BLOCK']['VALUE']?>
                                                </p>
                                            </div>
                                        </article>
                                        <!-- End Article -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Info Blocks -->
                    </div>
                </div>
            </div>
        </section>
    <?endforeach;?>