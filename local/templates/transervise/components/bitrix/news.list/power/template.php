<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
            <!-- Products Block -->
            <section class="container" id="power">
                <div id="shortcode1">
                    <div class="shortcode-html">
                        <div class="row">
                            <? foreach ($arResult["ITEMS"] as $arItem): ?>
                            <div class="col-sm-6 col-md-4 g-mb-30">
                                <!-- Article -->
                                <article
                                        class="g-pos-rel g-rounded-4 g-brd-bottom g-brd-3 g-brd-gray-light-v4 g-brd-primary--hover text-center g-transition-0_3 g-transition--linear">
                                    <!-- Article Image -->
                                    <figure>
                                        <img src='<?=CFile::GetPath($arItem['PROPERTIES']['IMG']['VALUE']);?>'
                                                 class="w-100">
                                        <!-- Image Caption -->
<!--                                        <figcaption-->
<!--                                                class="u-ribbon-v1 g-color-white g-bg-purple-opacity-0_7 g-font-weight-700 g-font-size-11 text-uppercase g-top-10 g-left-10 rounded">--><?//=$arItem['PROPERTIES']['TEMPLATE']['VALUE']?>
<!--                                        </figcaption>-->
                                        <!-- End Image Caption -->
                                    </figure>
                                    <!-- End Article Image -->
                                    <!-- Article Content -->
                                    <div class="g-bg-secondary g-pa-30">
                                        <h3 class="h4">
                                            <a
                                                    class="g-color-main g-color-primary--hover g-text-underline--none--hover"
                                                    href="<?=$arItem['PROPERTIES']['BTN_LINK']['VALUE']?>"><?=$arItem['PROPERTIES']['BTN_TXT']['VALUE']?></a>
                                        </h3>
                                        <p>
                                            <?=$arItem['PROPERTIES']['TXT_TEMPLATE']['VALUE']?>
                                        </p>
                                        <div class="js-rating g-color-primary g-font-size-12" data-rating="4.5">
                                            <div class="g-rating"
                                                 style="display: inline-block; position: relative; z-index: 1; white-space: nowrap; margin-left: -4px; margin-right: -4px;">
                                                <div class="g-rating-forward"
                                                     style="position: absolute; left: 0px; top: 0px; height: 100%; overflow: hidden; width: 90%;">
                                                    <i class="fa fa-star"
                                                       style="margin-left: 4px; margin-right: 4px;"></i><i
                                                            class="fa fa-star"
                                                            style="margin-left: 4px; margin-right: 4px;"></i><i
                                                            class="fa fa-star"
                                                            style="margin-left: 4px; margin-right: 4px;"></i><i
                                                            class="fa fa-star"
                                                            style="margin-left: 4px; margin-right: 4px;"></i><i
                                                            class="fa fa-star"
                                                            style="margin-left: 4px; margin-right: 4px;"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Article Content -->
                                </article>
                                <!-- End Article -->
                            </div>

                            <? endforeach; ?>
                        </div>
                    </div>
                    <!-- End Products Block -->
                </div>
            </section>