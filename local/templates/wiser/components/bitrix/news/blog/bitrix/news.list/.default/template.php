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

<div class="col-lg-8 mb-5 mb-lg-0">
    <div class="blog_left_sidebar">
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $TIME_EVENT = $arItem['TIMESTAMP_X'];

            $DATES = preg_split("/[\s,]+/", $TIME_EVENT);

            preg_match("/(\d{2})\.(\d{2})\.(\d{4})/", $DATES[0], $DATE);
            ?>

            <article class="blog_item">
                <div class="blog_item_img">
                    <img class="card-img rounded-0" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="">
                    <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="blog_item_date">
                        <h3><?=$DATE[1]?></h3>
                        <p><?=$arMonths[$DATE[2]]?></p>
                    </a>
                </div>

                <div class="blog_details">
                    <a class="d-inline-block" href="<?=$arItem['DETAIL_PAGE_URL']?>"">
                        <h2><?=$arItem['NAME']?></h2>
                    </a>
                    <p><?=$arItem['PREVIEW_TEXT']?></p>
                    <ul class="blog-info-link">
                        <li><a><i class="fa fa-user"></i><?=$arItem['PROPERTIES']['AUTHOR']['VALUE']?></a></li>
                        <li><a><i class="fa fa-comments"></i> 03 Comments</a></li>
                    </ul>
                </div>
            </article>

        <?endforeach;?>

        <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
            <br /><?=$arResult["NAV_STRING"]?>
        <?endif;?>
    </div>
</div>


