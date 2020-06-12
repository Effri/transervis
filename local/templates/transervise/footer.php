<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Page\Asset;
use \Bitrix\Main\Localization\Loc;

IncludeTemplateLangFile(__FILE__);
?>

<!-- Footer - Script's -->
<div class="shortcode-scripts">

    <?php
    CJSCore::Init(array('transervise'));
    /** JS Global Compulsory */
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/vendor/jquery/jquery.min.js");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/vendor/jquery-migrate/jquery-migrate.min.js");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/vendor/popper.js/popper.min.js");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/vendor/bootstrap/bootstrap.min.js");
    /** jQuery UI Core */
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/vendor/jquery-ui/jquery-ui.core.min.js");
    /** jQuery UI Helpers */
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/vendor/jquery-ui/ui/widgets/menu.js");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/vendor/jquery-ui/ui/widgets/mouse.js");
    /**  jQuery UI Widgets */
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/vendor/jquery-ui/ui/widgets/autocomplete.js");
    /**  JS Unify */
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/js/hs.core.js");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/js/components/hs.header.js");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/js/helpers/hs.hamburgers.js");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/js/custom.js");
    /** JS Unify */
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/js/hs.core.js");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/js/components/hs.header.js");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/js/helpers/hs.hamburgers.js");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/js/components/hs.scroll-nav.js");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/js/components/hs.sticky-block.js");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/js/helpers/hs.height-calc.js");
    /** JS Implementing Plugins */
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/vendor/slick-carousel/slick/slick.js");
    /** JS Unify */
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/js/components/hs.rating.js");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/js/components/hs.carousel.js");

    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/js/custom.js");
    ?>

<!--    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>-->
<!--    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>-->


    <!-- JS Global Compulsory -->
    <script src="<?= SITE_TEMPLATE_PATH ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= SITE_TEMPLATE_PATH ?>/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="<?= SITE_TEMPLATE_PATH ?>/assets/vendor/popper.js/popper.min.js"></script>
    <script src="<?= SITE_TEMPLATE_PATH ?>/assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Custom -->
    <script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/custom.js"></script>


    <!-- JS Plugins Init. -->
    <script >
        // $(document).ready(function () {
        //     // initialization of carousel
        //     $.HSCore.components.HSCarousel.init('.js-carousel');
        // });


        var myMap;

        // Дождёмся загрузки API и готовности DOM.
        ymaps.ready(init);

        function init () {
            // Создание экземпляра карты и его привязка к контейнеру с
            // заданным id ("map").
            myMap = new ymaps.Map('map', {
                // При инициализации карты обязательно нужно указать
                // её центр и коэффициент масштабирования.
                center: [55.76, 37.64], // Москва
                zoom: 10
            }, {
                searchControlProvider: 'yandex#search'
            });

            document.getElementById('destroyButton').onclick = function () {
                // Для уничтожения используется метод destroy.
                myMap.destroy();
            };

        }
    </script>



<!--    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>-->
<!--    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>-->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.slider-class').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                dots: true,
                nextArrow: '<div class="js-next u-arrow-v1 ma-down g-pos-abs g-bottom-0 g-width-45 g-height-45 g-font-size-default g-color-gray-dark-v5 g-bg-white g-color-white--hover g-bg-primary--hover rounded fa fa-angle-right g-right-35x--lg g-right-15 slick-arrow" style=""></div>',
                prevArrow: '<div class="js-prev u-arrow-v1 ma-down g-pos-abs g-bottom-0 g-width-45 g-height-45 g-font-size-default g-color-gray-dark-v5 g-bg-white g-color-white--hover g-bg-primary--hover rounded fa fa-angle-left g-left-35x--lg g-left-15 slick-arrow slick-disabled" style=""></div>',
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                        }
                    }
                ]
                // dotsClass: 'u-carousel-indicators-v1'
                //nextArrow: '<button class="slick-prev slick-arrow" aria-label="Previous" role="tablist" style="display: block;">Previous</button>' ,
                //prevArrow: '<button class="slick-next slick-arrow" aria-label="Next" role="tablist" style="display: block;">Next</button>'
            });
        });
    </script>


    <!--    <script type="text/javascript">-->
<!--        $('.multiple-items').slick({-->
<!--            infinite: true,-->
<!--            slidesToShow: 3,-->
<!--            slidesToScroll: 3-->
<!--        });-->
<!--    </script>-->
</div>