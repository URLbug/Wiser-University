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

//echo print_r($arResult);

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

$TIME_EVENT = $arResult['PROPERTIES']['TIME_EVENT']['VALUE'];

$DATES = preg_split("/[\s,]+/", $TIME_EVENT);

$TIME = substr($DATES[1], 0, 5);

preg_match("/(\d{2})\.(\d{2})\.(\d{4})/", $DATES[0], $DATE);

?>
<div class="bradcam_area breadcam_bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>event details</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="event_details_area section__padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single_event d-flex align-items-center">
                    <div class="thumb">
                        <img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="">
                        <div class="date text-center">
                            <h4><?=$DATE[1]?></h4>
                            <span><?=$arMonths[$DATE[2]] . ', ' . $DATE[3]?></span>
                        </div>
                    </div>
                    <div class="event_details_info">
                        <div class="event_info">
                            <a href="/">
                                <h4><?=$arResult['NAME']?></h4>
                            </a>
                            <p><span> <i class="flaticon-clock"></i><?=$TIME?></span> <span> <i class="flaticon-calendar"></i><?=$DATE[1] . ' ' . $arMonths[$DATE[2]] . ' ' . $DATE[3]?></span> <span> <i class="flaticon-placeholder"></i><?=$arResult['PROPERTIES']['PLACE_EVENT']['VALUE']?></span> </p>
                        </div>
                        <p class="event_info_text">
                            <?=$arResult['DETAIL_TEXT']?>
                        </p>
                        <a href="/" class="boxed-btn3">Book a seat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>