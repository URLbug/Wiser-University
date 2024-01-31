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

//echo print_r($arResult['ITEMS'][1]['PROPERTIES']['TYPE_PROGRAM']['VALUE_ENUM']);
$IS_SHOW = true;

$arTypes = array(
    "Gradute" => "nav-home",
    "Postgraduate" => "nav-profile",
    "PHD Scholarships" => "nav-contact",
    "Training" => "nav-contact2"
);
?>
<div class="popular_program_area section__padding program__page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center">
                    <h3>Popular Program</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <nav class="custom_tabs text-center">
                    <div class="nav" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Graduate</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Postgraduate</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">PHD Scholarships</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact2" role="tab" aria-controls="nav-contact" aria-selected="false">Training</a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="tab-content" id="nav-tabContent">
        <?foreach($arTypes as $arKey=>$arValues):?>
            <div class="<?=$IS_SHOW ? 'tab-pane fade show active' : 'tab-pane fade'?>" id="<?=$arValues?>" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">
                <? $IS_SHOW = false;
                foreach ($arResult['ITEMS'] as $arItems):?>
                    <?if(in_array($arKey, $arItems['PROPERTIES']['TYPE_PROGRAM']['VALUE_ENUM'])):?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="<?=$arItems['PREVIEW_PICTURE']['SRC']?>" alt="">
                                </div>
                                <div class="program__content">
                                    <span><?=$arItems['PROPERTIES']['FACULTET']['VALUE']?></span>
                                    <h4><?=$arItems['NAME']?></h4>
                                    <p><?=$arItems['PREVIEW_TEXT']?></p>
                                    <a href="<?=$arItems['DETAIL_PAGE_URL']?>" class="boxed-btn5">Detale Page</a>
                                </div>
                            </div>
                        </div>
                    <?endif;?>
                <?endforeach;?>
                </div>
            </div>
        <?endforeach;?>
        </div>
    </div>
</div>
