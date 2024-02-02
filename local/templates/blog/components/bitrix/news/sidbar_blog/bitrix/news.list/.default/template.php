<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

$arMonths = array(
    "01" => "Jan",
    "02" => "Feb",
    "03" => "Mar",
    "04" => "Apr",
    "05" => "May",
    "06" => "Jun",
    "07" => "Jul",
    "08" => "Aug",
    "09" => "Sep",
    "10" => "Oct",
    "11" => "Nov",
    "12" => "Dec"
);
?>

<aside class="single_sidebar_widget popular_post_widget">
    <h3 class="widget_title">Recent Post</h3>
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $TIME_EVENT = $arItem['TIMESTAMP_X'];

        $DATES = preg_split("/[\s,]+/", $TIME_EVENT);

        preg_match("/(\d{2})\.(\d{2})\.(\d{4})/", $DATES[0], $DATE);
        ?>
        <div class="media post_item">
            <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="post" width="80" height="80">
            <div class="media-body">
                <a href="<?=$arItem['DETAIL_PAGE_URL']?>">
                    <h3><?=strlen($arItem['NAME']) >= 22 ? substr($arItem['NAME'], 0, 22) : $arItem['NAME']?></h3>
                </a>
                <p><?=$arMonths[$DATE[2]]?> <?=$DATE[1]?>, <?=$DATE[3]?></p>
            </div>
        </div>
    <?endforeach;?>
</aside>


