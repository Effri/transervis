<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="history_line">

    <div class="history_line_year_counter">
        <?
        $i = -1;
        for ($x=$arResult['LAST_YEAR']; $x<=$arResult['START_YEAR']; $x++) {
        $i++;

            ?>
            <div data-id="<?=$x?>" <? if($i < 3): ?> id="history_line_year_item_<?=($i + 3)?>" <? endif; ?> class="history_line_year_item<? if($k >= 3): ?> next_item<? endif; ?> "><?=$x?></div>
        <? } ?>
    </div>
<? /* ?>
    <div class="history_line_year_counter">
        <? foreach ($arResult['SECTIONS'] as $k => $arSection): ?>
            <div data-id="<?=$arSection['NAME']?>" <? if($k < 3): ?> id="history_line_year_item_<?=($k + 3)?>" <? endif; ?> class="history_line_year_item<? if($k >= 3): ?> next_item<? endif; ?> "><?=$arSection['NAME']?></div>
        <? endforeach; ?>
    </div>  <? */ ?>

    <div class="history_line_project_info">
        <div class="history_line_main_info">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/h_l.png" alt="">
            <p>АО «Электронмаш» – это современное промышленное <br>
                предприятие, разрабатывающее и предоставляющее <br>
                Заказчикам системные решения в области <br>
                электроснабжения и автоматизации производства
            </p>
        </div>
    </div>
    <?
    $ar = array(2000 =>
        array(
        -1=>array('top'=>-200, 'right'=>-250, 'left'=>1400, 'style'=>''),
        0=>array('top'=>-100, 'right'=>-250, 'left'=>1320, 'style'=>''),
        1=>array('top'=>60, 'right'=>-125, 'left'=>1213, 'style'=>''),
        2=>array('top'=>190, 'right'=>-40, 'left'=>1108, 'style'=>''),
        3=>array('top'=>300, 'right'=>28, 'left'=>999, 'style'=>''),
        4=>array('top'=>403, 'right'=>133, 'left'=>883, 'style'=>''),
        5=>array('top'=>495, 'right'=>289, 'left'=>751, 'style'=>''),
        6=>array('top'=>583, 'right'=>511, 'left'=>595, 'style'=>' width:150px !important;'),
        7=>array('top'=>657, 'right'=>673, 'left'=>424, 'style'=>' width:150px !important;'),
        8=>array('top'=>720, 'right'=>860, 'left'=>211, 'style'=>' width:180px !important;'),
        9=>array('top'=>780, 'right'=>1000, 'left'=>-200, 'style'=>''),
        10=>array('top'=>850, 'right'=>1000, 'left'=>-400, 'style'=>''),
        11=>array('top'=>850, 'right'=>1000, 'left'=>-400, 'style'=>''),
    ),
        1800 =>
            array(
                -1=>array('top'=>-200, 'right'=>-250, 'left'=>1400, 'style'=>''),
                0=>array('top'=>-100, 'right'=>-250, 'left'=>1220, 'style'=>''),
                1=>array('top'=>60, 'right'=>-125, 'left'=>1094, 'style'=>''),
                2=>array('top'=>160, 'right'=>-40, 'left'=>1008, 'style'=>''),
                3=>array('top'=>260, 'right'=>28, 'left'=>910, 'style'=>''),
                4=>array('top'=>363, 'right'=>133, 'left'=>794, 'style'=>''),
                5=>array('top'=>464, 'right'=>289, 'left'=>650, 'style'=>''),
                6=>array('top'=>543, 'right'=>511, 'left'=>495, 'style'=>' width:150px !important;'),
                7=>array('top'=>607, 'right'=>673, 'left'=>324, 'style'=>' width:150px !important;'),
                8=>array('top'=>660, 'right'=>673, 'left'=>124, 'style'=>' width:180px !important;'),
                9=>array('top'=>680, 'right'=>1000, 'left'=>-200, 'style'=>''),
                10=>array('top'=>850, 'right'=>1000, 'left'=>-400, 'style'=>''),
                11=>array('top'=>850, 'right'=>1000, 'left'=>-400, 'style'=>''),
            ),
        1650 =>
            array(
                -1=>array('top'=>-200, 'right'=>-250, 'left'=>1400, 'style'=>''),
                0=>array('top'=>-100, 'right'=>-250, 'left'=>940, 'style'=>''),
                1=>array('top'=>10, 'right'=>-125, 'left'=>879, 'style'=>''),
                2=>array('top'=>92, 'right'=>-40, 'left'=>812, 'style'=>''),
                3=>array('top'=>180, 'right'=>28, 'left'=>732, 'style'=>''),
                4=>array('top'=>256, 'right'=>133, 'left'=>653, 'style'=>''),
                5=>array('top'=>332, 'right'=>289, 'left'=>551, 'style'=>''),
                6=>array('top'=>409, 'right'=>511, 'left'=>425, 'style'=>' width:150px !important;'),
                7=>array('top'=>474, 'right'=>673, 'left'=>264, 'style'=>' width:150px !important;'),
                8=>array('top'=>520, 'right'=>860, 'left'=>71, 'style'=>' width:180px !important;'),
                9=>array('top'=>560, 'right'=>1000, 'left'=>-200, 'style'=>''),
                10=>array('top'=>850, 'right'=>1000, 'left'=>-400, 'style'=>''),
                11=>array('top'=>850, 'right'=>1000, 'left'=>-400, 'style'=>''),
            ),
        1400 =>
            array(
                -1=>array('top'=>-200, 'right'=>-250, 'left'=>1400, 'style'=>''),
                0=>array('top'=>-100, 'right'=>-250, 'left'=>1320, 'style'=>''),
                1=>array('top'=>60, 'right'=>-125, 'left'=>1213, 'style'=>''),
                2=>array('top'=>190, 'right'=>-40, 'left'=>1108, 'style'=>''),
                3=>array('top'=>300, 'right'=>28, 'left'=>999, 'style'=>''),
                4=>array('top'=>403, 'right'=>133, 'left'=>883, 'style'=>''),
                5=>array('top'=>495, 'right'=>289, 'left'=>751, 'style'=>''),
                6=>array('top'=>583, 'right'=>511, 'left'=>595, 'style'=>' width:150px !important;'),
                7=>array('top'=>657, 'right'=>673, 'left'=>424, 'style'=>' width:150px !important;'),
                8=>array('top'=>720, 'right'=>860, 'left'=>211, 'style'=>' width:180px !important;'),
                9=>array('top'=>780, 'right'=>1000, 'left'=>-200, 'style'=>''),
                10=>array('top'=>850, 'right'=>1000, 'left'=>-400, 'style'=>''),
                11=>array('top'=>850, 'right'=>1000, 'left'=>-400, 'style'=>''),
            ),
    );

    ?>
    <style>
        <? foreach ($ar[2000] as $k => $v) { ?>
        .history_line_item<?=$k;?> {top:<?=$v['top'];?>px; left:<?=$v['left'];?>px;<?=$v['style'];?>}
        <? } ?>
        @media only screen and (max-width : 1800px) {
        <? foreach ($ar[1800] as $k => $v) { ?>
            .history_line_item<?=$k;?> {top:<?=$v['top'];?>px; left:<?=$v['left'];?>px;<?=$v['style'];?>}
        <? } ?>
        }
        @media only screen and (max-width : 1650px) {
        <? foreach ($ar[1650] as $k => $v) { ?>
            .history_line_item<?=$k;?> {top:<?=$v['top'];?>px; left:<?=$v['left'];?>px;<?=$v['style'];?>}
        <? } ?>
        }
        @media only screen and (max-width : 1400px) {
        <? foreach ($ar[1400] as $k => $v) { ?>
            .history_line_item<?=$k;?> {position: static !important; top:unset; left: unset; right: unset; width: 220px !important;}
        <? } ?>
        }

    </style>
    <a class="history_top disabled"></a>
    <a class="history_bottom"></a>
    <div class="history_line_item_wrap" >
        <? $arResult['SECTIONS'] = array_reverse($arResult['SECTIONS']); ?>
        <? $i=0; foreach ($arResult['SECTIONS'] as $k => $arSection): $i++; ?>
            <div data-dop-id="<?=$arSection['ID']?>" data-id="<?=$arSection['NAME']?>" class="history_line_item history_line_item<?=$i;?>" data-n="<?=$i;?>">
                <h3><?=$arSection['NAME']?></h3>
                <p><?=$arSection['DESCRIPTION']?>
                </p>
            </div>
        <? endforeach; ?>
    </div>

    <div class="year_detail_img_wrap">
        <? foreach ($arResult['SECTIONS'] as $k => $arSection):
            $arFileTmp = '';
            if(!empty($arSection['PICTURE'])) {
                $picture = $arSection['PICTURE'];

                if($picture) {
                    $arFileTmp = \CFile::ResizeImageGet(
                        $picture,
                        array('width' => 396, 'height' => 219),
                        BX_RESIZE_IMAGE_PROPORTIONAL,
                        true
                    );

                }
            }
            ?>
        <? if($arFileTmp['src']): ?>
            <img data-id="<?=$arSection['ID']?>" src="<?=$arFileTmp['src']?>" alt="">
        <? endif; ?>
        <? endforeach; ?>
    </div>

</div>

<script>

</script>