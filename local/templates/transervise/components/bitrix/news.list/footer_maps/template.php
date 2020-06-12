<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <div class="col-lg g-color-white-opacity-0_8" id="contact">
                <div class="align-self-center g-pa-60">
                    <div class="u-heading-v2-2--bottom g-brd-primary g-mb-30">
                        <h2 class="u-heading-v2__title h1 g-color-white text-uppercase g-font-weight-600">
                            <?= $arItem['PROPERTIES']['HEADER']['VALUE'] ?> </h2>
                    </div>
                    <div class="lead g-font-weight-400 g-mb-40">
                        <p> <?= $arItem['PROPERTIES']['TEXT']['VALUE'] ?>
                        </p>
                    </div>
                    <address class="text-uppercase display-6">
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex align-items-baseline g-mb-10"><i
                                        class="fa fa-map-marker g-color-primary g-mr-10"></i>
                                <p>
                                    <?= $arItem['PROPERTIES']['ADDRESS']['VALUE'] ?>
                                     <span
                                            class="g-color-white display-block"><?= $arItem['PROPERTIES']['ADDRESS_TXT']['VALUE'] ?></span>
                                </p>
                            </li>
                            <li class="d-flex align-items-baseline g-mb-10"><i
                                        class="fa fa-phone g-color-primary g-mr-10"></i>
                                <p>
                                    <?= $arItem['PROPERTIES']['PHONE']['VALUE'] ?>
                                     <a class="g-color-white display-block" href="tel:<?= $arItem['PROPERTIES']['PHONE_NUM']['VALUE'] ?>"><?= $arItem['PROPERTIES']['PHONE_NUM']['VALUE'] ?></a>
                                </p>
                            </li>
                            <li class="d-flex align-items-baseline g-mb-10"><i
                                        class="fa fa-envelope g-color-primary g-mr-10"></i>
                                <p> <?= $arItem['PROPERTIES']['EMAIL']['VALUE'] ?>
                                     <a class="g-color-white" href="<?= $arItem['PROPERTIES']['EMAIL_LINK']['VALUE'] ?>"> <?= $arItem['PROPERTIES']['EMAIL_LINK']['VALUE'] ?></a>
                                </p>
                            </li>
                            <li class="d-flex align-items-baseline">
                                    <button class="g-color-white modal_show btn-center"> <?= $arItem['PROPERTIES']['BTN_FEEDBACK']['VALUE'] ?></button>
                            </li>
                        </ul>
                    </address>
                </div>
            </div>
        <? endforeach; ?>